<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothe extends Model
{
    protected $fillable = [
        'name','thickness','style ','color',' where_buy ',
    ];
    public function getPaginateByLimit(int $limit_count = 5)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}

