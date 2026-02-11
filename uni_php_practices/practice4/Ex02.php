<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String</title>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
  <h2>Convert Number to Word</h2>
  <form method="post">
    Input Number : <input type="number" name="num">
    <input type="submit" value="Read" name="submit">
  </form>
  <hr>
  <?php
    if(isset($_POST["submit"])){
      $num = $_POST["num"];
      $eng=["Zero","One","Two","Three","Four","Five","Six","Seven","Eight","Nine"];
      $khm=["សូន􀅰","មួយ","ពីរ","បី","បួន","ប្រាំ","ប្រាំមួយ","ប្រាំពីរ","ប្រាំបី","ប្រាំបួន"];
      $eng_word = "";
      $khm_word = "";
      
      for($i=0;$i<strlen($num);$i++){
        $eng_word .= $eng[$num[$i]] . "&nbsp;&nbsp;";
        $khm_word .= $khm[$num[$i]] . "&nbsp;&nbsp;";
      }
      echo("<p>English : $eng_word</p>");
      echo("<p>Khmer : $khm_word</p>");
    }
  ?>
  <hr>
  <a href="index.php"><< Home</a>
</body>
</html>