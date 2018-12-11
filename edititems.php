<!DOCTYPE html>
<html>
<head>
  <title>Edit Food Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h3>Edit Food Information:</h3><br></br>
  <?php
  session_start();
  if ($_SESSION['ALogin'] != 'Y') {
    header("Location:login.php");
  }?>
  <form>
    Edit which item: <select name='Type'>
      <?php
    include_once('connection.php');
    $stmt = $conn->prepare("SELECT * FROM TblSandwich");
    $stmt->execute();
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      echo('<option value='.$row["FoodID"].'>'.'Sandwich: '.$row["Name"].', Price: '.$row["Price"].', Stock: '.$row["Stock"].'</option>');
    }
    $stmt = $conn->prepare("SELECT * FROM TblDrink");
    $stmt->execute();
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      echo('<option value='.$row["FoodID"].'>'.'Drink: '.$row["Name"].', Price: '.$row["Price"].', Stock: '.$row["Stock"].'</option>');
    }
    $stmt = $conn->prepare("SELECT * FROM TblSnack");
    $stmt->execute();
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      echo('<option value='.$row["FoodID"].'>'.'Snack: '.$row["Name"].', Price: '.$row["Price"].', Stock: '.$row["Stock"].'</option>');
    }
    $stmt = $conn->prepare("SELECT * FROM TblFruit");
    $stmt->execute();
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      echo('<option value='.$row["FoodID"].'>'.'Fruit: '.$row["Name"].', Price: '.$row["Price"].', Stock: '.$row["Stock"].'</option>');
    }
    ?>
    </select>
  </form>
</body>
</html>
