<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ware extends Model
{
    protected $fillable = [
        'name', 'price', 'description'
    ];
}
