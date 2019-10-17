<?php

namespace App\Http\Controllers\REST;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Gallery;

class GalleryController extends Controller
{
    public function getList(Request $request){
        $galleryList = Gallery::all();
        
        return $this->rest_success($galleryList);
    }

    public function getOne(Request $request){
        $id = intval($request->input('gallery_id'));
        $gallery = Gallery::getOne($id);

        return $this->rest_success($gallery);
    }
}
