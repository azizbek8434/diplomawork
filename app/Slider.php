<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'image',
        'title',
        'content',
        'author',
        'url'
    ];
}