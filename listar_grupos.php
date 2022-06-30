<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">		
		<title>GRUPOS</title>
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;400&family=Raleway:wght@500&family=Tangerine:wght@700&display=swap" rel="stylesheet">
		<!-- <script src="https://kit.fontawesome.com/" -->
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
	 <main><BR><br>
<body><br><br>
		<p> GRUPOS<br><br><br></p>

		<!-- <form method="POST" action="processa_listarGrupos.php"> -->
			<form method="POST" action="processa_listarGrupos.php">
				<input type="text" name="search" id="search" placeholder="Faça sua busca" required>
				<button type="submit" class="pgrupo" name="pesquisarGrupo" value="pesquisar">&#128269;</button><br><br>

				 <!-- <input type="submit" class="input-entrar" name="btnLogin" value="Logar"><br><br>
 -->
				<!-- <legend>Buscar por modalidade</legend>
                    <select class="select" id="">  <! cria uma seleção de várias opçoes>
                    <option value="">Vôlei feminino</option>
                    <option value="">Vôlei Masculino</option>
                    <option value="">Futebol feminino</option>
                    <option value="">Futebol Masculino</option> 
 -->
		

		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
			
		}
	
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 50;
		
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_grupos = "SELECT * FROM vw_resumo_grupos LIMIT $inicio, $qnt_result_pg";
		$resultado_grupos = mysqli_query($conn, $result_grupos);
		//$achou = false;
		while($row_grupo = mysqli_fetch_assoc($resultado_grupos)){
		 	echo "ID Grupo: " . $row_grupo['id_grupo'] . "<br>";
			echo "Nome Grupo: " . $row_grupo['nome'] . "<br>";
			echo "ID líder:" . $row_grupo['lider'] . "<br>";
			echo "Modalidade: " . $row_grupo['modalidade'] . "<br>" ;
			echo "Nº de Participantes: " . $row_grupo['participantes'] . "<br>";
			echo "Telefone do lider: " . $row_grupo['telefone_lider'] . "<br>" ; 
			echo "Local: " . $row_grupo['local'] .  "<br>" ; 
			echo $data = date('Y-m-d H:i:s')
			 . " <a href='processa_listarGrupos.php?id=".$row_grupo['id_grupo']."&nome=".$row_grupo['nome']."&lider=".$row_grupo['lider']."&nome_lider=".$row_grupo['nome_lider']."&telefone_lider=".$row_grupo['telefone_lider']."&local=".$row_grupo['local']."&modalidade=".$row_grupo['modalidade']."&participantes=".$row_grupo['participantes'].
			"'>Participar</a><hr>" ; 
			

		//Paginação - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM grupos";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

		//Limitar os link antes depois
		$max_links = 2;
		
		
		$soma_usuario =  "SELECT * grupos ";

		#echo "$pagina ";
		
		
		}
	
		echo "<a href='listar.php?pagina=1'>Primeira</a> ";
		echo "<a href='listar.php?pagina=$quantidade_pg'>Ultima</a>"."";

		
?>             
                    
		
	</main>	
	<footer>
        <img src="images/atleta6.png">
        <p class="copyright">&copy; Copyright Myb 2022</p>

    </footer>
	</body>
	
</html>
