<?php


namespace ehsan\Media\Services;

use ehsan\Media\models\Media;

class MediaService
{
    public static function Upload($file)
    {

        $extension = strtolower($file->getClientOriginalExtension());


        switch ($extension) {
            case 'jpeg':
            case 'jpg':
            case 'png':
                $media = new Media();
                $media->files =  ImageFileService::Upload($file);
                $media->user_id = auth()->id();
                $media->type = 'image';
                $media->filename = $file->getClientOriginalName();
                $media->save();
                return $media;
                break;

            case 'avi':
            case 'mp4':

                VideoFileService::Upload($file);
                break;
        };
    }
}
