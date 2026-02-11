<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>Practice03 - Example09</h1>
  <?php
    $nums = [12, 3, 7.8, 3.9, 4.5];
    $total = 0;
    $avg = 0;
    $max = 0;

    //Display
    echo("<h2>Number Array</h2>");
    for($index=0; $index < count($nums); $index++) {
      echo($index . " - " . $nums[$index] . "<br>");
    }
    echo("<br>");

    // Total
    foreach($nums as $num) {
      $total += $num;
    }
    echo "<h4>Total: $total</h4>";
    
    // Average
    $avg = $total / count($nums);
    echo "<h4>Average: $avg</h4>";

    // Max
    foreach($nums as $num) {
      if($num > $max) {
        $max = $num;
      }
    }
    echo "<h4>Max: $max</h4>";
  ?>
</body>
</html>