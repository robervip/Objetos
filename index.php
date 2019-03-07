<?php
include "robertillo.php";
$p=new RoberDuck;
$nombre=$p->getNombre();
$tipo=$p->getTipo();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo $p->getNombre() ?>
    <?php echo $p->getTipo() ?>
  </body>
</html>
