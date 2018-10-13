<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
    use SoftDeletes;

    protected $fillable =[
    		'language_code',
    		'language_name',
    ];

    protected $dates = ['deleted_at'];

    public function getLanguageNameAttribute($name){
        return ucwords($name);
    }
}
