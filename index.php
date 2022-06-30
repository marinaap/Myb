<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>CADASTRAR</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;400&family=Raleway:wght@500&family=Tangerine:wght@700&display=swap" rel="stylesheet">
</head>
	<body>
        <body>
    <header>
        <div class="caixa">
            <h1><img src="images/cabeçalho.png"></h1>
            <nav>
                <ul>
                    <li><a href="login.php">VOLTAR</a></li>
                    <img class="images/atleta4" src="images/atleta9.png">
                </ul>
            </nav>
        </div>
    </header>
    <main><BR><br>
		<p>Cadastro de Usuário</p> 
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<form method="POST" action="processa_index.php">
			<label>Nome</label>
			<input class="input-login" type="text" name="nome" placeholder="Digite o nome e o sobrenome"><br><br>

			<label>telefone</label>
			<input class="input-login" type="number" name="telefone" placeholder="( ) ____ ____"><br><br>
			
			<label>E-mail</label>
			<input class="input-login" type="text" name="email" placeholder="Digite o seu e-mail"><br><br>
		
			
			<label>Senha</label>
			<input class="input-login" type="password" name="senha" placeholder="Digite a senha"><br><br>
			<label> Confirmar Senha</label>
			<input class="input-login" type="password" name="senha" placeholder="Digite a senha"><br><br>

			<legend>Sexo</legend>
			<label for="fem"><input type="radio"  id="fem" name="sexo" value="fem">Feminino</label>
            <label for="masc"><input type="radio"  id="masc" name="sexo" value="masc">Masculino</label> 
			
			<input type="submit" class="input-entrar" name="btnCadastrar" value="Cadastrar"><br><br>
			
		
		</form>
		<footer>
			<img src="images/atleta6.png">
			<p class="copyright">&copy; Copyright Myb 2022</p>

    	</footer>
	</body>
</html>
		
	





