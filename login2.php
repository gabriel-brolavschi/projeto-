
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
        <h1>LOGIN</h1>
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

        <form method="post" action ="loginprocessa.php">
            <div class="alerta2">
                Login ou Senha incorreto(a).
            </div>
            <label for="name">
                <span>E-MAIL</span>
                <input type="text" id="email" name="email">
            </label>
            <label for="senha">
                <span>SENHA</span>
                <input type="password" id="senha" name="senha">
            </label>
            <input type="submit" value="Entrar"> <a href="index.php"><input type="button" value="Cadastrar"></a>
        </form> 
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