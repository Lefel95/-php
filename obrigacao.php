<!DOCTYPE html>
<html>
<head>
  <?php
      $dia = isset($_POST["dia"])?$_POST["dia"]:"Dia Invalido";
   ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      switch ($dia) {
        case '1':
        case '2':
        case '3':
        case '4':
        case '5':
        case '6':
          $res = "Deve ir para a escola";
          break;
        case '7':
        case '8':
          $res = "Não deve ir para a escola";
          break;
        default:
          $res = "Erro!";
          break;
      }
      echo "Você $res";
    ?>
</div>
</body>
</html>
