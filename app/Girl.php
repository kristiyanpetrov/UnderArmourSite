<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Girl extends Model
{
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];
}
