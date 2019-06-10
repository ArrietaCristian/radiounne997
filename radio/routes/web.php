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

use App\Post;

Route::redirect('/', 'principal'); 
    

Auth::routes();

//web

Route::get('/principal', 'Web\PrincipalController@principal')->name('principal');

Route::get('entrada/{slug}', 'Web\PrincipalController@post')->name('post');

Route::get('categoria/{slug}', 'Web\PrincipalController@category')->name('category');

Route::get('etiqueta/{slug}', 'Web\PrincipalController@tag')->name('tag');

Route::get('/imagen', 'Web\ImagenController@getImagen')->name('imagen');

Route::get('post/search', function(){
	/*nuevo: si el argumento search esta vacio regresar a la pagina anterior*/
	if(empty(Input::get('search'))) return redirect()->back();

	$search = urlencode(e(Input::get('search')));
	$route = 'post/search/'.$search;
	return redirect($route);
})-> name('post.search');

Route::get('post/search/{search}', 'web\PrincipalController@search');

Route::get('posts/anteriores', 'Web\PrincipalController@anteriores')->name('anteriores');

Route::get('categorias/{slug}', 'Web\PrincipalController@getCategory')->name('categoria');

Route::get('etiquetas/{slug}', 'Web\PrincipalController@getTag')->name('etiqueta');

Route::get('programacion', 'Web\PrincipalController@getProg')->name('programacion');

Route::get('contacto', 'Web\PrincipalController@getContacto')->name('contacto');

//admin

Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
Route::resource('imagenesRADIOUNNE997', 'Admin\ImageController');