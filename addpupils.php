<!DOCTYPE html>
<html>
<head>
  <title>Submitted!</title>
</head>
<body>
  <?php
  session_start();
  if ($_SESSION['ALogin'] != 'Y') {
    header("Location:login.php");
  }
  header('Location: Pupils.php');
  include_once("connection.php");
  array_map("htmlspecialchars",$_POST);
  $stmt = $conn->prepare("INSERT INTO TblPupils
  (PupilID,Surname,Forename,Password,House)VALUES
  (null,:surname,:forename,:password,:house)");
  $stmt->bindParam(':forename',$_POST["forename"]);
  $stmt->bindParam(':surname',$_POST["surname"]);
  $stmt->bindParam(':house',$_POST["house"]);
  $stmt->bindParam(':password',$_POST["passwd"]);
  $stmt->execute();
  $conn=null;
  echo('Form submitted')
  ?>
</body>
</html>
