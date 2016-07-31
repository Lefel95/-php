<!DOCTYPE html>
<html>
<head>
  <?php
      $name = isset($_POST["name"])?$_POST["name"]:"Não informado";
      $ano = isset($_POST["nasc"])?$_POST["nasc"]:date("Y");_
   ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $idade = date("Y") - $ano;
      if ($idade < 16) {
        $dirigir = "Não pode";
        $votar = "Não pode";
      }
      elseif($idade>=16 && $idade<18){
          $dirigir = "Não pode";
          $votar = "Pode";
      }
      elseif ($idade > 18 && $idade <= 65) {
            $dirigir = "Pode";
            $votar = "DEVE";
      }
      else {
            $dirigir = "Pode";
            $votar = "Pode";
      }

      echo "$name tem $idade e $votar votar e $dirigir dirigir";
    ?>
    <a href="voteandrive.html">Voltar</a>
</div>
</body>
</html>
