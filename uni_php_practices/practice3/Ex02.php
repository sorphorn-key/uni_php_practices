<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>Test Associative Array</h1>
  <?php
  $phone = [
    "model" => "Galaxy S53",
    "price" => 200,
    "branch" => "Samsung",
    "import" => "Korea"
  ];
  //Output
  foreach ($phone as $key => $value) {
    echo "<p>" . $key . " => " . $value . "</p>";
  }
  ?>
</body>
</html>