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
        $ano = $_GET["an"];
        $idade = 2016  - $ano;
        echo "Quem nasceu em $ano tem $idade anos";
        $tipo = ($idade>=18 && $idade <65)?"obrigatorio":"nao obrigatorio";
        echo " e dessa forma seu voto e $tipo";
    ?>
</div>
</body>
</html>
