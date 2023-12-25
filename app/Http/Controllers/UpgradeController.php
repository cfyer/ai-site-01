<?php

namespace App\Http\Controllers;

use App\Services\Payment\Crypto;
use App\Models\{Payment, Plan};
use Illuminate\Http\Request;

class UpgradeController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('upgrade', compact('plans'));
    }

    public function pay(Plan $plan)
    {
        $payment = Payment::query()->create(['user_id' => auth()->id(), 'plan_id' => $plan->id]);

        $crypto = new Crypto('Q2ZVTXB-5WCMH0D-JF32V7Y-1R2G9DM');

        $invoice = $crypto->createInvoice([
            'price_amount' => $plan->cost,
            'price_currency' => 'usd',
            'order_id' => $payment->id,
            'order_description' => $plan->credits . " Credits",
            'success_url' => url('upgrade/verify'),
            'customer_email' => auth()->user()->email
        ]);

        return redirect(json_decode($invoice, 1)['invoice_url']);
    }

    public function verify(Request $request)
    {
        if (! $request->has('NP_id')) abort(403);

        $crypto = new Crypto('Q2ZVTXB-5WCMH0D-JF32V7Y-1R2G9DM');

        $status = json_decode($crypto->getPaymentStatus($request->get('NP_id')));

        if ($status->payment_status != "finished") return ["message" => "ERROR in payment"];

        $payment = Payment::query()->find($status->order_id);

        if (! is_null($payment->NP_ID)) return ["message" => "ERROR in verify"];

        $payment->update(['status' => 'finished', 'NP_ID' => $request->get('NP_id')]);

        auth()->user()->update(['credits' => auth()->user()->credits + $payment->plan->credits]);

        return redirect('/dashboard')->with(['msg' => 'Payment Successfully.']);
    }
}
