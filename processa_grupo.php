<?php

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
                    <li><a href="menu.php">SAIR</a></li>
                     <img class="images/atleta4" src="images/atleta9.png">    
                </ul>
            </nav>
        </div>
    </header>
    <head>
        <br><br> <p>Grupo criado com sucesso</p> 
    </head>
<body><br><br>
		

<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$lider = filter_input(INPUT_POST, 'lider', FILTER_SANITIZE_EMAIL);
$telefone_lider = filter_input(INPUT_POST, 'telefone_lider', FILTER_SANITIZE_NUMBER_INT);
$local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_ADD_SLASHES);
$data = date('Y-m-d H:i:s');
$modalidade = filter_input(INPUT_POST, 'modalidade', FILTER_SANITIZE_SPECIAL_CHARS);
$participantes = filter_input(INPUT_POST, 'participantes', FILTER_SANITIZE_SPECIAL_CHARS);
$duracao = filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_ADD_SLASHES);


echo "nome: $nome <br>";
echo "lider: $lider <br>";
echo "telefone_lider: $telefone_lider <br>";
echo "local: $local <br>";
echo "data: $data <br>";
echo "modalidade: $modalidade <br>";
echo "participantes: $participantes <br>";
echo "duracao: $duracao <br>";


$result_grupo = "INSERT INTO grupos (nome, lider, telefone_lider, local, data, modalidade, participantes, duracao) VALUES('$nome', '$lider','$telefone_lider', '$local', '$data', '$modalidade', '$participantes','$duracao')";
$resultado_grupo = mysqli_query($conn, $result_grupo);

?>
