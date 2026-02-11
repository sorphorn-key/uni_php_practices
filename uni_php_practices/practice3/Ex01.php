<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>Test Index Array</h1>
  <?php
    $students = ["Brospov","Meakara","Dara"];
    //Display
    for($index=0;$index<count($students);$index++){
      echo($students[$index] . "&nbsp;&nbsp;");
    }
    echo("<br><br>");
    foreach($students as $st){
      echo($st . "&nbsp;&nbsp;");
    }
    echo("<br><br>");
    foreach($students as $index => $value){
      echo("$index - $value<br>");
    }
  ?>
</body>
</html>