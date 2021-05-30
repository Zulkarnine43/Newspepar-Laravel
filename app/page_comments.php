<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page_comments extends Model
{
    //
    protected $fillable=['page_id','name','email','mobile','comment'];
}
