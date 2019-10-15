<?php

namespace App\Http\Controllers\REST;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;

class UserController extends Controller
{
    
    public function getUserList(){
        $user = User::getUserList();

       return  $this->success($user);
    }

    public function getUserInfo($uid){
        $user = User::getUserInfo($uid);

       return  $this->success($user);
    }

}
