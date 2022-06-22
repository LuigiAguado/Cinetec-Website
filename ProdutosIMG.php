<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinetec</title>
    <link rel="stylesheet" href="CSS/Stylecinetecccc.css">
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
    <div id="linha-horizontal"></div>

    <div class="fundo">
    <div class="titulodosprodutostop">

    <h2>Produtos!</h2>

    Os itens abaixo são todos os produtos disponíveis pela Cinetec para a compra.
    <br><br><br>

    </div>
    <div class="bordadosprodutos">

    <div class="titulodosprodutos">

    <h3>Ingressos</h3>
    
    </div>
    
    <div class="partedosprodutos">
    <?php

        $arquivo = file_get_contents('JSON/ingressos.json');

        $json = json_decode($arquivo);

        foreach($json as $registro){
           
        echo '<div class="fundophp">';

        echo  $registro->titulo . '<br />';

        echo "<b>Valor: R$</b> ". $registro->valor . '<br />';

        echo "<img class='imgphp' src='". $registro->imagem ."'<br />";

        echo '</div>';
    }
    ?>
    </div>

    <div class="titulodosprodutos">
    <h3>Alimentos</h3>
    </div>
    <div class="partedosprodutos">
    <?php

        $arquivo = file_get_contents('JSON/alimentos.json');

        $json = json_decode($arquivo);

        foreach($json as $registro){
   
        echo '<div class="fundophp">';

        echo  $registro->titulo . '<br />';

        echo "<b>Valor: R$</b> ". $registro->valor . '<br />';

        echo "<img class='imgphp' src='". $registro->imagem ."'<br />";

        echo '</div>';
}
?>
    </div>
    <br><br><br><br>
    <a href="./comprar.php" class="botaocompra">Compre Agora</a>
    <br><br>
    </div>
    <br>
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

