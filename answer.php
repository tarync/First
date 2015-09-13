<?php
$number = $_POST['number'];
$multiplier = $_POST['multiplier'];

function multiply($numbera, $numberb)
{
  $product = ($numbera*$numberb);
  if ($product % 2 === 0) {
    $result = "ping";
  } else {
    $result = "pong";
  }
  return $result;
}


$answer = multiply($number, $multiplier);

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
    echo ($number)."*".($multiplier)."=";
    echo ($number*$multiplier)." ";
    echo "<p>".$answer."</p>"

    ?>

  </body>
</html>
