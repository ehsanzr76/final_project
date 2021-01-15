<?php

namespace ehsan\Media\models;

use ehsan\Business\models\Business;
use ehsan\Media\Services\MediaService;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $casts = [
        'files' => 'json'
    ];



    protected static function booted()
    {
        static::deleting(function ($media) {
            MediaService::delete($media);
        });
    }


    public function getThumbAttribute()
    {
        return '/storage/' . $this->files[110];
    }

 
}
