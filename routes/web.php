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

  Route::get('admin/account/demo-account', 'Admin\Account\OpenDemoAccountController@index');
  Route::get('admin/account/create-demo', 'Admin\Account\OpenDemoAccountController@create_account')->name('create.account.demo');
  Route::get('admin/account/create-demo-manual', 'Admin\Account\OpenDemoAccountController@create_account_manual')->name('create.account.demo.manual');


  /*
  |--------------------------------------------------------------------------
  | User Management
  |--------------------------------------------------------------------------
  */

  Route::get('admin/user', 'Admin\User\UserController@index')->name('admin.user');

  Route::get('admin/account/real-account', 'AccountController@index')->name('create.account.real');


  Route::get('admin/account/real-account/form/107-PBK-01', 'Admin\Account\FormController@bpk_01')->name('form.sk107.bpk.01');
  Route::post('admin/account/real-account/form/107-PBK-01-check', 'Admin\Account\FormController@bpk_01_check')->name('form.sk107.bpk.01.check');
  Route::get('admin/account/real-account/form/107-PBK-03', 'Admin\Account\FormController@bpk_03')->name('form.sk107.bpk.03');
  Route::post('admin/account/real-account/form/107-PBK-03-check', 'Admin\Account\FormController@bpk_03_check')->name('form.sk107.bpk.03.check');

  Route::get('admin/account/real-account/form/107-PBK-02-1', 'Admin\Account\FormController@bpk_02_1')->name('form.sk107.bpk.02.1');
  Route::post('admin/account/real-account/form/107-PBK-02-1-check', 'Admin\Account\FormController@bpk_02_1_check')->name('form.sk107.bpk.02.1.check');
  Route::get('admin/account/real-account/form/107-PBK-02-2', 'Admin\Account\FormController@bpk_02_2')->name('form.sk107.bpk.02.2');
  Route::post('admin/account/real-account/form/107-PBK-02-2-check', 'Admin\Account\FormController@bpk_02_2_check')->name('form.sk107.bpk.02.2.check');

  Route::group(['prefix' => 'services'], function(){

    Route::get('open-account/task', 'Admin\Api\OpenAccountController@get_user_tasks');

  });
  Route::get('admin/account/real-account/form/107-PBK-04-2', 'Admin\Account\FormController@bpk_04_2')->name('form.sk107.bpk.04.2');
  Route::post('admin/account/real-account/form/107-PBK-04-2-check', 'Admin\Account\FormController@bpk_04_2_check')->name('form.sk107.bpk.04.2.check');
  Route::get('admin/account/real-account/form/107-PBK-05-2', 'Admin\Account\FormController@bpk_05_2')->name('form.sk107.bpk.05.2');
  Route::post('admin/account/real-account/form/107-PBK-05-2-check', 'Admin\Account\FormController@bpk_05_2_check')->name('form.sk107.bpk.05.2.check');
  Route::get('admin/account/real-account/form/107-PBK-06', 'Admin\Account\FormController@bpk_06')->name('form.sk107.bpk.06');
  Route::post('admin/account/real-account/form/107-PBK-06-check', 'Admin\Account\FormController@bpk_06_check')->name('form.sk107.bpk.06.check');
  Route::get('admin/account/real-account/form/107-PBK-07', 'Admin\Account\FormController@bpk_07')->name('form.sk107.bpk.07');
  Route::post('admin/account/real-account/form/107-PBK-07-check', 'Admin\Account\FormController@bpk_07_check')->name('form.sk107.bpk.07.check');

});

/*
|--------------------------------------------------------------------------
| Withdrawal & Deposit Router Guest
|--------------------------------------------------------------------------
*/
Route::get('admin/withdrawal', 'Admin\Withdrawal\WithdrawalController@index')->name('withdrawal');
Route::get('admin/deposit', 'Admin\Deposit\DepositController@index')->name('deposit');
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
Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
