<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>Practice03 - Example10</h1>
  <?php
    $proc = [
      "code" => "001",
      "name" => "Sword",
      "price" => 23.35,
      "category" => "Weapon",
      "supplier" => "Nokia"
    ];

    //Display
    echo("<h2>Product Associate Array</h2>");
    foreach($proc as $name => $value) {
      echo($name . " => " . $value . "<br>");
    }
  ?>
</body>
</html>