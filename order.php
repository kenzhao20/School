<!DOCTYPE html>
<html>
<head>
  <title>Order</title>
</head>
<body>
  <h3>Order pack lunch for today:</h3><br></br>
  <form action="orderlunch.php" method="post">
    Pupil:
    <?php
      include_once("connection.php");
      session_start();
      if ($_SESSION['SLogin'] != 'Y') {
        header("Location:login.php");
      }
      $ID = $_SESSION["ID"];
      $stmt = $conn->prepare("SELECT Surname, Forename FROM TblPupils WHERE PupilID = $ID");
      $stmt->execute();
      $stmt=$stmt->fetch(PDO::FETCH_ASSOC);
      echo($stmt['Surname'].', '.$stmt['Forename'])?>
    <br>Sandwich: <select name = "Sandwich">
      <?php
        $stmt = $conn->prepare("SELECT * FROM TblSandwich ORDER BY Name ASC");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo('<option value='.$row["FoodID"].'>'.$row["Name"].'</option>');
        }
      ?>
    </select>
    Drinks: <select name = "Drink">
      <?php
        $stmt = $conn->prepare("SELECT * FROM TblDrink ORDER BY Name ASC");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo('<option value='.$row["FoodID"].'>'.$row["Name"].'</option>');
        }
      ?>
    </select>
    Fruit: <select name = "Fruit">
      <?php
        $stmt = $conn->prepare("SELECT * FROM TblFruit ORDER BY Name ASC");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo('<option value='.$row["FoodID"].'>'.$row["Name"].'</option>');
        }
      ?>
    </select>
    Snack: <select name = "Snack">
      <?php
        $stmt = $conn->prepare("SELECT * FROM TblSnack ORDER BY Name ASC");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo('<option value='.$row["FoodID"].'>'.$row["Name"].'</option>');
        }
      ?>
    </select>
    Date:<input type = 'date' name = 'Date' required>
    <input type = "submit" value = "Order">
  </form>
</body>
</html>
