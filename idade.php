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
        $nome = $_POST["nome"];
        $nasc = $_POST["nascimento"];
        $sex = $_POST["sexo"];
        $idade = date("Y") - $nasc;
        echo "$nome tem $idade anos e pertence ao sexo $sex";
    ?>
    <a href="idade.html"><input type="button" name="back" value="Voltar"></a>
</div>
</body>
</html>
