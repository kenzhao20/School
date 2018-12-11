<!DOCTYPE html>
<html>
<head>
  <title>Submitted!</title>
</head>
<body>
  <?php
  header('Location: items.php');
  include_once("connection.php");
  array_map("htmlspecialchars",$_POST);
  if ($_POST["type"]=='S'){
    $stmt = $conn->prepare("INSERT INTO TblSandwich
    (FoodID,Name,Price,Stock)VALUES
    (null,:name,:price,:stock)");
  }elseif ($_POST["type"]=='Sn'){
    $stmt = $conn->prepare("INSERT INTO TblSnack
    (FoodID,Name,Price,Stock)VALUES
    (null,:name,:price,:stock)");
  }elseif ($_POST["type"]=='D'){
    $stmt = $conn->prepare("INSERT INTO TblDrink
    (FoodID,Name,Price,Stock)VALUES
    (null,:name,:price,:stock)");
  }else {
    $stmt = $conn->prepare("INSERT INTO TblFruit
    (FoodID,Name,Price,Stock)VALUES
    (null,:name,:price,:stock)");
  }
  $stmt->bindParam(':name',$_POST["name"]);
  $stmt->bindParam(':price',$_POST["price"]);
  $stmt->bindParam(':stock',$_POST["stock"]);
  $stmt->execute();
  $conn=null;
  echo('Form submitted')
  ?>
</body>
</html>
