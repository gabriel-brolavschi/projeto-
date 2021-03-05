<?php 

include_once("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuario (nome,email,senha) values ('$nome','$email','$senha')";
$salvar = mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>