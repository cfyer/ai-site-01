<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class UpgradeController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('upgrade', compact('plans'));
    }

    public function pay()
    {
        // TODO
    }

    public function verify()
    {
        // TODO
    }
}