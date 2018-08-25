<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'web'], function () {
    // <-- Show Main Page
    Route::get('main', [
        'as' => 'main.showMainPage',
        'uses' => 'MainController@showMainPage'
    ]);

    Route::get('/', [
        'as' => 'main.showMainPage',
        'uses' => 'MainController@showMainPage'
    ]);

    Route::get('/login', [
        'as' => 'users.showLogin',
        'uses' => 'UsersController@showLogin'
    ]);

    // <--- Login, Sign Up Page

    Route::post('/login', [
        'as' => 'users.doLogin',
        'uses' => 'UsersController@doLogin'
    ]);

    Route::get('/signup', [
        'as' => 'register.showRegisterForm',
        'uses' => 'RegisterController@showRegisterForm'
    ]);

});

/*
// <— Test
Route::get('test',[
    'as' =>  'main.test',
    'uses' => 'MainController@test'
]);*/

// <— Image Route

// 가게 타이틀, 갤러리 이미지 Route
Route::get('images/{image}', function($image)
{
    $path = storage_path().'/app/public/images/' . $image;
    if (file_exists($path)) {
        return Response::download($path);
    }
    else
        return $path;
});

// 메뉴 이미지 Route
Route::get('images/menu/{shop_id}/{image}', function($shop_id, $image = null)
{
    $path = storage_path().'/app/public/img/menu/' . $shop_id.'/' .$image;
    if (file_exists($path)) {
        return Response::download($path);
    }
    else
        return $path;
});

// 리뷰 이미지 Route
Route::get('images/review/{image}', function($image = null)
{
    $path = storage_path().'/app/public/img/review' .$image;

    if (file_exists($path)) {
        return Response::download($path);
    }
    else
        return $path;
});

// 국가 마크 이미지 Route
Route::get('images/flag/{image}', function($image = null)
{
    $path = storage_path().'/app/public/img/flag' .$image;

    if (file_exists($path)) {
        return Response::download($path);
    }
    else
        return $path;
});

// 커뮤니케이션 버튼 이미지 Route
Route::get('images/emoticon/{image}', function($image = null)
{
    $path = storage_path().'/app/public/img/emoticon' .$image;

    if (file_exists($path)) {
        return Response::download($path);
    }
    else
        return $path;
});

// Template 이미지 Route

Route::get('images/template/{image}', function($image = null)
{
    $path = storage_path().'/app/public/img/template' .$image;

    if (file_exists($path)) {
        return Response::download($path);
    }
    else
        return $path;
});