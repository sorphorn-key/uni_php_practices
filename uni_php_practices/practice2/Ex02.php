<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2>HTML Form using GET</h2>
<form method="get" action="GET.php">
  <table>
    <tr>
      <td>Name : </td>
      <td><input type="text" name="txtname"></td>
    </tr>
    <tr>
      <td>Email : </td>
      <td><input type="email" name="txtemail"></td>
    </tr>
    <tr>
      <td colspan='2'>
        <input type="submit" name="submit" value="submit">
        <input type="reset" name="reset" value="reset">
      </td>
    </tr>
  </table>
</form>
</body>
</html>