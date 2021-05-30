<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogs_add extends Model
{
    //
    protected $fillable=['blog_name','blog_type','blog_description','long_description','blog_image'];
}
