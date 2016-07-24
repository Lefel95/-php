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
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variavel A vale $a <br/>";
        echo "A variavel B vale $b<br/>";
        $b = &$a; #variavel referenciada (ponteiro)
        echo "A variavel A vale $a<br/>";
        $b += 5;
        echo "A variavel B vale $b e A vale $a";
    ?>
</div>
</body>
</html>
