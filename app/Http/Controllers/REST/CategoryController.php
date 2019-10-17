<?php

namespace App\Http\Controllers\REST;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Cons\ErrorCode;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return $this->rest_success($category);
    }

    public function show(Request $request){
        $name = trim($request->input('name'));
        $exist = Category::existCategory($name);
        if($exist == true){
            return $this->failArr(ErrorCode::SHOW_ERRNUM_CATEGORY_EXIST);
        }else{
            $result = Category::addCategory($name);
            return $this->rest_success($result);
        }
    }

    public function update(Request $request){
        $name = $request->input('name');
        $id = intval($request->input('id'));
        $data = ['id' => $id ,'name' => $name];
        $result = Category::updateCategory($data);

        return $this->rest_success($result);
    }

    public function del(Request $request){
        $ids = $request->input('ids');
        $arr = explode(',', $ids);
        $result = Category::delCategory($arr);

        return $this->rest_success($result);
    }

}
