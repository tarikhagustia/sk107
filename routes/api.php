<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('article', 'Api\Article\ArticleAPIController@list_article');

Route::get('open-account/task', function(){

  $task = [
    [
      'title' => 'Profile Perusahaan PT. Avengers Maju Bersama',
      'form_number' => '102.PBK.01',
      'action' => 'ajax',
      'status' => 'active',
      'action_url' => url('profile.html'),
      'description' => 'Baca Lebih Lanjut (Formulir Nomor : 102.PBK.01)'
    ],
    [
      'title' => 'Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka ',
      'form_number' => '102.PBK.01',
      'action' => 'http',
      'status' => 'disabled',
      'action_url' => url('profile.html'),
      'description' => 'Baca Lebih Lanjut (Formulir Nomor : 102.PBK.01)'
    ]
  ];

  return $task;


});
