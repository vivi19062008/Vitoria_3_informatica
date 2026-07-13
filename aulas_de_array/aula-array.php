<?php

echo "LISTA DE EXERCICIOS";
//  EXERCÍCIO
//  Qual a sintáxe correta para criar um array em PHP?


//  EXERCÍCIO
// Na seguinte matriz:
// $fruits = array('Apple', 'Banana', 'Orange');
// Qual seria a sintaxe correta para alterar o segundo valor de 'Banana' para 'Pineapple'?


//  EXERCÍCIO
//  Exiba o segundo item da matriz $fruits.
echo "<br>";

echo "========================================================================<br>";

echo "<br>";
echo "1)";
$fruits = array('maçã', 'Banana', 'laranja');
echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<br>";
echo "========================================================================<br>";
echo "<br>";

echo "2)";
$animals = array("maçã", "banana", "mamão", "abacaxi");
echo "<pre>";
print_r($animals);
echo "</pre>";
echo "Substituindo banana por pera";
$animals[1] = "pera";
echo "<pre>";
print_r($animals);
echo "</pre>";

echo "<br>";
echo "========================================================================<br>";
echo "<br>";

echo "3)";
$fruita = ["Maçã", "Banana", "Laranja"];
echo $fruita[0];
echo "<br>";
echo "<pre>";
print_r($fruita);
echo "</pre>";

echo "<br>";
echo "========================================================================<br>";
echo "<br>";

// EXERCÍCIO 1
//$fruits = array('Tamarindo', 'Pitaia', 'Siriguela');
//Qual a sintax correta para mudar o segundo valor para Abacaxi?
echo "4)";
$fruits = array('Tamarindo', 'Pitaia', 'Siriguela');
echo "<pre>";
print_r($fruits);
echo "</pre>";
$fruits[1] = "abacaxi";
echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<br>";
echo "========================================================================<br>";
echo "<br>";

//  EXERCÍCIO 2
//  Como imprimir o segundo e o terceiro item do array $fruits?
echo "5)";
$fruits = array('Tamarindo', 'Pitaia', 'Siriguela');
echo $fruita[1];
echo "<br>";
echo $fruita[2];
echo "<br>";
echo "<pre>";
print_r($fruita);
echo "</pre>";

echo "<br>";
echo "========================================================================<br>";
echo "<br>";

//  EXERCÍCIO 3
//  Crie um array associativo para estado/capital/data de fundação da capital?
echo "6)";
$car = array("estado"=>"minas gerais", "capital"=>"belo horizonte", "ano de fundação"=>1964);
echo "<pre>";
print_r($car);
echo "</pre>";

echo "<br>";
echo "========================================================================<br>";
echo "<br>";

//  EXERCÍCIO 4
// Dada a array associativa abaixo. Como imprimir a idade de Ben?
//  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "7)";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo $age["Ben"];
echo "<pre>";
var_dump($age["Ben"]);
echo "</pre>";

echo "<br>";
echo "========================================================================<br>";
echo "<br>";

//  EXERCÍCIO 5
//  Preencha os espaços em branco para imprimir a chave e o valor.
// ________($idade ___ $x ___ $y){
// echo "Chave=" . ____ . ", Valor=" . ____;
//  }
echo "8)";
$aluno = array("idade"=>"18", "nome"=>"vitoria", "ano"=>2008);
var_dump($aluno);

echo $aluno["idade"];
echo "<br>";
echo "<br><br>";

foreach ($aluno as $x => $y) {
    echo "$x: $y <br>";
}