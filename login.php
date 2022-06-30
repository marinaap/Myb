 <?php
session_start();
include_once("conexao.php");
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Myb</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;400&family=Raleway:wght@500&family=Tangerine:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="caixa">
            <h1><img src="images/cabeçalho.png"></h1>
            <nav>
                
                
                <ul>
                    <li><a href="home.php">VOLTAR</a></li>
                    <img class="images/atleta4" src="images/atleta9.png">
                  
                </ul>
            </nav>
        </div>
    </header>
    <main>
        	
        <form action="processa_login.php" method="POST">
            <p>LOGIN</p><br><br>
           
            <label for="email">E-mail</label>
            <input name="email" class="input-login" type="text" id="email" required>
            <label for="senha">Senha</label>
            <input name="senha" class="input-login" type="password" id="senha">
            <a href="recupera_senha.php">Esqueceu a senha?</a>
          
            <input type="submit" class="input-entrar" name="btnLogin" value="Logar"><br><br>
            <!-- <a href="processa_login.php">ENTRAR</a> -->
          
        </form>
    </main>

    <footer>
        <img src="images/atleta6.png">
        <p class="copyright">&copy; Copyright Myb 2022</p>

    </footer>

</body>


