<?php
//inteiros
$ano = 2026;
echo $ano;
echo "<br>";
?>

<?php
//ler numeros
$pi = 3.1459;
echo "valor de pi é ", $pi;

echo "<br>";
echo "<br>___________________________________________________";

//strings
$nome = "Maria";
$cpf = '234.605.603.78';
echo $nome ," CPF ", $cpf;
echo "<br>";

$idade = 18;

if ($idade == true) {
    echo "<br>" .  $idade;
}
echo "<br>___________________________________________________";

//arrays, armazena quantidades grandes de variaveis/informações dentro de uma unica variavel
$nome = ["vitoria" , "idade - 18" , "nerd pra caramba" , "17,50 na conta"];
//           [0]           [1]              [2]                 [3]
//echo "<br>Nomes: ", $nome[3]; -- puxa algo esecifico dos bagulho

foreach ($nome as $nome) {
    echo "<br>" . $nome;
}
?>

<?php
echo "<br>___________________________________________________";
echo "<br>";
$aluno = [
    "nome" => "Maria",
    "cpf" => "234.605.603.78",
    "idade" => 20,
    "curso" => "Sistemas"
];

echo $aluno ["nome"] . "<br>";
echo $aluno ["cpf"] . "<br>";
echo $aluno ["idade"] . "<br>";
echo $aluno ["curso"] . "<br>";

$turmas = [
    ["nome" => "ana", "nota" => 8.7, "curso" => "Sistemas"]
];

echo $turmas [0]["nome"] . "<br>";


echo "<br>___________________________________________________";
?>

<?php
echo "<br>";
$nome = "vitoria";
echo "meu nome é " , $nome;
echo "<br>";
$idade = 18;
echo "minha idade é " , $idade;
echo "<br>";
$altura = '1.65';
echo " e minha altura é " , $altura;
$estudante = 'aluna';
if ($estudante == true) {
    echo "<br>" .  "eu sou uma " , $estudante;
}

$cores = ["verde" , "azul" , "preto"];

foreach ($cores as $cores) {
    echo "<br>" . $cores;
}



