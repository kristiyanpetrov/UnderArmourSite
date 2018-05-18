<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Women extends Model
{
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];
}
