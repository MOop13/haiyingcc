<?php

namespace App\Http\Controllers\REST;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Video;

class VideoController extends Controller
{
    public function getVideo(){
        $video = Video::all();

        return $this->rest_success($video);
    }

    public function addVideo(Request $request){
        $name = $resuest->input('name');
        $desc = $request->input('desc');
        $url = $request->input('url');
        $data = ['name' => $name, 'desc' => $desc, 'url'=>$url];
        $result = Video::addVideo($data);

        return $this->rest_success($result);
    }

    public function modifyVideo(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $url = $request->input('url');
        $desc = $request->input('desc');
        $data = [
            'id' => $id,
            'name' => $name,
            'desc' => $desc,
            'url' => $url,            
        ];
        $result = Video::updateVideo($data);
    
        return $this->rest_success($result);
    }

    public function deleteVideo(Reuest $request){
        $ids = trim($request->input('ids'));
        $arr = explode(',', $ids);
        $result = Video::delVideo($arr);

        return $this->rest_success($result);
    }
}
