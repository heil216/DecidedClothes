<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothe extends Model
{
    protected $fillable = [
        'name','thickness','style ','color',' where_buy ',
    ];
}
