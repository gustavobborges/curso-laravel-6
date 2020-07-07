<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::any('products/search', 'ProductController@search')->name('products.search')->middleware('auth');
Route::resource('products', 'ProductController')->middleware(['auth', 'check.is.admin']);


// Route::delete('products/{id}', 'ProductController@destroy')->name('products.delete');
// Route::put('products/{id}', 'ProductController@update')->name('products.update');
// Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
// Route::get('products/create', 'ProductController@create')->name('products.create');
// Route::get('products/{id}', 'ProductController@show')->name('products.show');
// Route::get('products', 'ProductController@index')->name('products.index');
// Route::post('products', 'ProductController@store')->name('products.store');

Route::get('/login', function() {
    return 'login';
})->name('login');

Route::group([
    'middleware' => [],
        'middleware' => [],
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'name' => 'admin.'  
], function(){
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
        
    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
    
    Route::get('/produtos', 'TesteController@teste')->name('produtos');  

    Route::get('/', function() {
        return redirect()->route('login');  
    })->name('home');
});

Route::get('redirect3', function() {
    return redirect()->route('url.name');
});

Route::get('/nome-url', function() {
    return 'Hey Hey Lets Go Pikachu';
})-> name('url.name');

Route::view('/view', 'welcome');

Route::redirect('/redirect1', '/redirect2');

Route::get('redirect2', function() {
    return 'Redirect 02';
});

Route::get('/produtos/{idProduct?}', function($idProduct = ''){
    return "Produto(s) {$idProduct}";
});

Route::get('/categorias/{flag}/posts', function($flag) {
    return "Posts da caterogira: {$flag}";
});

Route::get('/categorias/{flag}', function($prm1) {
    return "Produtos da caterogira: {$prm1}";
});

Route::match(['get', 'post'], '/match', function() {
    return 'match';
});

Route::any('/any', function() {
    return 'Any';
});

Route::post('/register ', function() {
    return '';
});

Route::get('/contato', function() {
    return view('site.contact');
});

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['register' => false]);

