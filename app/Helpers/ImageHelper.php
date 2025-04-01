<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Image;

class ImageHelper
{
    public static function handleUploadedImage($file,$path,$delete=null) {
        if ($file) {
            if($delete){
                
                if (file_exists(base_path('../').$path.'/'.$delete)) {
                    unlink(base_path('../').$path.'/'.$delete);
                }
            }
            $name = Str::random(4).$file->getClientOriginalName();
            $file->move($path,$name);
            return $name;
        }
    }


    public static function uploadSummernoteImage($file,$path) {
        
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        if ($file) {
            $name = Str::random(4).$file->getClientOriginalName();
            $file->move($path,$name);
            return $name;
        }
    }



    public static function ItemhandleUploadedImage($file, $path, $delete = null) {
        if ($file) {
            if ($delete) {
                if (file_exists(public_path($path . '/' . $delete))) {
                    unlink(public_path($path . '/' . $delete));
                }
            }

            $thum = Str::random(8) . '.' . $file->getClientOriginalExtension();
            $image = \Image::make($file)->resize(230, 230);
            $image->save(public_path($path . '/' . $thum));

            $photo = time() . $file->getClientOriginalName();
            $file->move(public_path($path), $photo);
            return [$photo, $thum];
        }
    }


    public static function handleUpdatedUploadedImage($file, $path, $data, $delete_path, $field) {
        // Generate a unique name for the file
        $name = time() . $file->getClientOriginalName();

        // Move the new file to the public path
        $file->move(public_path($path), $name);

        // Check if there is an old file to delete
        if (!empty($data[$field])) {
            // Ensure the delete path has a trailing slash
            $deleteDirectory = rtrim($delete_path, '/') . '/';

            if (file_exists(public_path($deleteDirectory . $data[$field]))) {
                unlink(public_path($deleteDirectory . $data[$field]));
            }
        }

        return $name;
    }



    public static function ItemhandleUpdatedUploadedImage($file, $path, $data, $delete_path, $field) {
        // Generate file names
        $photo = time() . $file->getClientOriginalName();
        $thum = Str::random(8) . '.' . $file->getClientOriginalExtension();

        // Resize and save the thumbnail using the public_path
        $image = \Image::make($file)->resize(230, 230);
        $image->save(public_path($path . '/' . $thum));

        // Move the original file using the public_path
        $file->move(public_path($path), $photo);

        // Remove old thumbnail if it exists and the filename is not null
        if (!empty($data['thumbnail']) && file_exists(public_path($delete_path . $data['thumbnail']))) {
            unlink(public_path($delete_path . $data['thumbnail']));
        }

        // Remove old image file for the given field if it exists and is not null
        if (!empty($data[$field]) && file_exists(public_path($delete_path . $data[$field]))) {
            unlink(public_path($delete_path . $data[$field]));
        }

        return [$photo, $thum];
    }



    public static function handleDeletedImage($data,$field,$delete_path) {
        
        
        if($data[$field] != null){
            if (file_exists(base_path('../').$delete_path.$data[$field])) {
                unlink(base_path('../').$delete_path.$data[$field]);
            }
        }
    }
}
