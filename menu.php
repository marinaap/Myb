<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta charset="utf-8">
        <title>CRUD - Criar Grupo</title>		
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="menu.css">
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
                    <li><a href="home.php">SAIR</a></li>
                     <img class="images/atleta4" src="images/atleta9.png">  
                </ul><br><br>
                <div class="cookie">
                <?php
                echo 'ID: ';
                echo  $_COOKIE['id'];
                ?>
                </div>
                <div class="cookie_email">
                    <?php
                     echo $_COOKIE['email']
                    ?>
                </div>
            </nav>
        </div>
    </header>
<body><br><br>          

        <main>

            <ul class="produtos">
                <li>
                    <h2></h2>
                    <a href="listar_grupos.php"><h2>Listar grupos</h2></a> 
                    <img class="images/grupo" src="images/grup.png">
                     <p class="produto-descricao"> Veja quais grupos ja estão cadastrados</p>
                </li>
                   

                <li>
                    
                     <a href="grupos.php"><h2>Cadastrar grupos</h2></a> 
                     <img class="images/grupo" src="images/gruposs.png">
                    <p class="produto-descricao">Crie um novo grupo a qualquer momento</p>
                  
                </li>

                <li>
                    <a href="listar.php"><h2>Listar Usuários</h2></a> 
                    <img class="images/atleta" src="images/listarU.png">
                    <p class="produto-descricao">Veja quais usuários já estão cadastrados</p>   
                </li>
               
            </ul>
        </main>
        <footer>
        <img src="images/atleta6.png">
        <p class="copyright">&copy; Copyright Myb 2022</p>
        
    </footer>
