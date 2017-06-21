<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web route your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('admin.index');
});

Route::group(['middleware' => ['auth','admin']], function(){

  Route::get('/admin', function () {
      return view('admin.index');
  });

  /*
  |--------------------------------------------------------------------------
  | Article Router Admin
  |--------------------------------------------------------------------------
  */
  Route::get('admin/article/create', 'Admin\Article\PostController@create');
  Route::post('admin/article/create', 'Admin\Article\PostController@post_create')->name('post_create');
  Route::get('admin/article/list', 'Admin\Article\PostController@post_list')->name('post_list');
  Route::get('admin/article/delete/{id}', 'Admin\Article\PostController@post_delete')->name('post_delete');
  Route::get('admin/article/edit/{id}', 'Admin\Article\PostController@edit_post')->name('post_edit');
  Route::post('admin/article/edit/{id}', 'Admin\Article\PostController@post_edit_post')->name('post_edit_post');


  /*
  |--------------------------------------------------------------------------
  | Gallery Router Admin
  |--------------------------------------------------------------------------
  */
  Route::get('admin/gallery/top-photo', 'Admin\Gallery\GalleryController@manage_gallery');


  /*
  |--------------------------------------------------------------------------
  | Profil Router Guest
  |--------------------------------------------------------------------------
  */
  Route::get('admin/profile', 'Admin\Profile\ProfileController@index');
});

/*
|--------------------------------------------------------------------------
| SK107
|--------------------------------------------------------------------------
*/


Route::get('/logout', function(){
  Auth::logout();
  return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Article Router Guest
|--------------------------------------------------------------------------
*/
Route::get('article/{slug}', 'Website\ArticleController@post_detail');
