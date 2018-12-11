<!DOCTYPE html>
<html>
<head>
  <title>Input Food Information</title>
  <meta charset="utf-9">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span=="icon-bar"></span>
  				<span=="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Logout</a>
  		</div>
  		<div class="collapse navbar-collapse" id="myNavbar">
  			<ul class="nav navbar-nav navbar-right">
          <li><a href="#" action="items.php">Add food items</a></li>
          <li><a href="#">Change food information</a></li>
  			</ul>
  		</div>
  	</div>
  </nav>
  <h3 class="text-center">Enter Food Information:</h3><br></br>
  <?php
  session_start();
  if ($_SESSION['ALogin'] != 'Y') {
    header("Location:login.php");
  }?>
  <form action="additems.php" method="post">
    Name:<input type = "text" name = "name">
    Price:<input type = "number" name = "price">
    Stock:<input type = "number" name = "stock">
    Type<select name = "type">
      <option value = "S">Sandwich</option>
      <option value = "D">Drink</option>
      <option value = "Sn">Snac</option>
      <option value = "F">Fruit</option>
    </select>
    <input type = "submit" value = "Add food">
  </form>
  <?php
    include_once('connection.php');
    $stmt = $conn->prepare("SELECT * FROM TblSandwich");
    $stmt->execute();
    echo("<br></br>Sandwiches:<br>");
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      echo($row["Name"]."<br>");
    }
    $stmt = $conn->prepare("SELECT * FROM TblDrink");
    $stmt->execute();
    echo("<br></br>Drinks:<br>");
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      echo($row["Name"]."<br>");
    }
    $stmt = $conn->prepare("SELECT * FROM TblSnack");
    $stmt->execute();
    echo("<br></br>Snacks:<br>");
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      echo($row["Name"]."<br>");
    }
    $stmt = $conn->prepare("SELECT * FROM TblFruit");
    $stmt->execute();
    echo("<br></br>Fruit:<br>");
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      echo($row["Name"]."<br>");
    }
  ?>
</body>
</html>
