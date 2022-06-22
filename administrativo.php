
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinetec</title>
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
            <li><a><?php
session_start();
if(!empty($_SESSION['id'])){
	echo "<a href='usuarios.php'>".$_SESSION['nome']."</a>";
	echo "<a href='sair.php'>Sair</a>";
	
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
	header("Location: login.php");	
}
?></a></li>
            </div>
        </ul>
    </nav>
    <main class="main">
        <img src="IMG/pipoca.png">
        <h1>Venha agora assistir filmes!</h1>
        <img src="IMG/refri.png">
    </main>
    <div id="linha-horizontal"></div>
    <div id="filmes" class="mainfilmes">
        <div>
        <h2> Filmes em cartaz! </h2>
        <span>Venha agora mesmo assistir os filmes que estão estreiando na Cinetec</span>
        </div>
        <br>
        <div class="imgfilmes">
            <img src="IMG/slide1.png">
            <span>Turma da Mônica - Lições</span>
        </div>
        <div class="imgfilmes">
            <img src="IMG/slide2.png">
            <span>Duna</span>
        </div>
        <div class="imgfilmes">
            <img src="IMG/slide3.png">
            <span>O Hobbit - A desolação de Smaug</span>
        </div>
        <div class="imgfilmes">
            <img src="IMG/slide4.png">
            <span>Thor</span>
        </div>
        <div class="imgfilmes">
            <img src="IMG/slide5.png">
            <span>Kong - A ilha da caveira</span>
        </div>
        <div class="botaofilme">
            <a href="comprar.php" class="botaodofilme">Comprar Ingresso</a>
        </div>       
    </div>
    <div id="linha-horizontal"></div>
    <div id="sobre" class="mainsobre">
        <div>
        <h2>Sobre a Cinetec</h2>
    </div>
    <div>
        <h3>A Cinetec é uma empresa de cinema,
             que proporciona diversão e alegria a todos que vem nos prestigiar.
            Nossas salas de cinema são todas equipadas com os melhores e mais novos
        equipamentos para a melhor experiência.</h3>
    </div>
    <div class="imgsala">
        <img src="IMG/saladecinema.jpg">
    </div>
</div>
    <div id="sobre" class="mainsobre">
        <div>
        <h2>Comentários sobre a Cinetec</h2>
    </div>
    <div>
        <h3>Venha saber o que os usuários estão falando sobre a Cinetech</h3>
    </div>
    <div class="botaofilme">
        <a href="comentarios.php" class="botaodofilme">Ver comentários</a>
    </div>
</div>
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