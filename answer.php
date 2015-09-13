<?php

  $number = $_POST['number'];
    $multiplier = $_POST['multiplier'];



?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Things!</title>
  </head>
  <body>
    <p> the number</p>

    <?php
echo ($number*$multiplier);

    ?>

  </body>
</html>
