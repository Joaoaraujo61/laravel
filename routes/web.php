<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/contato', 'contato', ['nome'=>'joao']);

Route::get('/texto', function(){
    return "Texto";
});

Route::get('/contato/{idade?}', function($idade = null){
    return view('contato', ['anoIdade'=>$idade],['nome'=>'joao']);
});
