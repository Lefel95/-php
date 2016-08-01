<!DOCTYPE html>
<html>
<head>
  <?php
    $est = isset($_POST["est"])?$_POST["est"]:"Estado Invalido";
   ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      switch ($est) {
        case 'AM':
        case 'AC':
        case 'RO':
        case 'RR':
        case 'AP':
        case 'PA':
        case 'TO':
          $regiao = "Norte";
          break;
        case 'MA':
        case 'PI':
        case 'BH':
        case 'SE':
        case 'AL':
        case 'PE':
        case 'PB':
        case 'RN':
        case 'CE':
          $regiao = "Nordeste";
          break;
        case 'MT':
        case 'MS':
        case 'DF':
        case 'GO':
          $regiao = "Centro-Oeste";
          break;
        case 'SP':
        case 'RJ':
        case 'ES':
        case 'MG':
          $regiao= "Sudeste";
          break;
        case 'PR':
        case 'SC':
        case 'RS':
          $regiao = "Sul";
          break;
        default:
          $regiao = "Erro!";
          break;
      }
      echo "Sua Região é $regiao";
    ?>
</div>
</body>
</html>
