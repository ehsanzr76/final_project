<?php

namespace ehsan\Comment\models;

use ehsan\Business\models\Business;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name' , 'email' , 'body'];


    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
