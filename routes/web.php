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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('/panelAdmin', function () {
        return view('admin.panelAdmin');
    });
    Route::get('/administrar-usuarios', 'Admin\AdminUsuarios@consultar')->name('administrar-usuarios');
    Route::get('/editar-usuarios/{id}', 'Admin\AdminUsuarios@editar');
    Route::post('/actualizando-usuario/{id}', 'Admin\AdminUsuarios@actualizar');
    Route::delete('/eliminar-usuarios/{id}', 'Admin\AdminUsuarios@eliminar');


});