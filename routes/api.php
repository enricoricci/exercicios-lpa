<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('senai', function(Request $request){
    $nome = $request->input('nome');
    Return $nome;
});
