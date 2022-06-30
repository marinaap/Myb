<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta charset="utf-8">
        <title>CRUD - Criar Grupo</title>		
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
                    <li><a href="menu.php">VOLTAR</a></li>
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
		
		
            <p>CRIAR GRUPO</p>
       
        <main>
                
                    <form method="POST" action="processa_grupo.php">

                    <label>Nome </label>
                    <input class="input-login" type="text" name="nome" placeholder="Nome do grupo"><br><br>

                    <label>Líder: </label>
                    <input class="input-login"  type="number" name="lider" placeholder=" Id do Líder "><br><br>

                    <label>telefone: </label>
                    <input class="input-login"  type="number" name="telefone" placeholder=" (31) ____ ____ "><br><br>
                   
                    <label>Local do Encontro </label>
                    <input class="input-login" type="local" name="local" placeholder="Rua,Av. Praça, Quadra"><br><br><br>
                            
                    <section class="localizacao">
                        <h1>Localize quadras e campos pelo mapa.</h1>
                        <h1>Clique em ver mapa ampliado, e no campo de busca digite quadras de esportes ou campos de futebol.</h1><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240097.00529598765!2d-44.10413801373972!3d-19.902661482129226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa690cacacf2c33%3A0x5b35795e3ad23997!2sBelo%20Horizonte%2C%20MG!5e0!3m2!1spt-BR!2sbr!4v1653845868771!5m2!1spt-BR!2sbr" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </section><br><br>

                        
                    <fieldset>
                     <legend>Selecione a modalidade</legend>
                        <label for="modalidade"></label>
                            <!-- fieldset substitui uma div em um formulário> -->
                                <label for="vf"><input type="radio"  id="vf" name="modalidade" value="Volei feminino">Vôlei feminino</label>
                                <label for="vm"><input type="radio"  id="vm" name="modalidade" value="Volei Masculino">Vôlei Masculino</label>                                
                                <label for="ff"><input type="radio"  id="ff" name="modalidade" value="Futebol feminino">Futebol feminino</label>                           
                                <label for="fm"><input type="radio"  id="fm" name="modalidade" value="Futebol Masculino" checked>Futebol Masculino</label>
                                <br><br> 
                    </fieldset>

                                <legend>Marcar data e hora</legend>
                                    <input type="datetime-local" id="data" class="input-login"  min="07:00" max="22:00" required><br><br><br>

                               <fieldset>
                                    <legend>Duração</legend>    
                                    <label class="duracao" for="1"><input type="checkbox"  id="1" name="duracao" value="1">1h</label>
                                    <label class="duracao" for="2"><input type="checkbox"  id="2" name="duracao" value="2"checked>2h</label>                                             
                               </fieldset>

                                <br><br> 
                                <!--  <legend>Link do grupo no whatsApp</legend>
                                  <input type="link" id="link" class="link" name="link" value=""></input>
 -->

                                    <a href="grupo_cadastrado.php"><input class="input-entrar" type="submit" value="Cadastrar"></a>
                            
        
           
                <footer>
                    <img src="images/atleta6.png">
                    <p class="copyright">&copy; Copyright Myb 2022</p>
                    
                </footer>
        </main>
   
</html>

