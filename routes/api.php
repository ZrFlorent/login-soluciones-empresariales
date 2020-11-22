<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */

Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('/admin/product', function () {
        return view('adminatir.product.index');
    });
 /*    Route::get('/administrar-usuarios', 'Admin\AdminUsuarios@consultar')->name('administrar-usuarios');
    Route::get('/editar-usuarios/{id}', 'Admin\AdminUsuarios@editar');
    Route::post('/actualizando-usuario/{id}', 'Admin\AdminUsuarios@actualizar');
    Route::delete('/eliminar-usuarios/{id}', 'Admin\AdminUsuarios@eliminar'); */
    Route::apiResource('category','API\CategoryController')->names('api.category');
    Route::apiResource('product','API\ProductController')->names('api.product');
    Route::delete('/eliminarimagen/{id}','API\ProductController@eliminarimagen')->name('api.eliminarimagen');
    
    Route::get('autocompletar', 'API\AutocompleteController@autocompletar')->name('autocompletar');
    

});
/* Route::apiResource('category','API\CategoryController')->names('api.category');
Route::apiResource('product','API\ProductController')->names('api.product');
Route::delete('/eliminarimagen/{id}','API\ProductController@eliminarimagen')->name('api.eliminarimagen');

Route::get('autocompletar', 'API\AutocompleteController@autocompletar')->name('autocompletar');
 */