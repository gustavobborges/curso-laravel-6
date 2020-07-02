<?php

use Illuminate\Support\Facades\Route;

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
