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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PagesController@index')->name('about');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/{del_id}/delete', 'AdminController@deleteSupervisor')->name('admin.delete.supervisor');

    Route::get('/show/users/{del_id}/delete', 'AdminController@deleteUser')->name('admin.delete.user');

    Route::get('/show/users', 'AdminController@showUsers')->name('admin.show.user');
    Route::get('/userProfile/{id}', 'AdminController@userProfile')->name('admin.userProfile');

    Route::get('/create/user', 'AdminController@createUser')->name('admin.create.user');
    Route::post('/store/user', 'AdminController@storeUser')->name('admin.store.user');

    Route::get('/create/supervisor', 'AdminController@createSupervisor')->name('admin.create.supervisor');
    Route::post('/store/supervisor', 'AdminController@storeSupervisor')->name('admin.store.supervisor');
    Route::get('/supervisorProfile/{id}', 'AdminController@supervisorProfile')->name('admin.supervisorProfile');
});

Route::prefix('supervisor')->group(function(){
    Route::get('/login', 'Auth\SupervisorLoginController@showLoginForm')->name('supervisor.login');
    Route::post('/login', 'Auth\SupervisorLoginController@login')->name('supervisor.login.submit');
    Route::get('/', 'SupervisorController@index')->name('supervisor.dashboard');
    Route::get('/userProfile/{id}', 'SupervisorController@userProfile')->name('supervisor.userProfile');

    Route::get('/incrementi/{id}', 'SupervisorController@incrementi')->name('supervisor.incrementi');
    Route::get('/incrementq/{id}', 'SupervisorController@incrementq')->name('supervisor.incrementq');
    Route::get('/incremento/{id}', 'SupervisorController@incremento')->name('supervisor.incremento');
    Route::get('/incrementr/{id}', 'SupervisorController@incrementr')->name('supervisor.incrementr');
    Route::get('/incrementi2/{id}', 'SupervisorController@incrementi2')->name('supervisor.incrementi2');
    Route::get('/incrementa/{id}', 'SupervisorController@incrementa')->name('supervisor.incrementa');
    Route::get('/incrementn/{id}', 'SupervisorController@incrementn')->name('supervisor.incrementn');
});

Route::get('/about', function () {
    return view('pages.about');
});


