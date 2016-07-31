<!DOCTYPE html>
<html>
<head>
  <?php
      $n1 = isset($_POST["n1"])?$_POST["n1"]:"[Nota Invalida]";
      $n2 = isset($_POST["n2"])?$_POST["n2"]:"[Nota Invalida]";
   ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $media = ($n1 + $n2) / 2;
      if ($media < 5.0) {
        $resultado = "Reprovado";
      }
      elseif ($media >= 5.0 && $media <= 7.0) {
        $resultado = "Recuperação";
      }
      else {
        $resultado = "Aprovado";
      }
      echo "O aluno tirou a media de $media e foi $resultado";
    ?>
</div>
</body>
</html>
