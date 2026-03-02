<?php
//comand ode saida
echo "<br>------------------------------------------------------<br>";
echo "<h1>ola mundo</h1>";

$mensage = "<br>ola mundo!<br>";

//print
$mensage = "ola";
if (print $mensage) {
    echo "- mensagem exibida com sucesso!!!";
}
echo "<br>------------------------------------------------------<br>";
?>
<br>
<br>
<br>

<?php_ini_loaded_file();
    echo "<br>------------------------------------------------------<br>";
$nome = "vitoria";

if ($nome == "vitoria") {
    echo "OLA vivi, bem vinda ";
} else {
    echo "Ola, agora sai daqui :D";
}
?>

<br>
<br>
<br>

<?php
echo "<br>------------------------------------------------------<br>";

echo $nome = "vitoria";
echo $idade = "18";
echo $altura = "1.65";
$adress = "rua que sobe e desce que nunca aparece, 723";
echo "$nome: vitoria $idade anos $altura 1.65 $adress rua que sobe e desce que nunca aparece, 723;";
echo $altura + $idade;

?>

<?php
echo "<br>------------------------------------------------------<br>";
define("PI", 3.14);
define("C",299792458);

echo "o valor de PI é:", PI, " É o valor de C é:", C, " é metros por segundo" ;

echo "<br>------------------------------------------------------<br>";
?>


    //exercicio-1
<br>

<?php
//exercicio-1

$nome = "vitoria";
$idade = 18;

if ($idade == "18") {
    echo $nome, ", voce ja pode tirar carteira";
} else {
    echo $nome, ", voce ainda nao pode tirar carteira";
}
?>

<?php
//exercicio 2

    for ($i = 0; $i <= 100; $i++){
        echo "<br>Numero; $i";
    }
echo "<br>------------------------------------------------------<br>";

    echo "<br>de dois em dois";

for ($i = 0; $i <= 100; $i = $i+2){
    echo "<br>Numero; $i";
}
echo "<br>------------------------------------------------------<br>";

echo "<br>contagem regressiva de 3 em 3";

for ($i = 100; $i >= 0; $i = $i-3){
    echo "<br>Numero; $i";
}
?>
