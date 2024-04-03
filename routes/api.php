<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('senai', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('naise', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('year');

    return 'Meu nome é ' . $nome . ', tenho ' . $idade . ' anos de idade';
});

Route::get('cidade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    $natal = $request->input('natal');

    return 'Meu nome é ' . $nome . ', nasci no ano ' . $idade . ', na cidade de ' . $natal;
});

Route::get('soma', function (Request $request) {

    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');

    $media = ($primeiraEntrada + $segundaEntrada);
    return $media;
});

Route::get('subtração', function (Request $request) {

    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');
    $terceiroEntrada = $request->input('terceiraNumero');

    $media = ($primeiraEntrada - $segundaEntrada - $terceiroEntrada);
    return $media;
});

Route::get('divisão', function (Request $request) {

    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');


    $resultado = ($primeiraEntrada / $segundaEntrada);
    return $resultado;
});

Route::get('multiplicação', function (Request $request) {

    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');


    $resultado = ($primeiraEntrada * $segundaEntrada);
    return $resultado;
});

Route::get('media', function (Request $request) {

    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');
    $terceiraEntrada = $request->input('terceiraNumero');
    $quartaEntrada = $request->input('quartonumero');
    $quintaEntrada = $request->input('quintonumero');

    $resultado = ($primeiraEntrada + $segundaEntrada + $terceiraEntrada + $quartaEntrada
        + $quintaEntrada) / '5';

    return $resultado;
});

Route::get('divisão', function (Request $request) {

    $primeiraEntrada = $request->input('primeiraNumero');
    $segundaEntrada = $request->input('SegundaNumero');


    $resultado = ($segundaEntrada / $primeiraEntrada);
    return $resultado;
});

Route::get('divisão', function (Request $request) {
    $primerioNumero = $request->input('numero');
    $resultado = $primerioNumero * '2';

    return ' O dobro do número ' . $primerioNumero . ' é ' . $resultado;
});

Route::get('area', function (Request $request) {

    $baseRetangulo = $request->input('base');
    $alturaRetangulo = $request->input('altura');

    $area = $baseRetangulo * $alturaRetangulo;
    return $area;
});

Route::get('desconto', function (Request $request) {

    $produto = $request->input('produto');
    $desconto = $request->input('desconto');
    $resultado = $desconto / 100 * $produto;
    $resultado2 = $produto - $resultado;

    return 'o preço do produto custa ' . $produto . ' ,com o desconto de ' . $desconto . '% ,ficara ' . $resultado2;
});

Route::get('aumento', function (Request $request) {

    $salario = $request->input('salario');
    $aumento = $request->input('aumento');
    $resultado = $aumento / 100 * $salario;
    $resultado2 = $salario + $resultado;

    return 'salario fixo que recebe é de ' . $salario . 'R$, o aumento sera de ' . $aumento . '% ,total do salario sera ' . $resultado2;
});

Route::get('pontos', function (Request $request) {

    $valorcompras = $request->input('valor');
    $resultado = $valorcompras / 10;

    return 'seu valor gasto é de ' . $valorcompras . ' ,ficara com ' . $resultado;
});

Route::get('comissao', function (Request $request) {
    $valortotal = $request->input('total');
    $comissão = 5;
    $resultado = $comissão / 100 * $valortotal;

    return 'valor da comisão sera de ' . $resultado;
});

Route::get('dias', function (Request $request) {
    $dias = $request->input('dia');

    $horas = $dias * 24;

    $min = $horas * 60;

    $segundos = $min * 60;

    return 'total de dias foram ' . $dias . ', total de horas foram ' . $horas . ', total de minutos foram ' . $min . ', total de segundos foram ' . $segundos;
});

Route::get('quantidade', function (Request $request) {

    $preço = $request->input('preço');

    $produtos = $request->input('quantidade');

    $resultado = $preço * $produtos;

    return 'valor total vai ser de ' . $resultado;
});


Route::get('verifica/idade', function (Request $request) {
    $idade = $request->input('idade');

    if ($idade >= 18) {
        return "maior de idade";
    } else {
        return "menor de idade";
    }
});

Route::get('verificar/par', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});

Route::get('numero', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 10) {
        return 'maior que 10';
    } else {
        return 'menor que 10';
    }
});

Route::get('numero1', function (Request $request) {

    $graus = $request->input('graus');

    if ($graus > 30) {
        return 'a temperatura atual esta ' . $graus . 'C, esta quente';
    } else {
        return 'a temperatura atua é de ' . $graus . 'C ';
    }
});

Route::get('numero2', function (Request $request) {

    $numero = $request->input('numero');

    if ($numero > 0) {
        return 'o numero ' . $numero . ' e positivo';
    } else if ($numero == 0) {
        return 'esse numero é zero';
    } else if ($numero < 0) {
        return 'o numero ' . $numero . ' e negativo';
    }
});

Route::get('numero3', function (Request $request) {

    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if ($numero1 > $numero2) {
        return 'o numero ' . $numero1 . ' é mais que o numero ' . $numero2;
    } else {
        return 'o numero ' . $numero1 . ' é menor que o numero ' . $numero2;
    }
});

