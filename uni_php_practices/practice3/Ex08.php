<?php
  $books = [
    ["111-111","History Cambodia",25,"pict01.jpg"],
    ["111-222","Angkor Khmer",22,"pict02.jpg"],
    ["111-333","Web Development",19,"pict03.jpg"],
    ["111-444","JavaScript",28,"pict04.jpg"],
    ["111-555","Social Shift",20,"pict05.jpg"]
  ];
  $filtered = $books;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["input"] ?? "";
    $choose = $_POST["choose"] ?? "";
  if (isset($_POST["find"])) {
    $filtered = [];
    foreach ($books as $index => $book) {
      if ($choose =="1" && stripos($book[0], $input) !== false) {
        $filtered[$index] = $book;
      }
      if ($choose =="2" && stripos($book[1], $input) !== false) {
        $filtered[$index] = $book;
      }
    }
  } elseif (isset($_POST["asc"])) {
    if ($choose =="1"){
    usort($filtered, function($a, $b) {
    return $a[0] <=> $b[0];
    });
    }
    if ($choose =="2"){
    usort($filtered, function($a, $b) {
    return $a[1] <=> $b[1];
    });
    }
  } elseif (isset($_POST["desc"])) {
    if ($choose =="1"){
    usort($filtered, function($a, $b) {
    return $b[0] <=> $a[0];
    });
    }
    if ($choose =="2"){
    usort($filtered, function($a, $b) {
    return $b[1] <=> $a[1];
    });
    }
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  table{
  width:100%;
  border-collapse: collapse;
  }
  td,th{
  text-align: center;
  }
  img{
  width: 80px;
  height: 90px;
  }
  </style>
</head>
<body>
  <h2>Array 2D - Search and Sort</h2>
  <form method="post">
    <select name="choose" id="choose">
    <option>--Choose--</option>
    <option value="1">ISBN</option>
    <option value="2">Title</option>
    </select>
    <input type="text" name="input">
    <button type="submit" name="find">Find</button>
    <button type="submit" name="asc">ASC</button>
    <button type="submit" name="desc">Desc</button>
  </form> <br>
  <table border="1">
    <tr>
      <th>No</th>
      <th>ISBN</th>
      <th>Title</th>
      <th>Price</th>
      <th>Picture</th>
    </tr>
    <?php foreach ($filtered as $index => $book): ?>
      <tr>
      <td><?php echo ($index+1); ?></td>
      <td><?php echo $book[0]; ?></td>
      <td><?php echo $book[1]; ?></td>
      <td><?php echo $book[2]; ?></td>
      <td><img src="images/<?php echo $book[3]; ?>"></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>