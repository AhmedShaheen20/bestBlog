// use  App\Post;           // ÈäÚãá ÇÓÊÎÏÇã ááãæÏá ÚÔÇä äÓÊÎÏãÉ Ýì ÚÑÖ ÇáÈíÇäÇÊ
//use  App\User;           // ÈäÚãá ÇÓÊÎÏÇã ááãæÏá ÚÔÇä äÓÊÎÏãÉ Ýì ÚÑÖ ÇáÈíÇäÇÊ
 // url :http://best.com/read ÚÑÖ ÈíÇäÇÊ ßá ÇáÈæÓÊÇÊ ÇáãæÌæÏ Ýì ÇáÏÇÊÇ ÈíÒ

//  Route::get('/read', function () {
//         $post = Post::all();
//             return $post;
// });

 // url :http://best.com/read ÚÑÖ ÈíÇäÇÊ ÈæÓÊ æÇÍÏ Ýì ÇáÏÇÊÇ ÈíÒ

//  Route::get('/read', function () {
//             $post = Post::find(1);
//                 return $post;
//     });

// // url :http://best.com/read ÚÑÖ ÚäæÇä ÈæÓÊ æÇÍÏ Ýì ÇáÏÇÊÇ ÈíÒ

// Route::get('/read', function () {
//     $post = Post::find(1);
//         return $post->title;
// });

// // url :http://best.com/read ÚÑÖ ÚäæÇä ÈæÓÊ æÇÍÏ Ýì ÇáÏÇÊÇ ÈíÒ

// Route::get('/read', function () {
//     $post = Post::findOrFail(1);
//         return $post->title;
// });

// // url :http://best.com/read ÚÑÖ ÚäæÇä ÈæÓÊ æÇÍÏ Ýì ÇáÏÇÊÇ ÈíÒ

// Route::get('/read', function () {
//     $post = Post::where('id', 1)->take(1)->get();
//         foreach ($post as $p)
//         {
//             var_dump($p->title);
//         }
// });

// url :http://best.com/read ÚÑÖ  ÈæÓÊ æÇÍÏ Ýì ÇáÏÇÊÇ ÈíÒ ãÚ ÇáÊÑÊíÈ ÇáÊäÇÒáì

// Route::get('/find', function () {
//     $post = Post::orderBy('id','desc')->take(1)->get();
//             return $post;
// });

// url :http://best.com/insert ÇÖÇÝÉ ÈæÓÊ ÌÏíÏ

// Route::get('/insert', function () {
//     $post = new App\Post;
//     $post->title = "frist new post";
//     $post->body  = 'frist new budy by tinker';
//     $post->save();

// });

// url :http://best.com/insert  ØÑíÞÉ ÊÇäíÉ áÇÇÖÇÝÉ ÈæÓÊ ÌÏíÏ ,æÈäÚÑÝ  Ý ÇáãæÏá ÇáÇÚãÏÉ

// Route::get('/insert', function () {
//     Post::create(['title'=>'ãÞÇá ÌÏíÏ ÈØÑíÞÉ ÑÞã 2','body'=>'ãÍÊæì ÇáãÞÇá ÇáÌÏíÏ 2']);

// });

// url :http://best.com/insert  ØÑíÞÉ ÊÇäíÉ áÇÇÖÇÝÉ ÈæÓÊ ÌÏíÏÉ ÈÏæä ÇÖÇÝÉ ÚãæÏ ãÚíä

// Route::get('/insert', function () {
//     Post::create(['title'=>'ãÞÇá ÌÏíÏ ÈØÑíÞÉ ÑÞã 2']);

// });


// // url :http://best.com/update  ØÑíÞÉ ÊÇäíÉ áÇÇÖÇÝÉ ÈæÓÊ ÌÏíÏÉ ÈÏæä ÇÖÇÝÉ ÚãæÏ ãÚíä

// Route::get('/update', function () {
//  Post::where('id',3)->update(['title'=>'ãÞÇá ÌÏíÏ ÈØÑíÞÉ ÑÞã 3' ,'body'=>'ãÞÇá ãÞÇá ãÞÇá ÌÏíÏ ÈØÑíÞÉ ÑÞã 3']);

// });

// // url :http://best.com/delete  ØÑíÞÉ áÍÐÝ ÈæÓÊ
// Route::get('/delete', function () {
//  Post::destroy('id',3);

// });

// url :http://best.com/delete  ØÑíÞÉ áÍÐÝ ÇßÊÑ ãä ÈæÓÊ
// Route::get('/delete', function () {
//     Post::destroy([2,3]);

//    });

   // url :http://best.com/delete    ØÑíÞÉ áÍÐÝ ÈæÓÊ ÈÔÑØ
// Route::get('/delete', function () {
//     Post::where(['title'=>'ãÞÇá ÌÏíÏ ÈØÑíÞÉ ÑÞã 2'])->delete();

//    });

  // url :http://best.com//post/1/user ØÑíÞÉ ÚÑÖ ÇáÈæÓÊÇÊ Çááì ÇáíæÒÑ ÚãáåÇ ($ÚáÇÞÉ one to one)

