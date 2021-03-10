<?php 

include_once("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios_tatuadores WHERE email = '$email' AND senha = '$senha'";
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
        <?php 
        
            if($linhas == 1){
                print "encontramos";
            }else{
                print "deu ruim";
            }

        ?>
        
    </section>
    <section class="images-container">
        <div class="image">
            <img src="logos/tatoo_login.png" alt="tatoo">
        <div class="circle"></div>
        </div>
    </section>
    </main>
</body>
</html>