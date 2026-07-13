<?php
//crie uma função que receba um numero e duas unidades de temperatura
//a primeira unidade é a atual
//a segunda é a qual se quer converter
//trabalhar com kelvin, celcius e fahrenheit e réaumur. pesquise as formulas de conversão

function parametros ($temp, $unidade1, $unidade2)
{
    if ($unidade1 == $unidade2) {
        echo "essas unidades de temperatura tem a mesma medida amigo";
    }else {
                if ($unidade1 == "C" && $unidade2 == "F") {
                    $resultado = ($temp * 9/5) + 32;
                    echo "SUA TEMPERATURA DE CELCIUS PARA FAHRENHEIT É $resultado  ";
                }
                elseif ($unidade1 == "C" && $unidade2 == "K") {
                        $resultado =  $temp + 273;
                        echo "sua temperatura de Celcius para Kelvin é $resultado";
                    }

                elseif ($unidade1 == "C" && $unidade2 == "B") {
                        $resultado = $temp * 0.8;
                        echo "sua temperatura de Celcius para B é $resultado";
                    }
            }
}

parametros(23,"C", "K");
echo "<br>";
echo "============================================================<br>";
function parametros2 ($temp, $unidade1, $unidade2)
{
    if ($unidade1 == $unidade2) {
        echo "essas unidades de temperatura tem a mesma medida amigo";
    }else {
        if ($unidade1 == "C" && $unidade2 == "F") {
            $resultado = ($temp * 9/5) + 32;
            echo "SUA TEMPERATURA DE CELCIUS PARA FAHRENHEIT É $resultado";
        }
        elseif ($unidade1 == "C" && $unidade2 == "K") {
            $resultado =  $temp + 273;
            echo "sua temperatura de Celcius para Kelvin é $resultado";
        }

        elseif ($unidade1 == "C" && $unidade2 == "B") {
            $resultado = $temp * 0.8;
            echo "sua temperatura de Celcius para B é $resultado";
        }
    }
}

parametros2(0,"C", "F");
echo "<br>";
echo "============================================================<br>";
function parametros3 ($temp, $unidade1, $unidade2)
{
    if ($unidade1 == $unidade2) {
        echo "essas unidades de temperatura tem a mesma medida amigo";
    }else {
        if ($unidade1 == "C" && $unidade2 == "F") {
            $resultado = ($temp * 9/5) + 32;
            echo "SUA TEMPERATURA DE CELCIUS PARA FAHRENHEIT É $resultado";
        }
        elseif ($unidade1 == "C" && $unidade2 == "K") {
            $resultado =  $temp + 273;
            echo "sua temperatura de Celcius para Kelvin é $resultado";
        }

        elseif ($unidade1 == "C" && $unidade2 == "B") {
            $resultado = $temp * 0.8;
            echo "sua temperatura de Celcius para B é $resultado";
        }
    }
}

parametros3(2,"C", "B");
echo "<br>";
echo "============================================================<br>";


