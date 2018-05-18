<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Men extends Model
{
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];
}
