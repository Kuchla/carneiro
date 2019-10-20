<?php

namespace App\Helpers;

use Image;

class ImageConfig
{
    public static function Resize($image)
    {
        $imagePath = public_path('storage/' . $image);
        $imageResize = Image::make($imagePath)->resizeCanvas(800, 420, 'center', false, '808080', function ($constraint) {
            $constraint->aspectRatio();
        });

        $imageResize->save($imagePath);
    }

    public static function ResizeCollaborator($image)
    {
        $imagePath = public_path('storage/' . $image);
        $imageResize = Image::make($imagePath)->resize(
            400,
            400
        );
        $imageResize->save($imagePath);
    }

    public static function ResizeLinks($image)
    {
        $imagePath = public_path('storage/' . $image);
        $imageResize = Image::make($imagePath)->resize(
            100,
            100
        );
        $imageResize->save($imagePath);
    }
}
