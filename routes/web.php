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
Route::get('/admin', 'HomeController@index');

Route::get('/events/viewall', 'EventController@viewAll');
Route::get('/events/lookupEvents', 'EventController@lookupEvents');
Route::get('/events/search', 'EventController@search');
Route::resource('events', 'EventController');
//Route::get('/events/create', 'EventController@create');
//Route::get('/events/lookup', 'EventController@searchEventsPage');
//Route::get('/events/edit', 'EventController@edit');
//Route::get('/events/viewall', 'EventController@viewAll');


