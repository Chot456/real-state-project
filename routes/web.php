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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web', 'auth']], function() {
    // Route::get('/', function () {
    //     return redirect()->guest('welcome');
    // });

    Route::get('/home', function() {
        if (Auth::user()->is_admin == 1) {
            $users = \App\User::all();
            return view('home', compact('users'));
            
        } else {
            $users = \App\User::all();
            return view('user.home',compact('users'));
        }
    });

    Route::get('/admin/user', function () {
        return view('admin.user');
    });
    

});

Route::get('locale/{lange}','LocalizationController@setLang');

// Route::patch('/updateQuestion/{id}', 'Questionaire\QuestionaireController@update')->name('updateQuestion');

