<!DOCTYPE html>
<html>
<head>
  <?php
      $num = isset($_POST["num"])?$_POST["num"]:"numero invalido";
      $op = isset($_POST["op"])?$_POST["op"]:"operação invalida";
   ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      switch ($op) {
        case 'dobro':
          $resultado = $num*2;
          break;
        case 'cubo':
          $resultado = pow($num, 3);
          break;
        case 'sqrt':
          $resultado = sqrt($num);
          break;
        default:
          $resultado = "Erro!";
          break;
      }
      echo "Resultado é $resultado";
    ?>
</div>
</body>
</html>
