<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="inputdinamicor.php" method="post">
      <?php
      $c = 1;
      while ($c<=5) {
          echo "<label for='n$c'>Valor $c:</label>
          <input type='number' name='n$c' min='0' max='100' value=0 required ><br>";
          $c++;
      }

      ?>
      <input type="hidden" name="var" value="<?= $c-1 ?>">
      <input type="submit" name="name" value="Enviar">
    </form>
</div>
</body>
</html>
