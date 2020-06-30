<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index','show']);
    // }

    // index page
     public function  index()
     {

        $comment = (Comment::all());
         return view('comments.index',compact("comments" ,'count')); // هنبعت البوستات اللى جاية من الداتا بيز للفيو
     }



     //show page

     public function show($id){
        $post = Post::find($id);
        return view('comments.show',compact('post'));

     }

       //create post

       public function create(){

        return view('comments.create');

       }

        //edit post

               public function edit($id){
                $post = Post::find($id);
                if (auth()->user()->id !== $post->user_id) {

                    return redirect('/comments')->with('error','You Are Not Authorized !');
               }
                return view('comments.edit', compact('post'));
               }

        // //update post

                public function update(Request $request, $id){
                                $request->validate([
                                    'title' =>  'required|max:200',
                                    'body' => 'required|max:500',
                                    'coverImage' => 'image|mimes:jpeg,jpg,png,jpg,PNG|max:1999'
                                ]);
                                $post =Post::find($id) ;
                                $post->title =  $request->title ;
                                $post->body =  $request->body ;
                                $post->user_id = auth()->user()->id;
                          // file upload
                          if ($request->hasFile('coverImage')) {

                                            $file = $request->file('coverImage');
                                            //$ext = $file->getClientOriginalExtension() ;
                                            $ext = $request->file('coverImage')->extension();
                                            $filename = 'cover_image' . '_' . time() . '.' . $ext ;
                                            $file->storeAs('public/coverImages', $filename);
                                            $post->image =  $filename;

                            } else {

                                $filename = 'noimage.png';
                            }

                            $post->save();

                            return redirect('/comments')->with('status','post was updated !');
                }


        //store post تخزين البوست
        public function store(Request $request) {


            $request->validate([

                'title' =>  'required|max:200',
                'body' => 'required|max:500',
                'coverImage' => 'image|mimes:jpeg,jpg,png|max:1999'

            ]);



            $post = new Post() ;
            $post->title =  $request->title ;
            $post->body =  $request->body ;
            $post->image =  $filename;
            $post->user_id = auth()->user()->id;


            $post->save();

            return redirect('/comments')->with('status', 'Post was created !');

        }

     public function destroy($id) {

        $post = POST::find($id) ;
        $post->delete();
        return redirect('/comments')->with('status', 'Post was deleted !');

    }

}
