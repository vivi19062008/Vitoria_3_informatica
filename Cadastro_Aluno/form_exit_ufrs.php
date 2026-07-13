<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "aula_de_wordpress";

@$name = $_REQUEST [ "name"];
@$regAluno = $_REQUEST ["regAluno"];
@$email = $_REQUEST ["email"];
@$type = $_REQUEST ["kind"];
@$phone = $_REQUEST ["cellphone"];

try {
    $con = new mysqli("localhost", "root", "", "aula_de_wordpress");
    $con->set_charset("utf8mb4");

    $sql = "INSERT INTO cadastroalunos (regAluno, nome, email, type ,celular) 
    VALUES ('$regAluno', '$name', '$email', '$type', '$phone')";
    $con->query($sql);

    echo "inserido com sucesso";
}catch (mysqli_sql_exception $e){
    echo "Erro ao inserir no banco de dados: " . $e->getMessage();
} finally {
    $con->close();
}
?>





