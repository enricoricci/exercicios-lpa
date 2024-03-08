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

Route::get('soma', function(Request $request){

    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');
 
    $media = ($primeiraEntrada + $segundaEntrada);
    return $media;
 
});

Route::get('subtração', function(Request $request){
    
    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');
    $terceiroEntrada = $request->input('terceiraNumero');
 
    $media = ($primeiraEntrada - $segundaEntrada - $terceiroEntrada);
    return $media;

});

Route::get('divisão', function(Request $request){
    
    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');
    
 
    $resultado = ($primeiraEntrada / $segundaEntrada);
    return $resultado;

});

Route::get('multiplicação', function(Request $request){
    
    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');
    
 
    $resultado = ($primeiraEntrada * $segundaEntrada);
    return $resultado;

});

Route::get('media', function(Request $request){
    
    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');
    $terceiraEntrada = $request->input('terceiraNumero');
    $quartaEntrada = $request->input('quartonumero');
    $quintaEntrada = $request->input('quintonumero');

    $resultado = ($primeiraEntrada + $segundaEntrada + $terceiraEntrada + $quartaEntrada 
    + $quintaEntrada) /'5';

    return $resultado;
  
});

Route::get('divisão', function(Request $request){
    
    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');
    
 
    $resultado = ($segundaEntrada / $primeiraEntrada);
    return $resultado;

});

Route::get('divisão', function(Request $request){
    $primerioNumero = $request->input('numero');
    $resultado = $primerioNumero * '2';

    return ' O dobro do número ' . $primerioNumero . ' é ' . $resultado; 

});

Route::get('area', function(Request $request){
    
    $baseRetangulo = $request->input('base');
    $alturaRetangulo = $request->input('altura');

    $area = $baseRetangulo * $alturaRetangulo;
    return $area;

});

Route::get('desconto', function(Request $request){

    $produto = $request->input('produto');
    $desconto = $request->input('desconto');
    $resultado = $desconto / 100 * $produto;
    $resultado2 = $produto - $resultado;

    return 'o preço do produto custa ' . $produto . ' ,com o desconto de ' . $desconto . '% ,ficara ' . $resultado2;
    
}); 
