<!DOCTYPE html>
<html>
<head>
  <?php
      $n1 = isset($_POST["n1"])?$_POST["n1"]:0;
      $n2 = isset($_POST["n2"])?$_POST["n2"]:0;
      $s = isset($_POST["step"])?$_POST["step"]:1;
   ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        if ($n2 > $n1 || $n1 == $n2) {
          while ($n1 <= $n2) {
            echo "$n1 ";
            $n1 += $s;
          }
        }
        else {
          while ($n2 <= $n1) {
            echo "$n1 ";
            $n1 -= $s;
          }
        }
    ?>
</div>
</body>
</html>
