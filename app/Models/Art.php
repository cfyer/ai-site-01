<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    protected $fillable = ['prompt', 'source', 'user_id'];
}
