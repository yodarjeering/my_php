<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Resources\Views;
// use App\View\Composers\HelloComposer;

class HelloController extends Controller
{   
    
    public function index() {
        // $data = [
        //     'msg'=>'これはBladeを利用したサンプルです.',
        // ];
        // 本だとview('hello.index',$data);となっているが, hello. いらない
        // return view('index',$data);
        // $data = [
        //     ['name'=>'山','mail'=>'exm0@.com'],
        //     ['name'=>'田','mail'=>'exm1@.com'], 
        //     ['name'=>'山田山','mail'=>'exm2@.com'],
        //     ['name'=>'田山田','mail'=>'exm@3.com']
        // ];
        return view('index',['message'=>'Hello']);
    }

    public function post(Request $request){
        $msg = $request->msg;
        // $data = [
        //     'msg'=>'Hello Mr. '. $msg , 
        // ];
        return view('index',['msg'=>$msg]);
    }

}
