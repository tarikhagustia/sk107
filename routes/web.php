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

Route::group(['middleware' => ['auth','admin']], function(){


  Route::get('/', function (){
      return view('admin.index');
  });

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
  Route::post('admin/profile/change-password', 'Admin\Auth\ChangePasswordController@change_password_post')->name('profile.password.change');

  /*
  |--------------------------------------------------------------------------
  | Account Router Guest
  |--------------------------------------------------------------------------
  */
  Route::get('admin/account/demo-account', 'Admin\Account\OpenDemoAccountController@index')->name('account.demo');
  Route::post('admin/account/demo-account', 'Admin\Account\OpenDemoAccountController@create_account')->name('create_account_demo')->name('account.demo.post');;

  Route::get('admin/account/real-account', 'AccountController@index')->name('account.real');

  /*
  |--------------------------------------------------------------------------
  | User Management
  |--------------------------------------------------------------------------
  */

  Route::get('admin/user', 'Admin\User\UserController@index')->name('admin.user');

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
