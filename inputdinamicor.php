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
      $c = $_POST["var"];
      $i = 1;

      while ($i <= $c) {
        $f = "num".$i;
        $url = "n".$i;
        $$f = $_POST[$url];
        echo "Valor $i: ".$$f."<br>";
        $i++;
      }


    ?>
</div>
</body>
</html>
