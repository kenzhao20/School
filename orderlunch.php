<!DOCTYPE html>
<html>
<head>
  <title>Submitted!</title>
</head>
<body>
  <?php
  include_once("connection.php");
  session_start();
  $ID = $_SESSION["ID"];
  array_map("htmlspecialchars",$_POST);
  $stmt = $conn->prepare("INSERT INTO TblOrders
  (PupilID,OrderID,Sandwich,Drink,Snack,Fruit,Date)VALUES
  (:Pupils,null,:Sandwich,:Drink,:Snack,:Fruit,:Date)");
  $stmt->bindParam(':Pupils',$ID);
  $stmt->bindParam(':Sandwich',$_POST["Sandwich"]);
  $stmt->bindParam(':Drink',$_POST["Drink"]);
  $stmt->bindParam(':Snack',$_POST["Snack"]);
  $stmt->bindParam(':Fruit',$_POST["Fruit"]);
  $stmt->bindParam(':Date',$_POST["Date"]);
  $stmt->execute();
  $conn=null;
  echo('Form submitted')
  ?>
</body>
</html>
