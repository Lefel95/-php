<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style media="screen">
    h2
    {
      font: 15pt Arial;
      color #171559;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div>
    <?php
      $v1 = $_GET["x"];
      $v2 = $_GET["y"];
      $absol = abs($v2);
      $pot = pow($v1, $v2);
      $sqt = sqrt($v1);
      $rnd = round($v2);
      $nf = number_format($v1,2,",",".");
      echo "<h2>Valores recebidos $v1 e $v2</h2>";
      echo "</br>O valor absoluto de  $v2 e $absol";
      echo "</br>O valor de $v1 <sup>$v2</sup> e $pot";
      echo "</br>O valor da raiz quadrada de $v1 e $sqt";
      echo "</br>O valor arredondado de $v2 e $rnd";//ceil (arredonda para cima) floor (arredonda para cima)
      echo "</br>O valor de $v1 em moeda R$$nf";
    ?>
</div>
</body>
</html>
