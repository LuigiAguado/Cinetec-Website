<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="CSS/Stylecinetecccc.css">
	<title></title>
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
        <div id="linha-horizontal"></div>
    <?php
        $nome=$_POST['nome'];
        $idade=$_POST['idade'];
        $ingresso=$_POST['ingresso'];
        $filmes=$_POST['filmes'];
        $linguagem=$_POST['linguagem'];
        $pipoca=$_POST['pipoca'];
        $refrigerante=$_POST['refrigerante'];
        $chocolate=$_POST['chocolate'];
        $combo=$_POST['combo'];
    ?>
    <div class="resultados">
    <br><br><br>
    <h2>Dados do pedido</h2>
    <br><br>
    <h3>Nome:</h3> <?php echo $nome; ?>
    <h3>Idade:</h3> <?php echo $idade; ?>
    <h3>Ingresso:</h3> <?php echo $ingresso; ?>
    <h3>Filme:</h3> <?php echo $filmes; ?>
    <h3>Linguagem:</h3> <?php echo $linguagem; ?>
    <h3>Pipoca:</h3> <?php echo $pipoca; ?>
    <h3>Refrigerante:</h3> <?php echo $refrigerante; ?>
    <h3>Chocolate:</h3> <?php echo $chocolate; ?>
    <h3>Combo:</h3> <?php echo $combo; ?>
    </div>
    <div class="botaofilme">
        <a href="carrinho.php" class="botaodofilme">Confirmar Compra</a>
    </div>
    <br><br><br><br><br><br><br><br>
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