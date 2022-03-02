<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Clothe extends Model
{
    protected $fillable = [
        'brand_name','season_type','style ','color',' category ','image_path','type',
    ];
    // protected $table = 'User_clothe';
    public function getPaginateByLimit(int $limit_count = 5)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function users(){
    
    return $this->belongsToMany("App\User","user_clothe");
    
    }
}

