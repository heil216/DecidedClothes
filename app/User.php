<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\CustomResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','personalseason','style','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function clothes(){
    // return $this->belongsToMany('App\Clothe');
    // }
    public function clothes()
    {
    return $this->belongsToMany("App\Clothe","clothe_user");
    }
    public function clothe()
    {
    return $this -> hasMany('App\Clothe');
    }
    public function getPaginateByClothe(int $limit_count = 5)
    {
        return $this->clothe()->with('user')->orderBy( 'updated_at', 'DESC')->paginate($limit_count);
    }
     /**
     * パスワード再設定メールの送信
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPassword($token));
    }
}
