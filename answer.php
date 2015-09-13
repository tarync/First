<?php
$number = $_POST['number'];
$multiplier = $_POST['multiplier'];

function multiply($numbera, $numberb)
{
  $result = ($numbera*$numberb);
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
echo ($answer);

    ?>

  </body>
</html>
