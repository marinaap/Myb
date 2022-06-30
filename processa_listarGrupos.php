<?php
session_start();
include_once("conexao.php");
?>

  <!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta charset="utf-8">
        <title>Processa Listar_grupo</title>		
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
                    <li><a href="menu.php">SAIR</a></li>
                     <img class="images/atleta4" src="images/atleta9.png">    
                </ul>
            </nav>
        </div>
    </header>
    <head>
        <br><br> <p>Agora você já faz parte desse grupo</p>
    </head>
<body><br><br>

<?php
$id_grupo = filter_input(INPUT_GET, 'id_grupo', FILTER_SANITIZE_EMAIL);
$nome_grupo = filter_input(INPUT_GET, 'nome_grupo', FILTER_SANITIZE_EMAIL);
$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_EMAIL);
$nome_usuario = filter_input(INPUT_GET, 'nome_usuario', FILTER_SANITIZE_EMAIL);
$modalidade = filter_input(INPUT_GET, 'modalidade', FILTER_SANITIZE_ENCODED);
$participantes = filter_input(INPUT_GET, 'participantes', FILTER_SANITIZE_ENCODED);


echo"PARABÉNS!!!<br><br>";
echo "id_grupo: $_GET[id] <br>";
echo "nome_grupo: $_GET[nome] <br>";
echo "id_usuario: $_COOKIE[id] <br>";
echo "nome_usuario: $_COOKIE[nome] <br>";
echo "modalidade: $_GET[modalidade] <br>";
echo "n_participantes: $_GET[participantes] <br>";
echo "local: $_GET[local] <br>";



?>