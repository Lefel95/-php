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
        $nome = isset($_POST["nome"])?$_POST["nome"]:"[não informado]";
        $nasc = isset($_POST["nascimento"])?$_POST["nascimento"]:date("Y");
        $sex = isset($_POST["sexo"])?$_POST["sexo"]:"[sem sexo]";
        $idade = date("Y") - $nasc;
        echo "$nome tem $idade anos e pertence ao sexo $sex";
    ?>
    <br>
    <a href="idade.html"><input type="button" name="back" value="Voltar"></a>
</div>
</body>
</html>
