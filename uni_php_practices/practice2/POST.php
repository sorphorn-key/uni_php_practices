<h1>PHP POST Method</h1>
<?php
  if(isset($_POST["submit"])){
    $name = $_POST["txtname"];
    $email = $_POST["txtemail"];
    echo("<h2>Name : " . $name . "</h2>");
    echo("<h2>Email : " . $email . "</h2>");
  }
?>