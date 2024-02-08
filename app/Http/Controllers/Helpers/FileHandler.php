<?php

namespace App\Http\Controllers\Helpers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class FileHandler
{
    public static function uploadImage($image, $path, $size = null, $prefix = null): string
    {
        $prefix = $prefix ?? time();

        $image_name = $prefix . '-' . $size['width'] . 'x' . $size['height'] . '-' . $image->getClientOriginalName();

        $image_path = "uploads/$path/$image_name";

        $resized_image = Image::make($image)->resize($size['width'], $size['height'])->stream();

        Storage::put($image_path, $resized_image);

        return $image_path;
    }

    public static function uploadFile($file, $path, $prefix = null): string
    {
        $prefix = $prefix ?? time();

        $file_name = $prefix . '-' . $file->getClientOriginalName();

        $file_path = "$path/$file_name";

        Storage::putFileAs($path, $file, $file_name);

        return $file_path;
    }

    public static function delete($path): void
    {
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }
}
