<!DOCTYPE html>
<html>
<head>
  <title>Input Admin Information</title>
</head>
<body>
  <h3>Enter Admin Information:</h3>
  <?php
  session_start();
  if ($_SESSION['ALogin'] != 'Y') {
    header("Location:login.php");
  }?>
  <form action="Addadmin.php" method="post">
    First name:<input type = "text" name = "forename"><br>
    Last name:<input type = "text" name = "surname"><br>
    Password:<input type = "password" name = "passwd"><br>
    <input type = "submit" value = "Add User">
  </form>
  <?php
    include_once('connection.php');
    $stmt = $conn->prepare("SELECT * FROM TblAdmin");
    $stmt->execute();
    echo("<br></br>Users:<br>");
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      echo($row["Forename"].' '.$row["Surname"]."<br>");
    }
  ?>
</body>
</html>
