<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Shetabit\Visitor\Traits\Visitable;

class Article extends Model
{
    use Visitable;

    protected $fillable = ['title', 'body', 'image', 'slug'];
}

