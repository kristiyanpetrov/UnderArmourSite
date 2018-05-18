<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boy extends Model
{
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];
}
