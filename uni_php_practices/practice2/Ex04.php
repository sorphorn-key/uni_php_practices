<!DOCTYPE html>
<html>
<head>
  <title>Ex04</title>
</head>
<body>
<h1>PHP with HTML Form</h1>
<form method="post">
  <p>pname : <input type="text" name="pname"></p>
  <p>qty : <input type="text" name="qty"></p>
  <p>price : <input type="text" name="price"></p>
  <input type="submit" name="submit" value="submit">
  <input type="reset" name="reset" value="reset">
</form>
<hr>
<?php
  if(isset($_POST['submit'])){
    $pname = $_POST["pname"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];
    $amount = $qty * $price;
    //output : print or echo
    echo("<p>Product Name : " . $pname . "</p>");
    echo("<p>Product Quantity : " . $qty . "</p>");
    echo("<p>Product Price : $price</p>");
    echo("<p>Amount : $amount</p>");
  }
?>
</body>
</html>