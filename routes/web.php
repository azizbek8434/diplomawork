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

Auth::routes();
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::post('/message/store', 'WelcomeController@message')->name('message.store');
Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'auth'
], function() {
    Route::redirect('/', '/dashboard/main');
    Route::get('/main', 'HomeController@index')->name('dashboard');
    Route::get('/add-complaint', 'ComplaintController@showComplaintForm')->name('add.complaint');
    Route::post('/store-complaint', 'ComplaintController@store')->name('store.complaint');
    Route::group(['middleware' => ['role:Admin|Inspector|User']], function () {
        Route::resource('users','UserController');
        Route::resource('roles','RoleController');
        Route::resource('regions','RegionController');
        Route::resource('complaints','ComplaintController');
        Route::resource('permissions','PermissionController');
        Route::get('profile','UserController@profile')->name('users.profile');
        Route::patch('profile/{id}','UserController@uprofile')->name('users.uprofile');
        Route::get('/{region}','HomeController@region')->name('content.region');
        Route::get('/{region}/{suptype}','HomeController@suptype')->name('content.suptype');
        Route::get('/{region}/{suptype}/{subtype}','HomeController@subtype')->name('content.subtype');
        Route::get('/{region}/{suptype}/{subtype}/{$id}','HomeController@complaint')->name('complaints');
    });
});