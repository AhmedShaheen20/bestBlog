<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    // index page // show all posts
     public function  index()
     {
       //  $posts = (Post::all());  // كدا جبنا كل البوستات من الداتا بيز وبيبعتهم للفيو
        // $posts = Post::take(6)->get() ;
         // $posts = DB::select('select * from posts'); عرض كل البيانات عن طريق query gtv
        $posts = Post::orderBy('id','desc')->paginate(6); //برتب البيانات وبعملها pagination بيحيث يضيف 5 عناصر فى كل صفحة بس لازم اضيف الكود بتاع التصميم فى صفحة الفيو



         $count = (Post::count());
         return view('posts.index',compact("posts" ,'count')); // هنبعت البوستات اللى جاية من الداتا بيز للفيو
     }



     //show page show one posts

     public function show($id){
        $post = Post::find($id);
        return view('posts.show',compact('post'));

     }
        // انشاء اليوزر من خلال اتنين فانكشن فانكشن بتظهر الانبوت والفانكشن التانية بتحقق من البيانات وبتخزن البيانات فالدتابيز
       //create post // show create input

       public function create(){

        return view('posts.create');

       }

        //edit post

               public function edit($id){
                $post = Post::find($id);
                if (auth()->user()->id !== $post->user_id) {

                    return redirect('/posts')->with('error','You Are Not Authorized !');
               }
                return view('posts.edit', compact('post'));
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

                            return redirect('/posts')->with('status','post was updated !');
                }


        //store post تخزين البوست
        public function store(Request $request) {


            $request->validate([

                'title' =>  'required|max:200',
                'body' => 'required|max:500',
                'coverImage' => 'image|mimes:jpeg,jpg,png|max:1999'

            ]);

                  // file upload
                  if ($request->hasFile('coverImage')) {
                        $file = $request->file('coverImage');
                        //$ext = $file->getClientOriginalExtension() ;
                        $ext = $request->file('coverImage')->extension();

                        $filename = 'cover_image' . '_' . time() . '.' . $ext ;
                        $file->storeAs('public/coverImages', $filename);

                    } else {

                        $filename = 'noimage.png';
                    }

            $post = new Post() ;
            $post->title =  $request->title ;
            $post->body =  $request->body ;
            $post->image =  $filename;
            $post->user_id = auth()->user()->id;


            $post->save();

            return redirect('/posts')->with('status', 'Post was created !');

        }

     public function destroy($id) {

        $post = POST::find($id) ;
        $post->delete();
        return redirect('/posts')->with('status', 'Post was deleted !');

    }

}
