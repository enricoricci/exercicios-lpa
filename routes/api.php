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

Route::get('aumento', function(Request $request){

    $salario = $request->input('salario');
    $aumento = $request->input('aumento');
    $resultado = $aumento / 100 * $salario;
    $resultado2 = $salario + $resultado;

    return 'salario fixo que recebe é de ' . $salario . 'R$, o aumento sera de ' . $aumento . '% ,total do salario sera ' . $resultado2;
});

Route::get('pontos', function(Request $request){

    $valorcompras = $request->input('valor');
    $resultado = $valorcompras / 10;

    return 'seu valor gasto é de ' . $valorcompras . ' ,ficara com ' . $resultado;

});

Route::get('comissao', function(Request $request){
    $valortotal = $request->input('total');
    $comissão = 5;
    $resultado = $comissão / 100 * $valortotal;

    return 'valor da comisão sera de ' . $resultado;

});

Route::get('dias', function(Request $request){
    $dias = $request->input('dia');

    $horas = $dias * 24;

    $min = $horas * 60;

    $segundos = $min * 60;

    return 'total de dias foram ' . $dias . ', total de horas foram ' . $horas . ', total de minutos foram ' . $min . ', total de segundos foram ' . $segundos;

});


