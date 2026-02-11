
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>string</title>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
  <h2>How to use php string</h2>
  <form method="post">
    Input String : <input type="text" name="str" value="Hello world">
    <input type="submit" value="OK" name="submit">
  </form>
  <hr>
  <h1>The Result below</h1>
  <?php
    if(isset($_POST["submit"])){
      $str = $_POST["str"];

      echo("<p>str[0] : " . $str[0] . "</p>");
      echo("<p>strtolower : " . strtolower($str) . "</p>");
      echo("<p>strtoupper : " . strtoupper($str) . "</p>");
      echo("<p>ucfirst : " . ucfirst($str) . "</p>");
      echo("<p>ucwords : " . ucwords($str) . "</p>");
      echo("<p>strrev : " . strrev($str) . "</p>");
      echo("<p>strlen : " . strlen($str) . "</p>");
      echo("<p>md5 : " . md5($str) . "</p>");
      echo("<p>substr : " . substr($str,0,5) . "</p>");
    }
  ?>
  <hr>
  <a href="index.php"><< Home</a>
</body>
</html>