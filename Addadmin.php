<!DOCTYPE html>
<html>
<head>
  <title>Submitted!</title>
</head>
<body>
  <?php
  header('Location: Admin.php');
  include_once("connection.php");
  array_map("htmlspecialchars",$_POST);
  $stmt = $conn->prepare("INSERT INTO TblAdmin
  (UserID,Surname,Forename,Password)VALUES
  (null,:surname,:forename,:password)");
  $stmt->bindParam(':forename',$_POST["forename"]);
  $stmt->bindParam(':surname',$_POST["surname"]);
  $stmt->bindParam(':password',$_POST["passwd"]);
  $stmt->execute();
  $conn=null;
  echo('Form submitted')
  ?>
</body>
</html>
