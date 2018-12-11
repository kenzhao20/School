<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%;
}

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    font-size: 30px;
    cursor: pointer;
}


.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}


@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<h2>Login</h2>

<?php
    session_start();
    if ($_SESSION['Error1'] = 'Y') {
      echo('<script> alert("Error loggin in: ID and password don\'t match");</script>');
    }
    elseif ($_SESSION['Error2'] = 'Y') {
      echo('<script> alert("Error logging in: ID not on system");</script>');
    }
  ?>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Admin Login</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Student Login</button>

<div id="id01" class="modal">

  <form class="modal-content animate" action="Adloggingin.php" method="POST">

    <div class="container">
      <label for="Id"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="ID" required>

      <label for="pssword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pssword" required>

      <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<div id="id02" class="modal">

  <form class="modal-content animate" action="Stuloggingin.php" method="POST">

    <div class="container">
      <label for="ID"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="ID" required>

      <label for="ID"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pssword" required>

      <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
