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

Route::get('/home',[
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
Route::get('/chon-game/{id}',[
    'as' => 'home.select-game',
    'uses' => 'HomeController@selectGame'
]);
Route::get('/chon-telco/{telco}/{game}',[
    'as' => 'home.select-telco',
    'uses' => 'HomeController@selectTelco'
]);
Route::get('/tra-cuu',[
    'as' => 'tra-cuu.index',
    'uses' => 'SearchController@index'
]);
Route::get('/test',[
    'as' => 'home.two',
    'uses' => 'HomeController@indexTwo'
]);
Route::get('/tai-khoan-ngan-hang',[
    'as' => 'bank.index',
    'uses' => 'BankController@index'
]);
Route::post('/tai-khoan-ngan-hang',[
    'as' => 'bank.post-index',
    'uses' => 'BankController@addBank'
]);
Route::get('/rut-tien',[
    'as' => 'bank.back-pay',
    'uses' => 'BankController@backPay'
]);
Route::post('/rut-tien',[
    'as' => 'post-bank.back-pay',
    'uses' => 'BankController@processBackPay'
]);
Route::get('/lich-su-rut-tien',[
    'as' => 'bank.history-with-draw',
    'uses' => 'BankController@historyWithDraw'
]);
Route::get('/nap-tien-dien-thoai',[
    'as' => 'bank.add-money-phone',
    'uses' => 'BankController@addMoneyPhone'
]);
Route::post('/nap-tien-dien-thoai',[
    'as' => 'bank.post-add-money-phone',
    'uses' => 'BankController@procesAddMoneyPhone'
]);
Route::get('/lich-nap-tien-dien-thoai',[
    'as' => 'bank.history-pay-phone',
    'uses' => 'BankController@historyPayPhone'
]);


/*
 * -----------------Page---------------
 */
Route::get('/bang-gia',[
   'as' => 'page.table-price',
   'uses' => 'PageController@tablePrice'
]);

//user
Route::get('/dang-ky', [
    'as' => 'user.register',
    'uses' => 'DoiThe\UserController@register'
]);
Route::post('/dang-ky', [
    'as' => 'user.post-register',
    'uses' => 'DoiThe\UserController@postRegister'
]);
Route::get('dang-nhap',[
   'as' => 'user.login',
   'uses' => 'DoiThe\AuthController@loginForm'
]);

Route::post('/quen-mat-khau',[
   'as' => 'auth.forget',
   'uses' => 'AuthController@forgetPassword'
]);
Route::get('/quen-mat-khau',[
    'as' => 'auth.forget',
    'uses' => 'AuthController@processForgetPassword'
]);
Route::post('/doi-mat-khau-moi', [
    'as' => 'user.forget-password-post',
    'uses' => 'UserController@changePasswordForget'
]);

// check login
Route::group(['middleware' => ['CheckLogin']], function() {
    Route::get('/thong-tin-tai-khoan', [
        'as' => 'user.profile',
        'uses' => 'UserController@profile'
    ]);
    Route::post('/thong-tin-tai-khoan', [
        'as' => 'user.profile-post',
        'uses' => 'UserController@updateProfile'
    ]);
    Route::get('/doi-mat-khau', [
        'as' => 'user.reset-password',
        'uses' => 'UserController@resetPassword'
    ]);
    Route::post('/doi-mat-khau', [
        'as' => 'user.reset-password-post',
        'uses' => 'UserController@changePassword'
    ]);
    Route::get('/tao-mat-khau-cap-2', [
        'as' => 'user.password-two',
        'uses' => 'UserController@passwordTwo'
    ]);
    Route::post('/tao-mat-khau-cap-2', [
        'as' => 'user.post-password-two',
        'uses' => 'UserController@processPasswordTwo'
    ]);

//thanh toan
    Route::get('/nap-sim', [
        'as' => 'pay.pay-card',
        'uses' => 'PayCardController@sms'
    ]);
    Route::post('/nap-sim', [
        'as' => 'pay.pay-card-post',
        'uses' => 'PayCardController@addPhone'
    ]);
    Route::post('/cap-nhat-sim', [
        'as' => 'pay.update-sim-post',
        'uses' => 'PayCardController@updateSim'
    ]);

    Route::get('nap-the', [
        'as' => 'pay.card',
        'uses' => 'PayCardController@card'
    ]);


    Route::post('add-card', [
        'as' => 'pay.add-card',
        'uses' => 'PayCardController@addCard'
    ]);
});

Route::post('dang-nhap',[
   'as' => 'user.login',
   'uses' => 'DoiThe\AuthController@login'
]);

Route::get('/dang-xuat', [
    'as' => 'user.logout',
    'uses' => 'AuthController@logout'
]);

/**
 * -------------------------Doi-The---------------------------
 */
Route::get('/',[
    'as'=>'doithe.home',
    'uses'=>'DoiThe\HomeController@index'

]);
