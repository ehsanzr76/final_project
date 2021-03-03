<?php

namespace ehsan\ContactUs\models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = ['name' , 'email' , 'body'];
    //
}
