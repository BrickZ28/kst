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

Route::get('/', 'Index@index');

Route::get('/about', function () {
        return view('about');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/contact', [
    'uses' => 'ContactMessageController@create'
]);
Route::post('/contact', [
    'uses'  => 'ContactMessageController@store',
    'as'    => 'contact.store'
]);


Auth::routes();

Route::get('/prices', 'HomeController@index')->name('prices');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


