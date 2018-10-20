<?php
$connect = mysqli_connect("localhost", "root", "root", "bancohosp");
 
if (!$connect) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
//echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;

$nome  =   $_POST['nome'];
$email =   $_POST['email'];
$cpf   =   $_POST['cpf'];
$endereco = $_POST['endec'];
$senha =   $_POST['password'];

$sql = "INSERT INTO cadastro (nome,email,cpf,endereco,senha)
VALUES ('$nome','$email','$cpf','$endereco','$senha')";

if ($connect->query($sql) === TRUE) {
    echo "Cadastrado com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

mysqli_close($connect);

?>


