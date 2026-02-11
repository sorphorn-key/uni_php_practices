<?php
  $customers = [
    ["C001","Dara","012 345 678","dara@example.com","pict06.jpg"],
    ["C002","Thida","098 234 567","thida@example.com","pict07.jpg"],
    ["C003","Sophea","097 456 789","sophea@example.com","pict08.jpg"],
    ["C004","Visal","011 987 654","visal@example.com","pict09.jpg"],
    ["C005","Sreynith","015 112 233","sreynith@example.com","pict10.jpg"],
    ["C006","Rathana","010 778 899","rathana@example.com","pict11.jpg"],
    ["C007","Chanty","069 556 677","chanty@example.com","pict12.jpg"]
  ];
  $filtered = $customers;

  // Check if page sent datas using POST method
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from <form>...</form>
    $input = $_POST["input"] ?? "";
    $choose = $_POST["choose"] ?? "";

    if (isset($_POST["find"])) {
      $filtered = [];

      foreach ($customers as $index => $customer) {
        if ($choose == "1" && stripos($customer[0], $input) !== false) {
          $filtered[$index] = $customer;
        }
        
        if ($choose == "2" && stripos($customer[1], $input) !== false) {
          $filtered[$index] = $customer;
        }
        
        if ($choose == "3" && stripos($customer[2], $input) !== false) {
          $filtered[$index] = $customer;
        }
        
        if ($choose == "4" && stripos($customer[3], $input) !== false) {
          $filtered[$index] = $customer;
        }
      }
    } elseif (isset($_POST["asc"])) {
      if ($choose == "1") {
        usort($filtered, function($a, $b) {
          return $a[0] <=> $b[0];
        });
      }

      if ($choose == "2") {
        usort($filtered, function($a, $b) {
          return $a[1] <=> $b[1];
        });
      }

      if ($choose == "3") {
        usort($filtered, function($a, $b) {
          return $a[2] <=> $b[2];
        });
      }

      if ($choose == "4") {
        usort($filtered, function($a, $b) {
          return $a[3] <=> $b[3];
        });
      }
    } elseif (isset($_POST["desc"])) {
      if ($choose == "1") {
        usort($filtered, function($a, $b) {
          return $b[0] <=> $a[0];
        });
      }

      if ($choose == "2") {
        usort($filtered, function($a, $b) {
          return $b[1] <=> $a[1];
        });
      }

      if ($choose == "3") {
        usort($filtered, function($a, $b) {
          return $b[2] <=> $a[2];
        });
      }

      if ($choose == "4") {
        usort($filtered, function($a, $b) {
          return $b[3] <=> $a[3];
        });
      }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style>
    .customer-pict {
      height: 70px;
    }

    th, td {
      min-width: 200px;
      padding-left: 10px;
    }
  </style>
</head>
<body>
  <h1>Practice03 - Example11</h1>
  <form method="post">
    <select name="choose" id="choose">
      <option>--Choose--</option>
      <option value="1" <?php echo ($choose == "1") ? "selected" : ""; ?>>ID</option>
      <option value="2" <?php echo ($choose == "2") ? "selected" : ""; ?>>Name</option>
      <option value="3" <?php echo ($choose == "3") ? "selected" : ""; ?>>Phone</option>
      <option value="4" <?php echo ($choose == "4") ? "selected" : ""; ?>>Email</option>
    </select>

    <input type="text" name="input">
    <button type="submit" name="find">Find</button>
    <button type="submit" name="asc">ASC</button>
    <button type="submit" name="desc">Desc</button>
  </form><br>

  <table border="1" style="border-collapse: collapse;">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Photo</th>
    </tr>

    <?php foreach ($filtered as $index => $customer):?>
      <tr>
        <td><?php echo $customer[0]; ?></td>
        <td><?php echo $customer[1]; ?></td>
        <td><?php echo $customer[2]; ?></td>
        <td><?php echo $customer[3]; ?></td>
        <td><img class="customer-pict" src="images/<?php echo $customer[4]; ?>"></td>
      </tr>
    <?php endforeach;?>
  </table>
</body>
</html>