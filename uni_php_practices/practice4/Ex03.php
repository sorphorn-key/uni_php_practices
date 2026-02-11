<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>string</title>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
  <?php
  $name = isset($_POST["name"]) ? $_POST["name"] : "";
  ?>
  <h1>តំនាយតាមឈ្មោះ</h1>
  <form method="post">
  បញ្ជូលឈ្មោះ : <input type="text" name="name" value="<?php echo($name) ?>">
  <input type="submit" value="OK" name="submit" class="button"> <br><br>
  </form>
  <hr>
  <?php
    //Create Function LuckyNumber
    function LuckyNumber($name) {
      $map = [
      'A'=>1,'J'=>1,'S'=>1,
      'B'=>2,'K'=>2,'T'=>2,
      'C'=>3,'L'=>3,'U'=>3,
      'D'=>4,'M'=>4,'V'=>4,
      'E'=>5,'N'=>5,'W'=>5,
      'F'=>6,'O'=>6,'X'=>6,
      'G'=>7,'P'=>7,'Y'=>7,
      'H'=>8,'Q'=>8,'Z'=>8,
      'I'=>9,'R'=>9
      ];
      $chapter = 0;
      $name = strtoupper($name);

      for ($i=0; $i<strlen($name); $i++) {
        $chapter += $map[$name[$i]] ?? 0;
      }
      return $chapter % 9 == 0 ? 9 : $chapter % 9;
    }

    //OK Button
    if(isset($_POST["submit"])){
      echo("<h3>Your Lucky Number : " . LuckyNumber(strtoupper($name)) . " </h3>");
    }
  ?>
  <hr>
  <a href="index.php"><< Home</a>
</body>
</html>