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
        $a = 3;
        $b = "3";
        $r = ($a==$b)?$r="SIM":$r="NAO";
        echo "As variaveis A e B sao iguais? $r </br>";
        $r = ($a===$b)?$r="SIM":$r="NAO";
        echo "As variaveis A e B sao identicas? $r";
    ?>
</div>
</body>
</html>
