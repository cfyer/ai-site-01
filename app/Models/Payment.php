<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = ['user_id', 'plan_id', 'status', 'NP_ID'];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
}
