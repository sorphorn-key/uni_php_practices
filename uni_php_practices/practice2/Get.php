<h1>PHP GET Method</h1>
<?php
  if(isset($_GET["submit"])){
    $name = $_GET["txtname"];
    $email = $_GET["txtemail"];
    echo("<h2>Name : " . $name . "</h2>");
    echo("<h2>Email : " . $email . "</h2>");
  }
?>