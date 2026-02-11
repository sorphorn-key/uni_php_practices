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
  <h1> Array 2-D (Row : Associative, Column : Indexed)</h1>
  <table border="1">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Salary</th>
    </tr>
    <?php
      //Row : Associative, Column : Indexed
      $employees = [
        'EMP001' => ["Dara","M", 500],
        'EMP002' => ["Thida","F",400],
        'EMP003' => ["Setha","F",600]
      ];
      //Row : Associative
      foreach($employees as $key => $value){
        //column : Indexed
        echo("<tr>");
        echo("<td>$key</td>");
        for($i = 0;$i<count($value);$i++) {
          echo("<td>$value[$i]</td>");
        }
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>