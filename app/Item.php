<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'series',
        'sale_date',
        'type',
        'price'
    ];
}
