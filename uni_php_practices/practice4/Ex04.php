<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex04</title>
</head>
<body>
  <h1>PHP Date and Time</h1>
  <hr>
  <?php
    $currentDate = new DateTime();
    $currentDate->setTimezone(new DateTimeZone("Asia/Phnom_Penh"));
    echo "<p>Current Date (DateTime): " . $currentDate->format('l,d-m-Y, h:i:sa') . "</p>";

    $str = "April 15 2020, 10:50pm";
    $date = new DateTime($str);
    echo "<p>Date from String : " . $date->format('l,d-M-Y, h:i:sa') . "</p>";
  ?>
  <hr>
  <a href="index.php"><< Home</a>
</body>
</html>