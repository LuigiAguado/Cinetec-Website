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
        <form action="gravarqtxt.php" method="post">
        <br><br>
        <div class="titulocomprar">
                <h2>Realizar compra</h2>
                </div>
            <div class="formulario">
                
                <br><br>
        <p>Nome:</p>
            <input class="form" type="text" name="nome" required/>
        
        <p>Idade:</p>
            <input class="form" type="number" name="idade" min="0" max="110" required/>
        
        <br>
        <br>
        <p>Ingresso:</p>
            <input  type="radio" name="ingresso" value="Inteira" required/>Inteira
            <input  type="radio" name="ingresso" value="Meia" required/>Meia
        
        <p>Filmes:</p>
            <select class="form" name="filmes">
                <option value=""></option>
                <option value="Turma da Mônica - Lições">Turma da Mônica - Lições</option>
                <option value="Duna">Duna</option>
                <option value="O Hobbit - A desolação de Smaug">O Hobbit - A desolação de Smaug</option>
                <option value="Thor">Thor</option>
                <option value="Kong - A ilha da caveira">Kong - A ilha da caveira</option>
            </select>
        
        <p>Linguagem:</p>
            <select class="form" name="linguagem">
                <option value=""></option>
                <option value="Dublado">Dublado</option>
                <option value="Legendado">Legendado</option>
            </select>
        
        <br><br>
        <h3>Alimentos</h3>
        <br>
        <p>Pipoca:</p>
            <input class="form" type="number" name="pipoca" min="0" max="110"/>
        
        <p>Refrigerante:</p>
            <input class="form" type="number" name="refrigerante" min="0" max="110"/>
        
        <p>Chocolate:</p>
            <input class="form" type="number" name="chocolate" min="0" max="110"/>
        
        <p>Combo:</p>
            <input class="form" type="number" name="combo" min="0" max="110"/>
    
    <div class="botaofilme">
        <p>
            <input class="botaodofilme" type="submit" name="enviar" value="COMPRAR"/>
        </p>
        </div>
        <input type="hidden" name="escondido" value="segredo"/>
    </form>
    <br><br><br>
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