<?php

use Illuminate\Support\Facades\Route;
 use App\Product;
 use App\Category;
 use App\Image;

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

Route::get('/prueba', function () {

});
    
Route::get('/resultados', function () {
    $image = App\Image::orderBy('id','Desc')->get();
    return $image;
});


Route::get('/', function () {
    
    return view('index');
});


/* Administrador */
Route::get('/admin', function () {
    return view('layouts.admin');
})->name('admin');
Route::resource('admin/category', 'Admin\AdminCategoryController')->names('admin.category');
Route::resource('admin/product', 'Admin\AdminProductController')->names('admin.product');

Route::get('cancelar/{ruta}', function($ruta){
    return redirect()->route($ruta)->with('cancelar','Cancelado!');
})->name('cancelar');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('/admin/product', function () {
        return view('adminatir.product.index');
    });
    Route::get('/administrar-usuarios', 'Admin\AdminUsuarios@consultar')->name('administrar-usuarios');
    Route::get('/editar-usuarios/{id}', 'Admin\AdminUsuarios@editar');
    Route::post('/actualizando-usuario/{id}', 'Admin\AdminUsuarios@actualizar');
    Route::delete('/eliminar-usuarios/{id}', 'Admin\AdminUsuarios@eliminar');


}); */
Route::get('/', 'Front\IndexController@getCategory');
Route::post('/','MyMailController@enviarMensaje');
Route::get('/get/{id}', 'Front\IndexController@getProductos');



Route::get('/Nuestros-productos', 'CatalogoProductosController@index')->name('Nuestros-productos.index');
Route::get('/Nuestros-productos/{producto}', 'CatalogoProductosController@show')->name('Nuestros-productos.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');



Route::get('borrar', function(){
    Cart::destroy();
});


Route::get('/Blog-menu-informacion', 'Front\IndexController@BlogMenu')->name('Blog.menu');
Route::get('Blog-salud-proteccion', 'Front\IndexController@Blog')->name('Blog-salud-proteccion');

Route::get('Que-es-covid-coronavirus-covid-19-covid-2-preguntas-respuestas', 'Front\IndexController@Blog1')->name('Que-es-covid-coronavirus-covid-19-covid-2-preguntas-respuestas');
Route::get('Historia-quienes-somos-vision-mision', 'Front\IndexController@Blog3')->name('Historia-quienes-somos-vision-mision');
Route::get('Gel-antibacterial-sanitizantes-desinfectantes-antibacteriano-coronavirus', 'Front\IndexController@Blog2')->name('Gel-antibacterial-sanitizantes-desinfectantes-antibacteriano-coronavirus');
Route::get('Medidas-protección-contra-virus-coronavirus-bacterias-germenes', 'Front\IndexController@Blog4')->name('Medidas-protección-contra-virus-coronavirus-bacterias-germenes');

