<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style type="text/css">
  table{
    width:100%;
    border-collapse: collapse;
  }
  </style>
</head>
<body>
  <h1>Array 2-D Indexed</h1>
  <table border="1">
    <tr>
    <th>N<sup>o</sup></th>
    <th>Name</th>
    <th>Gender</th>
    <th>Salary</th>
    </tr>
    <?php
      $employees = [
        ["Dara","M", 500],
        ["Thida","F",400],
        ["Setha","F",600],
        ["Bopha","F",600],
        ["Lyda","F",100]
      ];
      //Display
      $total = 0;
      //Row
      for($r=0;$r<count($employees);$r++){
        //column
        echo("<tr>");
        echo("<td>" . ($r+1) . "</td>");
        for($c=0;$c<count($employees[$r]);$c++){
          echo "<td>" . $employees[$r][$c] . "</td>";
        }
        echo("</tr>");
        $total += $employees[$r][2];
      }
    ?>
    <tr><td colspan="3">Total Salary :</td><td><?php echo($total) ?></td></tr>
  </table>
</body>
</html>