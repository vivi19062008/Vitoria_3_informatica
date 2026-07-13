<?php
mymessage();
echo "<br><br>";
function mymessage()
{
    echo "Hello World";
};


function familyName($name){
echo "$name Freitas, <br>";
};

echo "somente os nomes <br> ";
familyName("Joao de");
familyName("Pedro de");
familyName("Maria de");
familyName("Ricardo de");
echo "<br>";

function familynameborn($name, $year){
    echo "$name Freitas, nascido em $year <br>";
}

echo "nomes com o ano de nasciento <br>";
familynameborn("Joao de", 2004);
familynameborn("Vitoria de", 2008);
familynameborn("Simone de", 1985);
familynameborn("Ricardo de", 1976);
echo "<br>";

function idade($idade)
{
    if ($idade < 12) {
        echo "voce tem $idade anos. Ainda é criança";
    } elseif ($idade <= 19){
        echo "voce tem $idade anos e é adolescente";
    } elseif ($idade <= 60){
        echo "voce tem $idade anos e é adulto";
    } else {
        echo "voce tem $idade anos e ja é idoso";
    }
}

idade(18);