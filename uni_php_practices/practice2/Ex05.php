<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<?php
  $a = isset($_POST["txta"]) ? $_POST["txta"] : "";
  $b = isset($_POST["txtb"]) ? $_POST["txtb"] : "";
?>
<h1>Multi-Submit</h1>
<form method="post">
  <table>
    <tr>
      <td><label for="txta">Value A : </label></td>
      <td><input type="text" name="txta" id="txta" value="<?php echo($a); ?>"> </td>
    </tr>
    <tr>
      <td><label for="txtb">Value B : </label></td>
      <td><input type="text" name="txtb" id="txtb" value="<?php echo($b); ?>"> </td>
    </tr>
  </table><br>
  <input type="submit" name="btnodd" value="Odd Number">
  <input type="submit" name="btneven" value="Even Number">
</form>
<hr>
<?php
  //submit odd
  if(isset($_POST['btnodd'])){
    $a = $_POST['txta'];
    $b = $_POST['txtb'];
    echo("<p>All Odd Number ($a - $b) : </p>");
    for($i = $a;$i<=$b;$i++){
      if($i % 2 != 0){
        echo("<p>$i</p>");
        }
    }
  }
  //submit even
  if(isset($_POST['btneven'])){
    $a = $_POST['txta'];
    $b = $_POST['txtb'];
    echo("<p>All Even Number ($a - $b) : </p>");
    for($i = $a;$i<=$b;$i++){
      if($i % 2 == 0){
        echo("<p>$i</p>");
        }
    }
  }
?>
</body>
</html>