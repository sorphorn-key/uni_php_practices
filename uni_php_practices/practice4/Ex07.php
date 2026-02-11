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
    Date and Time of Birth : <input type="datetime-local" name="date" >
    <input type="submit" value="submit" name="submit">
  </form>
  <hr>
  <?php
    if(isset($_POST["submit"])){
      $str = $_POST["date"];
      $date = new DateTime($str);
      $retire_date = (clone $date)->modify('+60 years');

      echo("<p>Your Birthday : " . $date->format('d-M-Y') . "</p>");
      echo("<p>Your Retirement Date : " . $retire_date->format('d-M-Y') . "</p>");
    }
  ?>
  <br>
  <a href="index.php"><< Home</a>
</body>
</html>