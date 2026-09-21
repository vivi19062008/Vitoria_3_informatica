<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $genero = $_POST['genero'];


    $valnome = "/^[A-Za-zÀ-ÿ]([A-Za-zÀ-ÿ])+?/";
        if (preg_match($valnome, $nome)) {
            echo "Nome válido!";
        } else {
            echo "Nome inválido!";
        }
    $valemail = "/^[a-zA-Z0-9._]+@[a-zA-Z0-9._]+\.[a-zA-Z]{2,3}$/";
        if (preg_match($valemail, $email)) {
            echo "E-mail válido!";
        } else {
            echo "E-mail inválido!";
        }
    $valetelefone = "/^[0-9]{10}$/";
        if (preg_match($valetelefone, $telefone)) {
            echo "Telefone válido!";
        } else {
            echo "Telefone inválido!";
        }
    $valcpf = "/^\d{3}.\d{3}.\d{3}-\d{2}$/";
        if (preg_match($valcpf, $cpf)) {
            echo "CPF válido!";
        } else {
            echo "CPF inválido!";
        }
    $valgenero = "/^[a-zA-Z]+$/";
        if (preg_match($valgenero, $genero)) {
            echo "Seu genero é feminino";
        } else {
            echo "Seu genero é masculino";
        }

    ?>

<!DOCTYPE html>
<html lang="en"
      <title>title</title>
<head>
</head>
<body>
    <h1>dados digitados</h1>
    <?php
    if (preg_match($valnome, $nome)) {
        echo "<h3>Nome: $nome</h3>";
    }
    ?>
</body>


