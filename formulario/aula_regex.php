<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form class="formulario">
        <h2>Cadastro</h2>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>

        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>

        <input type="radio" value="feminino" name="genero">feminino
        <input type="radio" value="não quero inoformar" name="genero">Não Informar <br>


        <button type="submit">me aperta</button>
    </form>
</div>

</body>
</html>
