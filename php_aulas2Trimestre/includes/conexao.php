<?php

$conn = mysqli_connect("localhost", "root", "", "aula_de_wordpress");

if (!$conn ->connect_error) {
    die("falha na conexao: " . $conn -> connect_error);
}else{
    echo "tudo okay";
}