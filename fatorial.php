<!DOCTYPE html>
<html>
<head>
  <?php
      $val = isset($_POST["fat"])?$_POST["fat"]:0;
   ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $fat = $val;
        $val--;
        do {
          $fat = $fat * $val;
          $val--;
        } while ($val >= 1);
        echo "$fat";
    ?>
</div>
</body>
</html>
