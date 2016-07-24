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
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $soma = $n1 + $n2;
        $sub = $n1 - $n2;
        $mult = $n1 * $n2;
        $div = $n1 / $n2;
        $mod = $n1 % $n2;
        $media = ($n1 + $n2) / 2;
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        echo "</br>A soma entre $n1 e $n2 vale $soma!";
        echo "</br>A subtracao entre $n1 e $n2 vale $sub";
        echo "</br>A multiplicacao entre $n1 e $n2 vale $mult";
        echo "</br>A divisao entre $n1 e $n2 vale $div";
        echo "</br>O módulo entre $n1 e $n2 vale $mod";
        echo "<br/>A media vale $media";
    ?>
</div>
</body>
</html>