//Route::get('/post/{id}/user',function ($id){
//   return User::find($id)->post_user;
//});

 // url :http://best.com//user/1/post ØÑíÞÉ ÚÑÖ ÈíÇäÇÊ ÇáíæÒÑ Çááì ÚáÞ Úáì ÇáÈæÓÊ  ($ ÚßÓ ÚáÇÞÉ one to one)

// Route::get('/user/{id}/post',function ($id){
//    return Post::find($id)->user->name;
// });

// url :http://best.com//user/1/post ØÑíÞÉ ÚÑÖ ÈíÇäÇÊ ÇáíæÒÑ Çááì ÚáÞ Úáì ÇáÈæÓÊ  ($ ÚßÓ ÚáÇÞÉ one to one)

// Route::get('/user/{id}/post',function ($id){
//    return Post::find($id)->user->name;
// });

// use App\User;

// Route::get('/post/{id}/user',function ($id){

//       $user = User::find($id)->post;
//         foreach ($user as $post){
//             echo $post->body . "<br>";
//             echo $post->title . "<br>";
//         }

//     //  return $user;
// });










// // url :http://best.com/tesst
// // route view
// Route::view('/tesst', 'route', ['myname' => 'Ahmed']);

// //url :http://best.com/user/15/Ahmed
// // route controller
// // hayoro7 3al elcontroller el esmo first controller wynady 3al el function ely esmha index

// Route::get('/user/{id}/{username?}', 'UserController@index');

// // // route parmeter required
// //url :http://best.com/test2/5

// Route::get('/test2/{id}', function ($id) {
//     return $id;
// });

// //  route name required
// //  url :http://best.com/show-number/55

Route::get('/show-number/{id}', function ($id) {
    return $id;
})->name('a');

// //  route name optional
// //  url :http://best.com/show-string

Route::get('/show-string/{id?}', function () {
    return 'welcome';
})->name('b');

//rote nameSpace

route::namespace('Admin')->group(function(){

    Route::get('/users','UserController@showAdmin');

});

//rote prsfix áæ ÚÇæÒ ÇÚÏá Ýì ÑæÊ ãÚíä ØÇáãÇ ãßÊæÈ ÊÍÊ ÑæÊ ÈÑÝßÓ  ÈÚÏá Ý ÇáÑæÊ ÇáÇÓÇÓì Çááì Ý ÇáÈÑíÝßÓ ÈÏá ãÚÇÏá Ýíåã ßáåã

// route::prefix('user')->group(function(){

//     Route::get('/account','TsetController@test');
//     Route::get('/email','TsetController@test');
//     Route::get('/adress','TsetController@test');


// });

// Çá group ÈÔßá ÊÇäì  ÈØÑíÞÉ ÇáãíÏá æíÑ Úä

// Route::group(['prifix' => 'userss','middleware'=>'auth'],function () {
// Route::get('/', function () {
//     return 'work';
// });
//         Route::get('/ss','Admin\UserController@test');
//         Route::get('/sd','Admin\UserController@test');
//         Route::get('/se','Admin\UserController@test');
// });
// Çá middleware->('miidlewaretype')ÇáãíÏá æíÑ Úä ØÑíÞ ÊÚÑíÝ ÇáãíÏá æíÑ ßÇÓã æÈÏíáÉ äæÚÉ

// route middleware (guest,auth) ÇáÊÍßã Ýì ÚÑÖ ÇáÕÝÍÉ áæ íæÒÑ ãÓÌá Çæ Çæ íæÒÑ ãÔ ãÓÌá

Route::get('check', function () {
    return "middlewere";
})->middleware('auth');


// ÇáãíÏá æíÑ Úä ØÑíÞ ÇáßäÊÑæáÇÑ

Route::group(['namespace'=>'Admin'], function() {
    Route::get('/scoend1','UserController@showString1');
    Route::get('/scoend2','UserController@showString2');
    Route::get('/scoend3','UserController@showString3');
    Route::get('/scoend4','UserController@showString4');

});
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');
// // // Route Post
// // url : http://best.com/test8

// Route::get('test8', function () {
//     return '
//              <form method="POST">
//              <input type="hidden" name="_token" value="' .
//                     csrf_token() .
//                     '">
//              <input type ="text" name ="foo">
//                 <input type ="submit" value="save"/>
//                 // <input type="hidden" name="_method" value="PUT">
//                 <input type="hidden" name="_method" value="DELETE">

//             </form>
//     ';
// });

// Route::post('test8', function () {
//     return 'welcome in route post ' . Request('foo');
// });


// // url : http://best.com/test8

// Route::put('test8', function () {
//     return 'welcome in route PUT =  ' . Request('foo');
// });

// // url : http://best.com/test8
// Route::delete('test8', function () {
//     return 'welcome in route DELETE =  ' . Request('foo');
// });

// Route::get('/xx', 'SecondController@index');
// // Route::post('user/email','UserController@getEmail');

// // Route prifx
// // Route::prefix('acount')->group(function(){
// //     Route::post('email','UserController@getEmail');
// //     Route::post('name','UserController@getEmail');
// //     Route::post('pass','UserController@getEmail');
// //     Route::post('dash','UserController@getEmail');
// //     Route::post('mash','UserController@getEmail');


// // });
// Route::namespace('Admin')->group(function(){

// Route::prefix('acount')->group(function(){
//     Route::any('email','UserController@getEmail');

// });


// });

// route controller


// Route::post('email','UserController@getEmail');

