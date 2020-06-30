<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller

{
    public function __construct(){
        $this -> middleware('auth')->except('showString2');
    }
    public function test(){

        return 'static test';
     }

    public function showString1(){

       return 'static string1';
    }
    public function showString2(){

       return 'static string2';
    }
    public function showString3(){

       return 'static string3';
    }
//     public function index($id,$username = null){
//          return view('routee',compact('id','username'));
//         // $data['id'] = $id;
//         //   return view('routett',$data);
//        // return view('routett' )->with('id', $id);

//     }

//     public function getEmail(Request $request){

//        dd($request->email);

//    }

//    public function showAdmin(){

//     return 'ahmed';

// }





}
