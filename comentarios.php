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

    <div class="comentarios">

    <h2>Comentários</h2>

    <h3>Os comentários abaixo foram escritos por usuários que entraram no site e utilizaram dos nossos sistemas!</h3>

    <?php
    $link = "XML/comentarioxml.xml";
    $xml = simplexml_load_file($link) -> comentario;
    foreach($xml -> conteudo as $conteudo){
        echo '<div class="coment">';
    echo '<img class="fotodousuario" src=" '.$conteudo -> imagem.' "></img><br/>'; 
    echo '<strong>Nome:</strong> '.utf8_decode($conteudo -> nome).'<br/>';
    echo '<strong>Comentário:</strong> '.utf8_decode($conteudo -> texto);
    echo '</div>';
    echo '<br /><br />';
    }
    ?>

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