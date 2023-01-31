<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageCKeditorController extends Controller
{
    public function upload(){
        $IMGname=date('YmdHi').'_'.'articles'.$this->CKphoto->extension();
        $this->CKphoto->storeAs('upload/articles',$IMGname,'public');
    }
}
