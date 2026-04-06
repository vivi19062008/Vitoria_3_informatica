<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "aula_de_wordpress";

$connect = mysqli_connect("localhost", "root", "", "aula_de_wordpress");

if ($connect->connect_error) {
    echo "erro ao se cadastrar : " . $connect->connect_error;
}
else {
    echo "conectado com sucesso";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>cadastro do Aluno</title>
    <BODY>

    <form action="tabela-do-cadastro.php" method="post">

        <label for="name" >seu name:</label>
        <input type="text" id="name" name="name" value="Vitoria" class="form-control" aria-describedby="passwordHelpBlock" style="margin: 20px"><br>

        <label for="name">seu email:</label>
        <input type="text" id="email" name="email" value="email" class="form-control" aria-describedby="passwordHelpBlock" style="margin: 20px"><br>

        <label for="name">seu numero de celular:</label>
        <input type="text" id="celular" name="celular" value="celular" class="form-control" aria-describedby="passwordHelpBlock" style="margin: 20px"><br>

        <label for="name">seu cadastro:</label>
        <input type="text" id="cadastro" name="cadastro do aluno" value="cadastro" class="form-control" aria-describedby="passwordHelpBlock" style="margin: 20px"><br>

        <label for="name">seu registro de aluno:</label>
        <input type="text" id="registro" name="registro do aluno" value="registro do aluno" class="form-control" aria-describedby="passwordHelpBlock" style="margin: 20px"><br>

        <input type="submit" value="Submit" style="margin: 20px">
    </form>

    </BODY>
</html>




