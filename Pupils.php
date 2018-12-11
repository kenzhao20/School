<!DOCTYPE html>
<html>
<head>
  <title>Input Pupil Information</title>
</head>
<body>
  <h3>Enter Pupil Information:</h3>
  <form action="addpupils.php" method="post">
    First name:<input type = "text" name = "forename"><br>
    Last name:<input type = "text" name = "surname"><br>
    Password:<input type = "password" name = "passwd"><br>
    House:<select name="house">
      <option selected="selected">Choose one</option>
      <?php
       $houses = array('Brampston','Crosby','Dryden','Fisher','Grafton','Kirkeby','Laundimer','Laxton','New House','Sanderson','School House','Scott House','Sidney','St Anthony','Berrystead','Wyatt');
       foreach($houses as $house){
        ?>
        <option value="<?php echo ($house); ?>" name="<?php echo ($house); ?>"><?php echo $house; ?></option>
      <?php } ?>
    </select>
    </select>
    <input type = "submit" value = "Add User">
  </form>
  <?php
    include_once('connection.php');
    $stmt = $conn->prepare("SELECT * FROM TblPupils");
    $stmt->execute();
    echo("<br></br>Users:<br>");
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      echo($row["Forename"].' '.$row["Surname"].' - '.$row["House"]."<br>");
    }
  ?>
</body>
</html>
