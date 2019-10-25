<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id','mobile_no', 'job', 'profile', 'address', 'city'];
}
