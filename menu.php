<!DOCTYPE html>
<html>
<head>
  <title>Menu</title>
  <meta charset="utf-9">
</head>
<body>
  <?php
  session_start();
  if ($_SESSION['ALogin'] != 'Y') {
    header("Location:login.php");
  }
  ?>
  <h3>Welcome to the pack lunch menu:</h3><br></br>
  <form action="Pupils.php">
    <input type="submit" value="Add pupils"</input>
  </form>
  <form action="items.php">
    <input type="submit" value="Add items"</input>
  </form>
  <form action="edititems.php">
    <input type="submit" value="Edit items"</input>
  </form>
  <form action="Admin.php">
    <input type="submit" value="Add admins"</input>
  </form>
</body>
</html>
