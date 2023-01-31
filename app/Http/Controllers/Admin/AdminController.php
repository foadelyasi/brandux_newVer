<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function IconUploader($file,$paths){
       $filename="category"."-".$file->getClientOriginalName();
       $path=public_path($paths);
       $files=$file->move($path,$filename);
   }

    public function FoodIMGUploader($file,$paths){
        $filename="food"."-".$file->getClientOriginalName();
        $path=public_path($paths);
        $files=$file->move($path,$filename);
    }

    public function GalleryIMGUploader($file,$paths){
        $filename="G_food"."-".$file->getClientOriginalName();
        $path=public_path($paths);
        $files=$file->move($path,$filename);
    }
}
