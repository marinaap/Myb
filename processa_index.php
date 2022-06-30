<?php
session_start();
include_once("conexao.php");
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
                    <li><a href="home.php">SAIR</a></li>
                     <img class="images/atleta4" src="images/atleta9.png">    
                </ul>
            </nav>
        </div>
    </header>
    <head>
        <br><br> <p>Usuário cadastrado com sucesso</p>
    </head>
<body><br><br>


<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ENCODED);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);

echo"Usuário Cadastrado com sucesso<br><br>";
echo "nome: $nome <br>";
echo "telefone: $telefone <br>";
echo "E-mail: $email <br>";
echo "Senha: $senha <br>";
echo "sexo: $sexo <br>";

$result_usuario = "INSERT INTO usuarios (nome, telefone, email, created, senha, sexo) VALUES ( '$nome', '$telefone', '$email', NOW(), '$senha', '$sexo')";
$resultado_usuario = mysqli_query($conn, $result_usuario);


$btnCadastrar = filter_input(INPUT_POST, 'btnCadastrar', FILTER_SANITIZE_SPECIAL_CHARS);
if ($btnCadastrar){
	//include include_once 'conexão php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	    $erro = false;

		$result_usuario = "SELECT id FROM usuarios WHERE email = email";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este e-mail já está cadastrado";
		}
	}
    if(!$erro){
		//var_dump($dados);
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

		
		$resultado_usario = mysqli_query($conn, $result_usuario);
		if(mysqli_insert_id($conn)){
            echo "<script>
            alert('Usuario cadastrado com SUCESSO');
			
			window.Location.href='login.php';
		}else{
			$_SESSION[msg] = 'Erro ao cadastrar o usuário';


            </script>";
		}
	}
	


?>



		

 

 

