<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mit_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'first_name', 'last_name', 'email', 'password', 'token', 'matricNo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRole(){
        return $this->role;
    }

    public function hasRole($role){
        if (is_array($role)) {
            return in_array($this->attributes['role'], $role);
        }
        return $this->attributes['role'] == $role;
    }

    public function profile(){
        return $this->hasOne('App\UserProfile', 'user_id', 'user_id');
    }

    public function getAvatarUrl(){
        if($this->profile->imgPath){
            return $this->profile->imgPath;
        }
        return  "http://www.gravatar.com/avatar/" . md5(strtolower(trim($this->email))) . "?d=mm";
    }
}
