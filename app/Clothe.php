<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Clothe extends Model
{
    protected $fillable = [
        'name','thickness','style ','color',' where_buy ','image_path',
    ];
    public function getPaginateByLimit(int $limit_count = 5)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}

