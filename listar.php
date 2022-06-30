<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">		
		<title>Listar Usuarios</title>
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
                <!-- <ul><li><a href="menu.php">SAIR</a></li> -->
                    <li><a href="menu.php">VOLTAR</a></li>
                    <img class="images/atleta4" src="images/atleta9.png">
                </ul><br><br>
				   <div class="cookie2">
                <?php
                echo 'ID: ';
                echo  $_COOKIE['id'];
                ?>
                </div>
                <div class="cookie_email2">
                    <?php
                     echo $_COOKIE['email']
                    ?>
                </div>
            </nav>
        </div>
    </header>
	 <main><BR><br>
<body><br><br>
		<p>LISTAR USUARIOS<br><br><br></p>

		

		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 10;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM usuarios LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		//$achou = false;
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "ID: " . $row_usuario['id'] . "<br>";
			echo "Nome: " . $row_usuario['nome'] . "<br>";
			echo "E-mail: " . $row_usuario['email'] . "<br><hr>";
			//$achou = true;

			
		}

		
		
	/* 	if($achou == true)
		{
			header("Location:/grupos.php");
		}
		Else
		{
			echo "usuario não cadastrado";
		}
		 */

		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM usuarios";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='listar.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='listar.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='listar.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='listar.php?pagina=$quantidade_pg'>Ultima</a>";
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