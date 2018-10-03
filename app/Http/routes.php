<?php

use App\Post;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "Hi about page";
// });

// Route::get('/contact', function () {
//     return "Hi I am contact";
// });

// Route::get('/post/{id}/{name}', function($id, $name) {
//     return "This is post number ". $id . " " . $name;
// });

// Route::get('/admin/posts/example', ['as' => 'admin.home', function(){
//     $url = route('admin.home');

//     return "this url is ". $url;
// }]);



// Route::get('/post/{id}', 'PostController@index');

// Route::resource('posts', 'PostController');


// Route::get('/contact', 'PostController@contact');


// Route::get('post/{id}/{name}/{password}', 'PostController@show_post');



/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
*/

Route::get('/insert', function() {
  DB::insert('insert into posts(title, content) values(?, ?)', ['Laravel is awesome!', 'Laravel is the best thing that has happened to PHP, PERIOD']);
});


// Route::get('/read', function() {
//   $results = DB::select('select * from posts where id = ?', [1]);

//     return $results;

//   // foreach ($results as $post) {
//   //   return $post->title;
//   // }

// });

// Route::get('/update', function() {
//   $updated = DB::update('update posts set title = "Update title" where id =?', [1]);

//   return $updated;
// });

// Route::get('/delete', function() {
//   $deleted = DB::delete('delete from posts where id = ?', [1]);

//   return $deleted;
// });

//


/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

// Route::get('/read', function(){
//   $posts = Post::all();

//     foreach($posts as $post) {
//       return $post->title;
//     }
// });




// Route::get('/find', function(){
//   $post = Post::find(1);
//     return $post->title;
// });




// Route::get('/findwhere', function() {
//   $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

//     return $posts;
// });




// Route::get('/findmore', function() {
//   // $posts = Post::findOrFail(3);

//   //   return $posts;


//   $posts = Post::where('users_count', '<', 50)->firstOrFail();

// });



Route::get('/basicinsert', function() {
  $post = new Post;

  $post->title = 'New Eloquent title insert';
  $post->content = 'Wow eloquent is really cool, look at this content';

  $post->save();
});




// Route::get('/basicinsert2', function() {
//   $post = Post::find(1);

//   $post->title = 'New Eloquent title insert 1';
//   $post->content = 'Wow Eloquent is really cool, look at this content 1';

//   $post->save();
// });




// Route::get('/create', function() {
//   Post::create(['title'=>'the create method', 'content'=>'WOW I\'m learning a lot with Edwin Diaz 123']);
// });




// Route::get('/update', function() {
//   Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'New PHP title', 'content'=>'I love my pizza!!!']);
// });




// Route::get('/delete', function() {
//   $post = Post::find(7);

//   $post->delete();
// });




// Route::get('/delete2', function() {
//   Post::destroy([3,4]);

//   // Post::where('is_admin', 0)->delete();
// });




// Route::get('/softdelete', function() {
//    Post::find(5)->delete();
// });




// Route::get('/readsoftdelete', function() {
//   // $post = Post::find(5);

//   // return $post;

//   // $post = Post::withTrashed()->where('id', 5)->get();

//   // return $post;

//   $post = Post::onlyTrashed()->where('is_admin', 0)->get();

//   return $post;
// });





// Route::get('/restore', function() {
//   Post::withTrashed()->where('is_admin', 0)->restore();
// });



Route::get('/forcedelete', function() {
  Post::onlyTrashed()->where('is_admin', 0)->forcedelete();
});