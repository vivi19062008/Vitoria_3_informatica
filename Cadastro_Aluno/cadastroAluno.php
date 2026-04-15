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

@$name = $_REQUEST [ "name"];
@$regAluno  = $_REQUEST ["regAluno"];
@$email = $_REQUEST ["email"];
@$phone = $_REQUEST ["cellphone"];

$insert = "INSERT INTO cadastroalunos (regAluno, nome, email, celular)
VALUES ($name, $regAluno, $email, $phone)";

if (mysqli_query($connect, $insert) === TRUE) {
    echo "inserido com sucesso";
} else {

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

<?php
try {
    $con = new msqli("localhost", "root", "", "aula_de_wordpress");
    $con->set_charset("utf8mb4");

    $sql = "INSERT INTO cadastroalunos (regAluno, nome, email, celular) VALUES ('$name', '$regAluno', '$email', '$phone')";
    $con->query($sql);

    echo "inserido com sucesso";
}catch (mysqli_sql_exception $e){
    echo "Erro ao inserir: " . $e->getMessage();
}
?>



<?php
//$nome = $_REQUEST [ "name" ];
//$email = $_REQUEST ["email" ];
//$celular = $_REQUEST ["celular" ];
//$password = $_REQUEST ["password" ];
//$type = $_REQUEST ["kind" ];
//?>
<!--<!DOCTYPE html>-->
<!--</html>-->
<!--<head>-->
<!--    -->
<!--</head>-->
<!---->
<!--<body>-->
<!---->
<!--</body>-->
<!--</html>-->


