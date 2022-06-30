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
                    <li><a href="home.php">SAIR</a></li>
                    <img class="images/atleta4" src="images/atleta9.png">
                  
                </ul>
            </nav>
        </div>
    </header><br><br>
  <p>Email e senha não encontrados</p>


<?php
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ENCODED);
$teste = filter_input(INPUT_GET, 'TESTE', FILTER_SANITIZE_SPECIAL_CHARS);


$result_usuario = "SELECT id, nome, email FROM usuarios WHERE email='". $email ."' and senha='" . $senha . "' ";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
    
    while($row = mysqli_fetch_assoc($resultado_usuario)){   
        setcookie ('id', $row['id']);
        setcookie ('nome', $row['nome']);
    }
    setcookie('email', $email);
    header("Location: menu.php");
}
else
{
    
 
    echo "O E-mail e a senha não foram encontrados na base de dados ";
}
?>




