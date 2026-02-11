<!DOCTYPE html>
<html>
<head>
  <title>Ex01</title>
</head>
<body>
<h2>PHP Declare Variable</h2>
<hr>
<?php
  $pname = 'Coca';
  $qty = 10;
  $price = 5.5;
  $amount = $qty * $price;
  echo("<p>Product Name :" . $pname . "</p>");
  echo("<p>Product Quantity :" . $qty . "</p>");
  echo("<p>Product Price : $price</p>");
  echo("<p>Amount : $amount</p>");
?>
</body>
</html>