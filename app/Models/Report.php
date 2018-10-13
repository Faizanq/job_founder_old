<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;

    protected $fillable =[
    		'reason',
    		'image'
    ];

    protected $hidden = ['deleted_at'];

    protected $dates = ['deleted_at'];

    public function getReasonAttribute($name){
        return ucwords($name);
    }
}
