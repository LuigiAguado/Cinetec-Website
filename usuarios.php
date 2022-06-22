<?php
	include 'conexao.php'; 
	session_start();
?>
<html>
	<head>
		<title>Usuarios CINETEC</title>
		<link rel="stylesheet" href="css/Stylecinetec.css">
	</head>
	<body>
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
		<div style="background:rgb(62, 62, 65)">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="" style="padding-top: ;">
			<div class="form-signin" style="background:#fff; padding-top: 60px;border-radius: 5px;padding: 7px; max-width: 500px;" >
				<table align=center border=1 width=100%>
				<tr>
					<td align=center colspan=5>Todos Usuarios</td>
				</tr>
					<td align="center">
						<b>ID</b>
					</td>
					<td><b>Nome</b></td>
					<td align="center" colspan="2">
						<b></b></a>
					</td>
				</tr>
					<?php
						// Fazendo uma consulta SQL
						$sql = "SELECT * 
								FROM login 
								ORDER BY nome";
						$tabela = mysqli_query($conn,$sql);
						while ($linha = mysqli_fetch_array($tabela))
						{
					?>
				<tr>
					<td align="center">
						<?php echo $linha['id']; ?>
					</td>
					<td>
						<?php echo $linha['nome']; ?>
					</td>

					<td width=50 align="center">
						<a href="manter.php?acao=Alterar&id=<?php echo $linha['id']; ?>" >
							<img src="IMG/alterar.png" border="0">
						</a>
					</td>
					<td width=50 align="center">
						<a href="manter.php?acao=Excluir&id=<?php echo $linha['id']; ?>">
							<img src="IMG/excluir.png" border="0">
						</a>
					</td>
				</tr>
			<?php
			}
			?>
				</table>
			</div>
		</div>
			<div style="padding-top: 240px">
			<br><br><br><br><br><br><br><br><br><br><br>
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