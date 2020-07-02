<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function() {
    return 'login';
})->name('login');


// Route::middleware([])->group(function() {
//     Route::prefix('admin')->group(function() {
//         Route::namespace('Admin')->group(function () {
//             Route::name('admin.')->group(function() {
//                 Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
        
//                 Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
                
//                 Route::get('/produtos', 'TesteController@teste')->name('produtos');  
        
//                 Route::get('/', function() {
//                     return redirect()->route('home');
//                 });
//             });  
//         });      
//     });
// });

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
        return redirect()->route('admin.dashboard');  
    })->name('home');
});

Route::get('redirect3', function() {
    return redirect()->route('url.name');
});

// route('/nome-url');

Route::get('/nome-url', function() {
    return 'Hey Hey Lets Go Pikachu';
})-> name('url.name');

Route::view('/view', 'welcome');

Route::redirect('/redirect1', '/redirect2');

// Route::get('redirect1', function() {
//     return redirect('/redirect2');
// });

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


