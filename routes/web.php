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

  Route::get('api2/notifications', 'Admin\Api\NotificationsApiController@get_notifications');
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

  Route::get('admin/account/demo-account', 'Admin\Account\OpenDemoAccountController@index')->name('demo.account');
  Route::post('admin/account/pengalaman', 'AccountController@pengalaman_check');
  Route::get('admin/account/create-demo', 'Admin\Account\OpenDemoAccountController@create_account')->name('create.account.demo');
  Route::get('admin/account/manage-demo-account', 'Admin\Account\AdminController@index');
  Route::post('admin/account/manage-demo-account', 'Admin\Account\AdminController@update');
  Route::get('admin/account/approve-demo-account', 'Admin\Account\AdminController@approve_demo');
  Route::post('admin/account/approve-demo-account', 'Admin\Account\AdminController@approve_demo_post');
  Route::get('admin/account/create-demo-manual', 'Admin\Account\OpenDemoAccountController@create_account_manual')->name('create.account.demo.manual');
  Route::post('admin/account/create-demo-manual', 'Admin\Account\OpenDemoAccountController@create_account_manual')->name('create.account.demo.manual');
  Route::get('admin/account/real-account-user', 'Admin\Account\RealAccountController@index')->name('real.account.user');
  Route::post('admin/account/real-account-user', 'Admin\Account\RealAccountController@agreement_post');
  Route::get('admin/account/real-account', 'AccountController@index')->middleware('demo')->name('create.account.real');
  Route::post('admin/account/real-account', 'AccountController@post_request_account_real')->name('create.account.real.post');
  Route::get('admin/account/real-account/finish', 'AccountController@request_finish')->name('create.account.real.finish');
  Route::post('admin/account/real-account/update-rejected-request', 'AccountController@update_rejected_request_do')->name('update.rejected.request.do');
  Route::get('admin/account/manage-real-account', 'Admin\Account\AdminController@manage_real_account')->name('manage.real.account');
  Route::post('admin/account/manage-real-account', 'Admin\Account\AdminController@manage_real_account_post')->name('manage.real.account.post');
  Route::get('admin/account/manage-real-account/{id}', 'Admin\Account\AdminController@manage_real_account')->name('account.real.manage');
  Route::get('admin/account/update-data-account/{id}', 'Admin\Account\RealAccountController@update_data_account')->name('update.account.real');
  Route::post('admin/account/update-data-account', 'Admin\Account\RealAccountController@update_data_account_do')->name('update.account.real.post');
  Route::get('admin/account/demo-account-list', 'Admin\Account\AdminController@list_demo')->name('demo.account.list');
  Route::get('admin/account/real-account-list', 'Admin\Account\AdminController@list_real')->name('real.account.list');
  Route::get('admin/account/approve-update-account', 'Admin\Account\AdminController@approve_update')->name('approve.update.account');
  Route::post('admin/account/approve-update-account-detail/{id}', 'Admin\Account\AdminController@approve_update_detail')->name('approve.update.account.detail');
  Route::post('admin/account/approve-update-account', 'Admin\Account\AdminController@approve_update_post')->name('approve.update.account.post');



  /*
  |--------------------------------------------------------------------------
  | User Management
  |--------------------------------------------------------------------------
  */

  Route::get('admin/user', 'Admin\User\UserController@index')->name('admin.user');
  Route::get('admin/account/real-account/form/107-PBK-01', 'Admin\Account\FormController@bpk_01')->name('form.sk107.bpk.01');
  Route::post('admin/account/real-account/form/107-PBK-01-check', 'Admin\Account\FormController@bpk_01_check')->name('form.sk107.bpk.01.check');
  Route::get('admin/account/real-account/form/107-PBK-01-download', 'Admin\Account\FormController@bpk_01_download')->name('form.sk107.bpk.01.download');
  Route::get('admin/account/real-account/form/107-PBK-03', 'Admin\Account\FormController@bpk_03')->name('form.sk107.bpk.03');
  Route::post('admin/account/real-account/form/107-PBK-03-check', 'Admin\Account\FormController@bpk_03_check')->name('form.sk107.bpk.03.check');
  Route::get('admin/account/real-account/form/107-PBK-03-download', 'Admin\Account\FormController@bpk_03_download')->name('form.sk107.bpk.03.download');

  Route::get('admin/account/real-account/form/107-PBK-02-1', 'Admin\Account\FormController@bpk_02_1')->name('form.sk107.bpk.02.1');
  Route::post('admin/account/real-account/form/107-PBK-02-1-check', 'Admin\Account\FormController@bpk_02_1_check')->name('form.sk107.bpk.02.1.check');
  Route::get('admin/account/real-account/form/107-PBK-02-1-download', 'Admin\Account\FormController@bpk_02_1_download')->name('form.sk107.bpk.02.1.download');
  Route::get('admin/account/real-account/form/107-PBK-02-2', 'Admin\Account\FormController@bpk_02_2')->name('form.sk107.bpk.02.2');
  Route::post('admin/account/real-account/form/107-PBK-02-2-check', 'Admin\Account\FormController@bpk_02_2_check')->name('form.sk107.bpk.02.2.check');
  Route::get('admin/account/real-account/form/107-PBK-02-2-download', 'Admin\Account\FormController@bpk_02_2_download')->name('form.sk107.bpk.02.2.download');

  Route::group(['prefix' => 'services'], function(){

    Route::get('open-account/task', 'Admin\Api\OpenAccountController@get_user_tasks');

  });
  Route::get('admin/account/real-account/form/107-PBK-04-2', 'Admin\Account\FormController@bpk_04_2')->name('form.sk107.bpk.04.2');
  Route::post('admin/account/real-account/form/107-PBK-04-2-check', 'Admin\Account\FormController@bpk_04_2_check')->name('form.sk107.bpk.04.2.check');
  Route::get('admin/account/real-account/form/107-PBK-04-2-download', 'Admin\Account\FormController@bpk_04_2_download')->name('form.sk107.bpk.04.2.download');
  Route::get('admin/account/real-account/form/107-PBK-05-2', 'Admin\Account\FormController@bpk_05_2')->name('form.sk107.bpk.05.2');
  Route::post('admin/account/real-account/form/107-PBK-05-2-check', 'Admin\Account\FormController@bpk_05_2_check')->name('form.sk107.bpk.05.2.check');
  Route::get('admin/account/real-account/form/107-PBK-05-2-download', 'Admin\Account\FormController@bpk_05_2_download')->name('form.sk107.bpk.05_2_download');
  Route::get('admin/account/real-account/form/107-PBK-06', 'Admin\Account\FormController@bpk_06')->name('form.sk107.bpk.06');
  Route::post('admin/account/real-account/form/107-PBK-06-check', 'Admin\Account\FormController@bpk_06_check')->name('form.sk107.bpk.06.check');
  Route::get('admin/account/real-account/form/107-PBK-06-download', 'Admin\Account\FormController@bpk_06_download')->name('form.sk107.bpk.06_download');
  Route::get('admin/account/real-account/form/107-PBK-07', 'Admin\Account\FormController@bpk_07')->name('form.sk107.bpk.07');
  Route::post('admin/account/real-account/form/107-PBK-07-check', 'Admin\Account\FormController@bpk_07_check')->name('form.sk107.bpk.07.check');
  Route::get('admin/account/real-account/form/107-PBK-07-download', 'Admin\Account\FormController@bpk_07_download')->name('form.sk107.bpk.07.download');

});

/*
|--------------------------------------------------------------------------
| Withdrawal & Deposit Router Guest
|--------------------------------------------------------------------------
*/
Route::get('admin/withdrawal', 'Admin\Withdrawal\WithdrawalController@index')->name('withdrawal');
Route::post('admin/subwithdrawal','Admin\Withdrawal\WithdrawalController@Withdrawal')->name('withdrawal');
Route::get('admin/managewithdrawal', 'Admin\Withdrawal\ManagewithdrawalController@index')->name('manage.withdrawal');
Route::post('admin/submanagewithdrawal', 'Admin\Withdrawal\ManagewithdrawalController@submanagewithdrawal')->name('submanage.withdrawal');
Route::get('admin/deposit', 'Admin\Deposit\DepositController@index')->name('deposit');
Route::post('admin/subdeposit', 'Admin\Deposit\DepositController@deposit')->name('deposit');
Route::get('admin/managedeposit', 'Admin\Deposit\ManagedepositController@index')->name('manage.deposit');
Route::post('admin/submanagedeposit', 'Admin\Deposit\ManagedepositController@submanagedeposit')->name('submanage.deposit');
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
