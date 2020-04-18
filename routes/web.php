<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/lang/{lang}', function ($lang) {
    if(auth()->check()){
    auth()->user()->lang=$lang;
    auth()->user()->save();
    return back();
    }
    else
    {
        if(session()->get('lang'))
        {
            session()->put('lang',$lang);
            return back();
        }
        return back();
    }
});
Route::group(['middleware' => ['lang']], function () {


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/login/{provider}/callback/', 'SocialController@callback');
Route::resource('/question', 'QuestionController');
Route::get('/{user}/questions', 'HomeController@user');
Route::post('/answer', 'HomeController@answer');
Route::get('/answer', 'HomeController@answers');
Route::get('/home', 'HomeController@index')->name('home');
});
