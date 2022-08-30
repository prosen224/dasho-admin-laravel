<?php
use Intervention\Image\Facades\Image;
// use File;

if(!function_exists('imageUploadWithResize')){
    function imageUploadWithResize($image, $path, $width, $height){
        if(!File::exists($path)){
            File::makeDirectory($path, 0777, true, true);
        }
        $file = $image;
        $imgFile = Image::make($file->getRealPath());
        $extension = $image->getClientOriginalExtension();
        $filename = time(). '.' .$extension;
        $imgFile->resize($width, $height, function ($constraint) {
            // $constraint->aspectRatio();
        })->save($path.'/'.$filename);
        return $filename;
    }
}
