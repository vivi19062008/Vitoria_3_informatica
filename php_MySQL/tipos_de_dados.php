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
echo "<br>___________________________________________________";
?>

<?php
function rolarDado($lados = 180) {
    return rand(1, $lados);
}

// Exemplo de uso:
echo "Dado de 6 lados: " . rolarDado() . "<br>";
echo "Dado de 20 lados (RPG): " . rolarDado(20);
echo "<br>___________________________________________________";
?>

<?php
$finalDeSemana = "em meu final de semana, eu joguei muitos jogos legais, no Minecraft eu começei a construir uma estação de trem que eu vi no you tube, esse meu mundo da estação é o mundo mais bonito que eu tenho :D, joguei tambem overcooked, um jogo de cozinha, que é bem estrassante mas muito legal !!.";
echo "<br>";
echo "1) ";
echo strlen($finalDeSemana);

echo "<br>";
echo "2) ";
echo strtoupper($finalDeSemana);

echo "<br>";
echo "3) ";
echo strtolower($finalDeSemana);

echo "<br>";
echo "4) ";
var_dump(strpos($finalDeSemana, "jogo"));

echo "<br>";
echo "5) ";
echo str_replace("jogos", "trinta", $finalDeSemana);

echo "<br>";
echo "6) ";
echo $finalDeSemana;
echo trim($finalDeSemana);

echo "<br>";
echo "7) ";
$pizza = "p1,p2,p3,p4";
$pedacos = explode(",", $pizza);

// Resultado: ["p1", "p2", "p3", "p4"]
print_r($pedacos);

echo "<br>";
echo "8) ";
$palavras = ['uau', 'que', 'coisa', 'legal'];
echo implode('', $palavras);

echo "<br>";
echo "9) ";
echo str_word_count($finalDeSemana);
