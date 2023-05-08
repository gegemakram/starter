<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{

    public function showUserName(){
        return 'engy makram' ;
    }
    public function getIndex(){

//        $obj = new \stdClass();
//        $obj-> name ='engy';
//        $obj-> id =5;
//        $obj-> age =22;

        $data=[];

        return view('welcome',compact('data'));

    }
}
