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
    Hired Date : <input type="datetime-local" name="init-date" ><br>
    Fired Date : <input type="datetime-local" name="final-date" >
    <input type="submit" value="submit" name="submit">
  </form>
  <hr>
  <?php
    if(isset($_POST["submit"])){
      $init_date = new DateTime($_POST["init-date"]);
      $final_date = new DateTime($_POST["final-date"]);
      
      $interval = $init_date->diff($final_date);

      echo "The duration before got fired is : ";
      echo $interval->y . " years, ";
      echo $interval->m . " months, ";
      echo $interval->d . " days, ";
    }
  ?>
  <br>
  <a href="index.php"><< Home</a>
</body>
</html>