<?php
    session_start();
    include_once("conexao.php");
    include_once("busca.php");

    $pesquisar = $_POST['pesquisar'];
	$result_cursos = "SELECT * FROM usuarios WHERE nome LIKE '%$pesquisar%' LIMIT 1";
	$resultado_nome = mysqli_query($conn, $result_cursos);  
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="form-signin" style="background:#fff ;">
            <form method="POST" action="">
                <h3>Pesquisar Usuarios</h3>
                <input type="text" name="pesquisar" placeholder="Pesquisar">
	            <input type="submit" value="Enviar">
        <br><br>
        <?php
           
           while($dados = mysqli_fetch_array($resultado_nome)){
            echo "<b>Nome do usuario: ".$dados['nome']."<br></b>";
        }
            ?>   
    </form>
			</div>
				</div>			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>