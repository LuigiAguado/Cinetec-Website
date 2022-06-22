<?php
	include 'conexao.php'; 
	session_start();
	$acao=$_GET["acao"];

	if ($acao == "Incluir")
	{
		$id=0;
		$nome="";
		$fone="";
	}
	else
	{
		$id=$_GET["id"];
		
		$sql = "SELECT * 
				FROM login 
				WHERE id=".$id;
		$tabela = mysqli_query($conn,$sql);
		$linha = mysqli_fetch_array($tabela);
		
		$nome=$linha['nome'];
		
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="CSS/Stylecinetecc.css">
	</head>
	<body>
	<div style="padding-top: -200px; ">
	<nav id="menu">
        <ul>
            <img src="IMG/logo.png">
            <div>
            <li><a href="./cinetec.html">Home</a></li>
            <li><a href="./cinetec.html#sobre">Sobre</a></li>
            <li><a href="./ProdutosIMG.php">Produtos</a></li>
            <li><a href="./comprar.php">Comprar</a></li>
            </div>
            <div class="menucompra">
            <li><a href="./login.php">Login</a></li>
            </div>
        </ul>
    </nav>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="container">
			<div class="form-signin" style="background:#fff ;border-radius: 5px;padding: 7px; max-width: 200px;">	
			<form name="dados" method="post" action="manterOk.php?id=<?php echo $id; ?>">
				<p>
					Nome: <input type="text" name="nome" value="<?php echo $nome; ?>"style="background-color: rgb(161, 38, 38); color: #fff; text-decoration: none; border-radius: 10px; padding: 10px";>
				</p>
				<p>
					<input type="submit" name="acao" value="<?php echo $acao; ?>" style="background-color: rgb(161, 38, 38); color: #fff; text-decoration: none; border-radius: 10px; padding: 10px";>
					<input type="submit" name="acao" value="Cancelar" style="background-color: rgb(161, 38, 38); color: #fff; text-decoration: none; border-radius: 10px; padding: 10px";>
				</p>
			</form>
			</div>
		</div>	
		<div style="padding-top: 280px"><br><br><br><br><br>
				<div id="linha-horizontal"></div>
					
					<footer >
						<a class="voltartopo" href="#menu">Voltar ao Topo</a>
						<br><br>
						<p id="date"></p>
						<script src="JS/JSTempo.js"></script>
						<p>Developed by Luigi Zaneli Aguado - Beatriz Gouveia Alves - Gabriel Vitor da Silva Esperença</p>
					</footer>
				</div>
	</body>
</html>
<?php
	mysqli_close($conn);
?>