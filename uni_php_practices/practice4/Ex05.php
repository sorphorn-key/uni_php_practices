<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Date</title>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
  <h2>Select Date and Time</h2>
  <form method="post">
    Date and Time : <input type="datetime-local" name="date" >
    <input type="submit" value="submit" name="submit">
  </form>
  <hr>
  <?php
    if(isset($_POST["submit"])){
      $str = $_POST["date"];
      $date = new DateTime($str);
      echo("<p>You chose : " . $date->format('l,d-M-Y, h:i:sa') . "</p>");
    }
  ?>
  <hr>
  <a href="index.php"><< Home</a>
</body>
</html>