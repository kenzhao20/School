<!DOCTYPE html>
<html>
<head>
  <title>Logging in...</title>
</head>
<body>
  <?php
    try {
      include_once("connection.php");
      $ID = $_POST['ID'];
      $stmt = $conn->prepare("SELECT Password FROM TblPupils WHERE PupilID = $ID");
      $stmt -> execute();
      $password = $stmt->fetch(PDO::FETCH_ASSOC);
      $password = $password[Password];
      if ($password == $_POST["pssword"]) {
        session_start();
        $_SESSION['ID']=$ID;
        $_SESSION['SLogin']='Y';
        $_SESSION['Error1'] = 'N';
        $_SESSION['Error2'] = 'N';
        header("Location:order.php");
      }
      else {
        session_start();
        $_SESSION['Error1'] = 'Y';
        header("Location:login.php");
      }
    } catch (Exception $e) {
        $_SESSION['Error2'] = 'Y';
        header("Location:login.php");
    }

  ?>
</body>
</html>
