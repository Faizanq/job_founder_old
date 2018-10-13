<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,SoftDeletes,HasApiTokens;


    const VERIFIED_USER = '1';
    const UNVERIFIED_USER = '0';

    const ACTIVE = '1';
    const INACTIVE = '0';

    const USER = 'U';
    const EMPLOYER = 'E';


    const MALE = 'Male';
    const FEMALE = 'Female';
    const TRANSGENDER = 'Transgender';
    const NOT_SPECIFIED = 'Not Specified';

    const ADMIN_USER = 'true';
    const REGULAR_USER = 'false';

    // protected $table = 'users';
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password',
        'verify_email_token','verified','admin',
        'gender','user_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','verify_email_token'
    ];

    public function setFirstNameAttribute($name){
        $this->attributes['first_name'] = strtolower($name);
    }
    public function getFirstNameAttribute($name){
        return ucwords($name);
    }

    public function setLastNameAttribute($name){
        $this->attributes['last_name'] = strtolower($name);
    }
    public function getLastNameAttribute($name){
        return ucwords($name);
    }

    public function setEmailAttribute($email){
        $this->attributes['email'] = strtolower($email);
    }

    public function isVerified(){
        $this->verified == User::VERIFIED_USER;
    }
    public function isAdmin(){
        $this->admin == User::ADMIN_USER;
    }

    public static function generateVerificationCode(){
        return str_random(40);
    }

    public static function generateOtpCode(){
        return str_random(4);
    }

    // public function getPosts(){
    //     return $this->belongsToMany(\App\Post::class);
    // }
}
