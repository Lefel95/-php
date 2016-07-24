<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $preco = $_GET["p"];
      echo "O preco do produto é $preco";
      $preco += $preco*10/100;
      echo "</br>O desconto final com 10% de aumento é de R$".number_format($preco,2,",",".");
    ?>
</div>
</body>
</html>
