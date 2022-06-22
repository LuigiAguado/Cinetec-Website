<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cinetec - Login</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="CSS/Stylecinetecc.css">
	</head>
	<body>
	<nav id="menu">
        <ul>
            <img src="IMG/logo.png">
            <div>
            <li><a href="./index.html">Home</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="./ProdutosIMG.php">Produtos</a></li>
            <li><a href="./comprar.php">Comprar</a></li>
            </div>
            <div class="menucompra">
            <li><a href="./login.php">Login</a></li>
            </div>
        </ul>
    </nav>
	<br><br><br><br><br><br><br><br><br>
	<div class="colocaremordem">
		<div class="container">
			<div class="form-signin" style="background:#fff ; border-radius: 5px;padding: 7px; max-width: 500px;">
				<h2 class="text-center">CINETEC</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
				<form method="POST" action="valida.php">
					<!--<label>Usuário</label>-->
					<input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control"><br>
					
					<!--<label>Senha</label>-->
					<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>
					
					<input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block">

					<div class="row text-center" style="margin-top: 0px;"> 
						<h4>Você ainda não possui uma conta?</h4>
						<a class="criegra" href="cadastrar.php">Crie grátis</a>
					</div>
				</form>
			</div>
		</div>		
		</div>	
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<div id="linha-horizontal"></div>
<footer>
    <a class="voltartopo" href="#menu">Voltar ao Topo</a>
    <br><br>
    <p id="date"></p>
    <script src="JS/JSTempo.js"></script>
    <p>Developed by Luigi Zaneli Aguado - Beatriz Gouveia Alves - Gabriel Vitor da Silva Esperença</p>
</footer>
	</body>
</html>