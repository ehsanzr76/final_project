<?php


namespace ehsan\Media\Services;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class ImageFileService
{
    protected static $sizes = ['110', '300', '600'];
    public static function Upload($file)
    {
        $filename = uniqid();
        $extension = $file->getClientOriginalExtension();
        $dir = 'app\public\\';
        $file->move(storage_path($dir), $filename . '.' . $extension);
        $path = $dir . '\\' . $filename . '.' . $extension;

        return self::resize(storage_path($path), $dir, $filename, $extension);
    }

    private static function resize($img, $dir, $filename, $extension)
    {
        $img = Image::make($img);
        $imgs['original'] = $filename . '.' . $extension;
        foreach (self::$sizes as $size) {
            $imgs[$size] = $filename . '_' . $size . '.' . $extension;
            $img->resize($size, null, function ($aspect) {
                $aspect->aspectRatio();
            })->save(storage_path($dir) . $filename . '_' . $size . '.' . $extension);
        }
        return $imgs;
    }




    public static function delete($media)
    {

        foreach ($media->files as $file) {
            Storage::delete('public\\' . $file);
        }
    }
}
