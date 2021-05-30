<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_register extends Model
{
    //
    protected $fillable=['username','mobile','email','gender','password','confirm_password'];

}
