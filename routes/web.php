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

///////////////////////////
Route::group(['prefix' => '/blog', 'as' => 'blog.', 'middleware'=>'auth'], function(){
	Route::get('/','BlogController@index')->name('index');
	Route::get('/create','BlogController@create')->name('create');
	Route::put('/{id}','BlogController@update')->name('update');
	Route::get('/{id}','BlogController@show')->name('show');
	Route::post('/','BlogController@store')->name('store');
	Route::get('/edit/{id}','BlogController@edit')->name('edit');
	Route::delete('/{id}','BlogController@destroy')->name('destroy');

});
