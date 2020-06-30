<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        // pass data from controller number way 1 (array)
            $title = 'hello in index';
            return view('pages.index',['title' => $title]);

    }
    public function about(){
        // pass data from controller number way 2
            // $title = 'hello in about';
            // return view('pages.about',compact('title'));

         // pass data from controller number way 3
            $title = 'hello in about';
            return view('pages.about')->with('title',$title);

   }
   public function servises(){
        // pass data from controller number way 4
        $data = [
                    'title'  => 'hello in servises',
                    'servises' => ['programming' , 'design' , 'network' ]
            ];

    return view('pages.servises')->with($data);

}


}
