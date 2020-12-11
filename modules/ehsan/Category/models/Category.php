<?php

namespace ehsan\Category\models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['title', 'slug', 'parent_id'];


    public function getparentAttribute()
    {
        return (is_null($this->parent_id)) ? 'ندارد' : $this->parentCategory->title;
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class , 'parent_id');
    }


    public function SubCategories()
    {
        return $this->hasMany(Category::class , 'parent_id');
    }

}
