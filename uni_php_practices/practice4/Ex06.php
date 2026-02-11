<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Date</title>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
  <?php
    $dob = isset($_POST["dob"])? $_POST["dob"] : "";
    $date = new DateTime($dob);
  ?>
  <h1>គណនាអាយុ និង ចូលនិវត្ត</h1>
  <form method="post">
    បញ្ជូលថ្ងៃខែឆ្នាំកំណើត : <input type="date" name="dob" value="<?php echo $date->format('Y-m-d') ?>">
    <input type="submit" value="submit" name="submit">
  </form>
  <hr>
  <?php
    if(isset($_POST["submit"])){
      $dob = $_POST["dob"];
      $birthDate = new DateTime($dob);
      $currentDate = new DateTime();
      $difference = $currentDate->diff($birthDate);
      $years = $difference->y;
      $months = $difference->m;
      $days = $difference->d;
      echo("<p>អ្នកមានអាយុ : $years ឆ្នាំ $months ខែ $days ថ្ងៃ</p>");
    }
  ?>
  <hr>
  <a href="index.php"><< Home</a>
</body>
</html>