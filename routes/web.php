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

Route::get('/admin/dashboard', 'HomeController@index')->name('home');
//Route::get('/admin/file/add', 'HomeController@add')->name('add');
//Route::get('/admin/file/list', 'HomeController@list')->name('add');


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

/* permission */
Route::get('/admin/permission', 'PermissionController@index')->name('perm.index');
Route::get('/admin/permission/add', 'PermissionController@create')->name('perm.create');
Route::post('/admin/permission/add', 'PermissionController@store')->name('perm.store');
Route::get('/admin/permission/{id}/show', 'PermissionController@show')->name('perm.show');
Route::get('/admin/permission/{id}', 'PermissionController@edit')->name('perm.edit');
Route::post('/admin/permission/{id}', 'PermissionController@update')->name('perm.update');
Route::get('/admin/permission/{id}/delete', 'PermissionController@destroy')->name('perm.destroy');
Route::get('/admin/permission/searching', 'PermissionController@find')->name('perm.find');
Route::post('/admin/permission/searching', 'PermissionController@search')->name('perm.search');

/* role */
Route::get('/admin/role', 'RoleController@index')->name('role.index');
Route::get('/admin/role/add', 'RoleController@create')->name('role.create');
Route::post('/admin/role/add', 'RoleController@store')->name('role.store');
Route::get('/admin/role/{id}/show', 'RoleController@show')->name('role.show');
Route::get('/admin/role/{id}', 'RoleController@edit')->name('role.edit');
Route::post('/admin/role/{id}', 'RoleController@update')->name('role.update');
Route::get('/admin/role/{id}/delete', 'RoleController@destroy')->name('role.destroy');
Route::get('/admin/role/searching', 'RoleController@find')->name('role.find');
Route::post('/admin/role/searching', 'RoleController@search')->name('role.search');

/* user */
Route::get('/admin/user', 'UserController@index')->name('user.index');
Route::get('/admin/user/add', 'UserController@create')->name('user.create');
Route::post('/admin/user/add', 'UserController@store')->name('user.store');
Route::get('/admin/user/{id}/show', 'UserController@show')->name('user.show');
Route::get('/admin/user/{id}/role', 'UserController@role')->name('user.role');
Route::post('/admin/user/{id}/role', 'UserController@set_role')->name('user.set_role');
Route::get('/admin/user/{id}', 'UserController@edit')->name('user.edit');
Route::post('/admin/user/{id}', 'UserController@update')->name('user.update');
Route::get('/admin/user/{id}/delete', 'UserController@destroy')->name('user.destroy');
Route::get('/admin/user/searching', 'UserController@find')->name('user.find');
Route::post('/admin/user/searching', 'UserController@search')->name('user.search');





Route::group(['middleware' => ['role:writer']], function () {



    Route::get('/admin/file/add', 'HomeController@add')->name('add');
    Route::get('/admin/file/list', 'HomeController@list')->name('add');

    /*
     *   Route Template
     */
//    Route::get('/admin/permission', 'PermissionController@index')->name('perm.index');
//    Route::get('/admin/permission/add', 'PermissionController@create')->name('perm.create');
//    Route::post('/admin/permission/add', 'PermissionController@store')->name('perm.store');
//    Route::get('/admin/permission/{id}', 'PermissionController@show')->name('perm.show');
//    Route::get('/admin/permission/{id}', 'PermissionController@edit')->name('perm.edit');
//    Route::put('/admin/permission/{id}', 'PermissionController@update')->name('perm.update');
//    Route::delete('/admin/permission/{id}', 'PermissionController@destroy')->name('perm.destroy');
//    Route::get('/admin/permission/searching', 'PermissionController@find')->name('perm.find');
//    Route::post('/admin/permission/searching', 'PermissionController@search')->name('perm.search');




});
