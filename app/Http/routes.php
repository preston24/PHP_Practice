<?php

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

// Route::get('/insert', function() {
//   DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
// });


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

Route::get('/delete', function() {
  $deleted = DB::delete('delete from posts where id = ?', [1]);

  return $deleted;
});