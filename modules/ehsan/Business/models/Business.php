<?php

namespace ehsan\Business\models;

use ehsan\Category\models\Category;
use ehsan\Comment\models\Comment;
use ehsan\Media\models\Media;
use ehsan\User\models\User;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['title', 'body', 'category_id', 'mobile', 'BusinessNumber', 'address', 'media_id', 'hit'];


    protected $attributes = [
        'hit' => 0
    ];



    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    public function comments()
    {
        return $this->hasMany(Comment::class);
    }



    public function image()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
