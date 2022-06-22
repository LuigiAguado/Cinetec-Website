<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="CSS/Stylecinetecc.css">
  <link rel="stylesheet" href="CSS/stylecomida.css">
	<title></title>
</head>
<body>
<nav id="menu">
        <ul>
            <img src="IMG/logo.png">
            <div>
            <li><a href="./index.html">Home</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#filmes">Filmes</a></li>
            <li><a href="./ProdutosIMG.php">Produtos</a></li>
            </div>
            <div class="menucompra">
            <li><a href="./index.php">Comprar ingresso</a></li>
            </div>
        </ul>
    </nav>
     <div class="container">
 <h1>Refeição!</h1>
 <div class="tamanho">
  <form name="from" method="POST">
       </div>
       <div class="tama">
      </div>
    <p>
      <label for="idade">Pipoca QTD: </label>
    </br>
      <input type="number" name="pipoca" id="pipoca" min="1" max="100">
    </p>
    <p>
      <label for="idade">Refrigerante QTD: </label>
    </br>
      <input type="number" name="refrigerante" id="refrigerante" min="1" max="100">
    </p>
    
    <?php

 ?>
  <?php 
    if (isset($_POST["refrigerante"])) {
        $refrigerante = $_POST["refrigerante"];
    }
    if (isset($_POST["pipoca"])) {
        $pipoca = $_POST["pipoca"];
    }

    if (isset($_POST["refrigerante"])&& isset($_POST["pipoca"])) {
        $total=$pipoca*17.00;
        $total1=$refrigerante*10.00;
          echo "Total Pipoca: R$".$total;
          echo "<br>"."Refrigerante: R$".$total1;
    }
    
   ?>
    
    <br><br>
    <div style="padding-bottom: 208px">
    <p>
      <input type="submit" name="total" value="TOTAL" class="btn" style="background-color: rgb(161, 38, 38);  color: #fff;">
      &nbsp;&nbsp;&nbsp;&nbsp;
      
      <a style="background-color: rgb(161, 38, 38); color: #fff; text-decoration: none; border-radius: 10px; padding: 10px" href="carrinho.php"> CARRINHO </a>
      </p> 
    </p>
    </div>
  </form>
  <div id="linha-horizontal"></div>
  <footer>
    <a class="voltartopo" href="#menu">Voltar ao Topo</a>
    <br><br>
    <p id="date"></p>
    <script src="JS/JSTempo.js"></script>
    <p>Developed by Luigi Zaneli Aguado - Beatriz Gouveia Alves - Gabriel Vitor da Silva Esperença</p>
</footer>
</body>

<?php  

    if (isset($_POST["pipoca"]) && (isset($_POST["refrigerante"]))) {
        $file = fopen('comida.txt','a');
        
        if (!$file) die('Não foi possível criar o arquivo.');
    
        $data = "$pipoca;$refrigerante;\n";
        fwrite($file, $data);
    
        fclose($file);
    }
?>



</html>