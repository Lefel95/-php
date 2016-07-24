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
        $v = $_POST["v"];
        $raiz = sqrt($v);
        echo "A raiz quadrada de $v e ".number_format($raiz,2);
    ?>
    <br>
    <a href="raizquadrada.html"><input type="button" name="back" value="Voltar"></a>
</div>
</body>
</html>
