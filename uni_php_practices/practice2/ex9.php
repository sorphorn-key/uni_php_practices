<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Example9</title>
</head>
<body>
  <form method="post">
    <p>Customer Name : <input type="text" name="name"></p>
    <p>Principle ($) : <input type="number" name="prin"></p>
    <p>Duration (Month) : <input type="number" name="dur"></p>
    <p>Rate (%) : <input type="number" name="rate"></p>
    <input type="submit" name="submit" value="submit">
    <input type="reset" name="reset" value="reset">
  </form>
  <hr>
  <?php
    if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $principle = $_POST['prin'];
      $duration = $_POST['dur'];
      $rate = $_POST['rate'];

      $interest = ($principle * $duration * $rate) / 100;
      $balance = $principle + $interest;

      // Output
      echo("<p>Name : $name</p>");
      echo("<p>Principle : $$principle</p>");
      echo("<p>Duration : " . $duration . " " . ($duration == 1 ? "month" : "months") . "</p>");
      echo("<p>Rate : $rate %</p>");
      echo("<p>Balance : $$balance</p>");
    }
  ?>
</body>
</html>