Route::get('verifica/divisivel', function (Request $request) {

    $numero = $request->input('numero');
    if ($numero % 3 == 0) {
        return 'O número ' . $numero . " é divisivel por 3";
    } else {
        return 'O número ' . $numero . " não é divisivel por 3";
    }
});



Route::get('exercicio1', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 10) {
        return 'maior que 10';
    } else {
        return 'menor que 10';
    }
});

Route::get('exercicio2', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 10) {
        return 'maior que 10';
    } else {
        return 'menor que 10';
    }
});

Route::get('exercicio3', function (Request $request) {
    $idade = $request->input('idade');

    if ($idade >= 18) {
        return "maior de idade";
    } else {
        return "menor de idade";
    }
});

Route::get('exercicio4', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});

Route::get('exercicio5', function (Request $request) {

    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if ($numero1 > $numero2) {
        return 'o numero ' . $numero1 . ' é mais que o numero ' . $numero2;
    } else {
        return 'o numero ' . $numero1 . ' é menor que o numero ' . $numero2;
    }
});

Route::get('exercicio6', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 9 == 0) {
        return 'O número ' . $numero . " é divisivel por 9";
    } else {
        return 'O número ' . $numero . " não é divisivel por 9";
    }
});

Route::get('exercicio7', function (Request $request) {

    $graus = $request->input('graus');

    if ($graus > 30) {
        return 'a temperatura atual esta ' . $graus . 'C, esta quente';
    } else {
        return 'a temperatura atua é de ' . $graus . 'C ';
    }
});



Route::get('exercicio8', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero * 7 == 0) {
        return 'O número ' . $numero .  ' é multiplo por 7, que é igual a ' . 7 * $numero;
    } else {
        return 'O número ' . $numero . " não é multiplo por 7";
    }
});

Route::get('exercicio9', function (Request $request) {

    $graus = $request->input('idade');

    if ($graus > 12) {
        return ' voce tem: ' . $graus . 'anos, (adolecente.';
    } else {
        return ' voce tem ' . $graus . 'anos, (Voçê é uma criança. ';
    }
});

Route::get('exercicio10', function (Request $request) {

    $numero = $request->input('numero');
    if ($numero > 0) {
        if ($numero % 2 != 0) {
            return ' o numero e possitivo e impar';
        }
    }
});

Route::get('exercicio11', function (Request $request) {
    $numero1 = $request->input('numero1');


    if ($numero1 > 100) {
        return 'o numero ' . $numero1 . ' é maior que 100';
    } else if ($numero1 == 100) {
        return ' o numero e igual a 100';
    } else {
        return ' o numero e menor que 100';
    }
});

Route::get('exercicio12', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 6 == 0) {
        return 'O número ' . $numero . " é divisivel por 6";
    } else {
        return 'O número ' . $numero . " não é divisivel por 6";
    }
});

Route::get('exercicio13', function (Request $request) {
    $nome = $request->input('nome');

    if ($nome == 'Alice') {
        return 'Olá, Alice!';
    }
});

Route::get('exercicio14', function (Request $request){
    $idade = $request->input('idade');
    $carteira = $request->input('carteira');
    if ($idade > 18) {
        if ($carteira == 'sim'){
            return 'você pode dirigir';
        } else {
            return 'você não pode dirigir';
        }
    } else if($idade == 18){
    if ($carteira == 'sim'){
        return 'voce pode dirigir';
        }  
    }else if($idade < 18){
        if ($carteira == 'não'){
            return 'voce não pode dirigir';
    }
    }

});

Route::get('exercicio16', function (Request $request){

        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
    
        if ($numero1 != $numero2){
        if($numero1 < $numero2){
         return ' o ' . $numero1 . ' e menor que o ' . $numero2; 
        }else {
        return ' o numero' . $numero2 . ' e menor que o ' . $numero1;
        }
        }else {
            return 'os numeros são iguais'; 
        }

}); 

Route::get('exercicio17', function (Request $request){
    $idade = $request->input('idade');
    $nome = $request->input('nome');

    if ($idade >= 18){
    
        return 'voce é maior de idade ' . $nome;
    }else {
        return 'voce é menor de idade ' . $nome;
    }
    

});

Route::get('exercicio18', function (Request $request){
    $numero1 = $request->input('num1');
    $numero2 = $request->input('num2');
    
   
     if ($numero1 ==0){
        return 'não é possivel efetuara divisão pois o primeiro numero e zero';
        
    }else if ($numero2 ==0){
            return 'não é possivel efetuara divisão pois o primeiro numero e zero';
    
    }
    $resultado = $numero1 / $numero2;

    return 'o resultado é ' . $resultado;
    });

    Route::get('exercicio19', function (Request $request){
        $numero1 = $request->input('num1');
        $numero2 = $request->input('num2');

        $resultado = $numero1 * $numero2;
        if ($resultado >100){
        return 'o resultado ' . $resultado . ' é maior que 100';
        }else {
        return 'o resultado é ' . $resultado;
        }
   
        });

        Route::get('exercicio20', function (Request $request){
            $numero1 = $request->input('num1');
            $numero2 = $request->input('num2');
            $resultado = $numero1 + $numero2;
            if ($resultado % 2 ==0){
                return $numero1 * $numero2;
            }else if ($resultado % 2 !=0){
                return ($numero1 / $numero2);
            }

});
