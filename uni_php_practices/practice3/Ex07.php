<?php
  $students = ["Sophea", "Dara", "Vanna", "Sokchea", "Pisey", "Rith", "Chanra"];
  $filtered = $students;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["input"] ?? "";
  if (isset($_POST["find"])) {
    $filtered = [];
    foreach ($students as $index => $name) {
      if(stripos($name, $input) !== false) {
        $filtered[$index] = $name;
      }
    }
  } elseif (isset($_POST["asc"])) {
    usort($filtered, function($a, $b) { return $a <=> $b;});
  } elseif (isset($_POST["desc"])) {
    usort($filtered, function($a, $b) { return $b <=> $a;});
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  table{
    width:70%;
    border-collapse: collapse;
  }
  </style>
</head>
<body>
  <h2>Array 1D - Search and Sort</h2>
  <form method="post">
    <label>input</label>
    <input type="text" name="input">
    <button type="submit" name="find">Find</button>
    <button type="submit" name="asc">ASC</button>
    <button type="submit" name="desc">Desc</button>
  </form> <br>
  <table border="1">
    <tr>
      <th>No</th>
      <th>students</th>
    </tr>
    <?php foreach ($filtered as $index => $name): ?>
    <tr>
      <td><?php echo ($index+1); ?></td>
      <td><?php echo $name; ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>