<!DOCTYPE html>
<html>
<head>
  <?php
      $n = isset($_POST["tabuada"])?$_POST["tabuada"]:1;   ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $n2 = 1;

      do {
        $r = $n*$n2;
        echo "$n X $n2 = $r <br>";
        $n2++;
      } while ($n2 <=10);
    ?>
</div>
</body>
</html>
