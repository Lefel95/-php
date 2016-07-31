<!DOCTYPE html>
<html>
<head>
  <?php
      $txt = isset($_POST["t"])?$_POST["t"]:"[TEXTO GENERICO]";
      $tam = isset($_POST["tam"])?$_POST["tam"]:"14pt";
      $cor = isset($_POST["cor"])?$_POST["cor"]:"#000000";
   ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style media="screen">
    span.texto{
      font-size: <?php echo $tam; ?>;
      color: <?php echo $cor; ?>;
    }
  </style>
</head>
<body>
<div>
  <span class="texto">
    <?php
      echo $txt;
    ?>
  </span>

</div>
</body>
</html>
