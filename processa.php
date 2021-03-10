<?php 

include_once("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuarios_tatuadores (nome,email,senha) values ('$nome','$email','$senha')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="main">
        <h1>CRIE SUA CONTA</h1>
        <div class="social-media">
            <a href="#">
                <img src="logos/google.png" alt="Google">
            </a>
            <a href="#">
                <img src="logos/instagram.png" alt="Instagram">
            </a>
        </div>

        <div class="alternative">
            <span>OU</span>
        </div>
        <?php 
        
            if($linhas != 1){
                print "cadastro NÃO efetuado. <br>Já existe um usuário com este email";
            }

        
            ?>

        <form method="post" action ="processa.php">
            <label for="name">
                <span>NOME</span>
                <input type="text" id="name" name="nome" required autofocus>
            </label>
            <label for="name">
                <span>E-MAIL</span>
                <input type="text" id="email" name="email" required>
            </label>
            <label for="senha">
                <span>SENHA</span>
                <input type="password" id="senha" name="senha" required>
            </label>

            <input type="submit" value="Inscreva-se">
        </form>
    </section>
    <section class="images-container">
        <div class="images">
            <img src="logos/tatoo.png" alt="tatoo">
        <div class="circle"></div>
        </div>
    </section>
    </main>
</body>
</html>