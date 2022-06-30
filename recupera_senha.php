

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
                    <li><a href="index.php">SAIR</a></li>
                    <img class="images/atleta4" src="images/atleta4.png">
                </ul>
            </nav>
        </div>
    </header><br><br>

    <p>RECUPERAR SENHA</p>
    <main>
        <form>
            <label for="email">Será necessário realizar um novo cadastro</label>
            <form method="POST" action="processa.php">
			<label>Nome: </label>
			<input class="input-login" type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label>E-mail: </label>
			<input class="input-login" type="email" name="email" placeholder="Digite o seu  e-mail"><br><br>

            <label>Senha: </label>
			<input class="input-login" type="password" name="senha" placeholder="Digite a senha"><br><br>

            <br><br>
			
		<a href="login.php"><input class="input-entrar" type="submit" value="Cadastrar"></a>
		</form>
          
    </main>
    <footer>
        <img src="images/atleta6.png">
        <p class="copyright">&copy; Copyright Myb 2022</p>

    </footer>
</body>