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
      $stmt = $conn->prepare("SELECT Password FROM TblAdmin WHERE UserID = $ID");
      $stmt -> execute();
      $password = $stmt->fetch(PDO::FETCH_ASSOC);
      $password = $password[Password];
      if ($password == $_POST["pssword"]) {
        session_start();
        $_SESSION['ALogin'] = "Y";
        $_SESSION['Error1'] = 'N';
        $_SESSION['Error2'] = 'N';
        header("Location:menu.php");
      }
      else {
        header("Location:login.php");
        $_SESSION['Error1'] = 'Y';
      }
    } catch (Exception $e) {
        header("Location:login.php");
        $_SESSION['Error2'] = 'Y';
    }

  ?>
</body>
</html>
