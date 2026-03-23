<?php
$idade1 = 18;

if($idade1 >= 18){
    echo "Voce é maior de idade!<br>";
}

echo "<br>_______________________________________________";
echo "<br>";

$idade2 = 18;

if($idade2 >= 18){
    echo "Voce é maior de idade!<br>";
}else {
    echo "voce nao pode dirigir criança otaria<br>";
}

echo "<br>_______________________________________________";
echo "<br>";

$nota = 20;

if ($nota >= 20){
    echo "otima nota!!<br>";
} elseif ($nota >= 15){
    echo "media ne<br>";
} else {
    echo "reprovado!!<br>";
}

echo "<br>_______________________________________________";
echo "<br>";

$idade3 = 15;
$item_autorização = true;

if ($idade3 >= 18  && $item_autorização){
    echo "entrada liberada!!<br>";
}elseif ($idade3 >= 18 && $item_autorização){
    echo "entrada n liberada, chama teu pai!!<br>";
}
else{
    echo "entrada negda<br>";
}

echo "<br>_______________________________________________";
echo "<br>";

$dia = 6;
switch ($dia){
    case 1:
        echo "domingo";
        break;
        case 2:
            echo "segunda-feira";
            break;
            case 3:
                echo "terca-feira";
                break;
                case 4:
                    echo "quarta-feira";
                    break;
                    case 5:
                        echo "quinta-feira";
                        break;
                        case 6:
                            echo "sexta-feira";
                            break;
                            case 7:
                                echo "sabado";
                                break;
                                default:
                                    echo "v4lor 1nvalid0";
}

echo "<br>_______________________________________________";
echo "<br>";

$diaSemana = 1;

switch ($diaSemana){
    case 1:
    case 2:
        echo "fim de semana";
        break;
        case 3:
            case 4:
                case 5:
                    case 6:
            echo "dia utial seja util";
            break;
            default;
            echo "dia invalido";
}

echo "<br>_______________________________________________";
echo "<br>";

$contador = 1;

while ($contador <= 10){
    echo "contador: " , $contador;
    $contador++;
}

echo "<br>";
for ($i = 0; $i <= 10; $i++){
    echo "valor: " , $i;
}
echo "<br>";

$cores = ["vermelho" , "azul" , "verde"];

foreach ($cores as $cor){
    echo "cor: $cor<br>";
}
echo "==============================================================<br>";
$nome = vitoria;
if ($nome == "Vitoria"){
    echo "bem vindo $nome";

    $saldo_inicial = 18000;

    if( $saldo_inicial >= 18000){
        echo "esse é seu saldo<br>";
    }


