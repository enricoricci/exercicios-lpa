<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('senai', function(Request $request){
    $nome = $request->input('nome');
    Return $nome;
});

Route::get('naise', function(Request $request){
    $nome = $request->input('nome');
    $idade = $request->input('year');

    return 'Meu nome é '. $nome . ', tenho ' . $idade . ' anos de idade';
 

});

Route::get('cidade', function(Request $request){
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    $natal = $request->input('natal');

    return 'Meu nome é '. $nome . ', nasci no ano ' . $idade . ', na cidade de ' . $natal;

});