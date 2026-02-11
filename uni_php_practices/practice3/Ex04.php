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
  <h1>Array 2-D Associative</h1>
  <table border="1">
    <tr>
      <th>N<sup>o</sup></th>
      <th>Name</th>
      <th>Gender</th>
      <th>Salary</th>
    </tr>
    <?php
      $employees = [
        'EMP001' => [ 'Name' => "Dara", 'Gender' => 'M', 'Salary' => 500],
        'EMP002' => [ 'Name' => "Thida", 'Gender' => 'F', 'Salary' => 400],
        'EMP003' => [ 'Name' => "Setha", 'Gender' => 'F', 'Salary' => 600]
      ];
      //echo($employees['EMP002']['Name']);
      $total = 0;
      $row_num = 1;
      foreach ($employees as $key => $value) {
        echo("<tr>");
        echo("<td>$row_num</td>");
        foreach ($value as $k => $v) {
          echo("<td>$v</td>");
        }
        $total += $employees[$key]["Salary"];
        echo("</tr>");
        $row_num++;
      }
    ?>
    <tr><td colspan="3">Total Salary :</td><td><?php echo($total) ?></td></tr>
  </table>
</body>
</html>