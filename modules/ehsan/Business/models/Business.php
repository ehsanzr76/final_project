<?php

namespace ehsan\Business\models;

use ehsan\Category\models\Category;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['title', 'body', 'category_id' , 'mobile' , 'BusinessNumber' , 'address'];





    public function category()
    {
        return $this->hasOne(Category::class);
    }

}
