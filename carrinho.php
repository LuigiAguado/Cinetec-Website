<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="CSS/stylecarrinho.css">
  <link rel="stylesheet" href="CSS/Stylecinetecc.css">
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
    </nav>
<form name="from" method="POST">
 <div class="checkout-panel" style="margin-top: 100px;">
  <div class="panel-body">
    <div class="payment-method">
      <label for="card" class="method card">
        <div class="card-logos">
          <img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png"/>
          <img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png"/>
        </div>
        <div class="radio-input" style="font-size: 20px;" >
          <input  type="radio" id="pagamentocartao" value="Credito" name="pagamentocartao" required=""/>
          Pague com cartão de crédito
        </div>
      </label>
 
       <label for="card" class="method card">
        <div class="card-logos">
          <img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png"/>
          <img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png"/>
        </div>
 
        <div class="radio-input" style="font-size: 20px;">
          <input  type="radio" id="pagamentocartao" value="Debito" name="pagamentocartao" required=""/>
          Pague com cartão de debito
        </div>
      </label>
    </div>
 
    <div class="input-fields">
      <div class="column-1" style="font-size: 20px;">
        <label for="cardholder">E-mail</label>
        <input type="text" id="nomeCartao" name="nomecartao" name="nomecartao"required="" />
 
        <div class="small-inputs">
          <div style="font-size: 20px;">
          </br>
            <label for="date">Data de Validade</label>
            <input type="text" id="validadeCartao" name="validadeCartao"required=""/>
          </div>
 
          <div style="font-size: 20px;">
          </br>
            <label for="verification" >CVV / CVC *</label>
            <input type="password" id="cvv" name="cvv"required="" />
          </div>
        </div>
 
      </div>
      <div class="column-2" style="font-size: 20px;">
        <label for="cardnumber">Numero do cartão</label>
        <input type="text" id="numCartao" name="numCartao"required="" />
      </div>
    </div>
  </br>
  <div class="botaofilme">
      <a href="ingresso.html" class="botaodofilme">PAGAR</a>
      </div>
    </div>
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
  <?php 
    if (isset($_POST["pagamentocartao"])) {
        $pagamentocartao = $_POST["pagamentocartao"];
    }
    if (isset($_POST["nomecartao"])) {
        $nomecartao = $_POST["nomecartao"];
    }
    if (isset($_POST["validadeCartao"])) {
        $validadeCartao = $_POST["validadeCartao"];
    }
    if (isset($_POST["cvv"])) {
        $cvv = $_POST["cvv"];
    }
    if (isset($_POST["numCartao"])) {
        $numCartao = $_POST["numCartao"];
    }

     if (isset($_POST["numCartao"])) {
        $file = fopen('pagamento.txt','a');
        
        if (!$file) die('Não foi possível criar o arquivo.');
    
        $data = "$pagamentocartao;$nomecartao;$validadeCartao;$cvv;$numCartao;\n";
        fwrite($file, $data);
    
        fclose($file);
    }
   ?>
</html>