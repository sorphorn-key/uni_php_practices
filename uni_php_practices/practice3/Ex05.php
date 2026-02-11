<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ex05</title>
  <style type="text/css">
  table{
    width:100%;
    border-collapse: collapse;
  }
  </style>
</head>
<body>
  <h1> Array 2-D(Row : Indexed, Column : Associative)</h1>
  <table border="1">
    <tr>
      <th>N<sup>o</sup></th>
      <th>Name</th>
      <th>Gender</th>
      <th>Salary</th>
    </tr>
    <?php
      //Row : Indexed, Column : Associative
      $employees = [
        [ 'Name' => "Dara", 'Gender' => 'M', 'Salary' => 500],
        [ 'Name' => "Thida", 'Gender' => 'F', 'Salary' => 400],
        [ 'Name' => "Setha", 'Gender' => 'F', 'Salary' => 600]
      ];
      //Row : Indexed
      for($r=0;$r<count($employees);$r++){
        //Column : Associative
        echo("<tr>");
        echo("<td>" . ($r+1) . "</td>");
        foreach ($employees[$r] as $key => $value) {
          echo("<td>$value</td>");
        }
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>