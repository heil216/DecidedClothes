<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Clothe extends Model
{
    protected $fillable = [
        'brand_name','season_type','style ','color',' category ','image_path','type','user_id',
    ];
    // protected $table = 'User_clothe';
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('user')->orderBy( 'updated_at', 'DESC')->paginate($limit_count);
    }
    public function users(){
        return $this->belongsToMany("App\User","clothe_user");
    }
    public function user(){
        return $this -> belongsTo('App\User');
    }
    // public function getPaginateByUser(int $limit_count = 5)
    // {
    //     return $this::with('user')->orderBy( 'updated_at', 'DESC')->paginate($limit_count);
    // }
}

