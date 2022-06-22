<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="CSS/Stylecinetecc.css">
  <link rel="stylesheet" href="CSS/style2.css">
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
            <li><a href="./comprar.php">Comprar ingresso</a></li>
            </div>
        </ul>
    </nav>
     <div class="container">
 <h1>Ingressos!</h1>
 <div class="tamanho">
  <form name="from" method="POST">
       </div>
       <div class="tama">
      </div>
    <p>
      <label for="idade">Inteira QTD: </label>
    </br>
      <input type="number" name="inteira" id="inteira" min="1" max="100">
    </p>
    <p>
      <label for="idade">Meia QTD: </label>
    </br>
      <input type="number" name="meia" id="meia" min="1" max="100">
    </p>
        
  </br>
  <?php 
    if (isset($_POST["meia"])) {
        $meia = $_POST["meia"];
    }
    if (isset($_POST["inteira"])) {
        $inteira = $_POST["inteira"];
    }

    if (isset($_POST["meia"])&& isset($_POST["inteira"])) {
        $total =$meia*12.00;
        $total1 =$inteira*17.00;
          echo "Total Meia: R$".$total;
          echo "<br>"."Total Inteira: R$".$total1;
    }
    
   ?>
    
    <br><br>
    <div style="margin-bottom: 0px">
    <p>
      <input type="submit" name="total" value="TOTAL" class="btn" style="background-color: rgb(161, 38, 38); color: #fff;">
      &nbsp;&nbsp;&nbsp;&nbsp;
      
      <a style="background-color: rgb(161, 38, 38); color: #fff; text-decoration: none; border-radius: 10px; padding: 10px" href="comida.php"> próxima </a>
    </p>
    </div>
  </form>
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


<?php
    
    if (isset($_POST["meia"])&&(isset($_POST["meia"]))) {
        $file = fopen('ingresso.txt','a');
        
        if (!$file) die('Não foi possível criar o arquivo.');
    
        $data = "$meia;$inteira;\n";
        fwrite($file, $data);
    
        fclose($file);
    }


?>

</html>