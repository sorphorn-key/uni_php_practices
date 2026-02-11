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
    Date and Time of Birth : <input type="datetime-local" name="date" ><br>
    Input Work Age: <input type="number" name="work-age" >
    <input type="submit" value="submit" name="submit">
  </form>
  <hr>
  <?php
    if(isset($_POST["submit"])){
      $date = new DateTime($_POST["date"]);
      $age = $_POST["work-age"];

      $adult_date = (clone $date)->modify("+$age years");
      $retire_date = (clone $date)->modify('+60 years');
      $interval = $adult_date->diff($retire_date);

      echo("<p>Your Birthday : " . $date->format('d-M-Y') . "</p>");
      echo("<p>Your Work Age : " . $age . " years old</p>");
      echo "The duration that you can work is : ";
      echo $interval->y . " years, ";
      echo $interval->m . " months, ";
      echo $interval->d . " days, ";
    }
  ?>
  <br>
  <a href="index.php"><< Home</a>
</body>
</html>