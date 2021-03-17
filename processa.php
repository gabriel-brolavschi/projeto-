<?php 

include_once("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuarios_tatuadores (nome,email,senha) values ('$nome','$email','$senha')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

        
            if($linhas != 1){
                header('Location: index2.php');
            }else{
                header('Location: perfil.php');
            }

            ?>

        