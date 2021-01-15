<?php

namespace ehsan\Business\models;

use ehsan\Category\models\Category;
use ehsan\Media\models\Media;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['title', 'body', 'category_id' , 'mobile' , 'BusinessNumber' , 'address' , 'media_id'];





    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
    



    public function image()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

}
