<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','admin') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index1.php");
    }
?>
<html>
<head>
<title>User Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="card">
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>

<h3 align="center">ENTER LOGIN DETAILS</h3>
 <b>Username:</b><br>
 <input type="text" name="user_name" class="form-control">
 <br>
 <b>Password:</b><br>
<input type="password" name="password" class="form-control">
<br><br>
<input type="submit" name="submit" value="LOGIN" class="btn btn-success">
<input type="reset" value="RESET" class="btn btn-primary">

</form>
</div>
</body>
</html>
<style type="text/css">
    .card{
        position: relative;
        width: 380px;
        height: 300px;
        left: 380px;
        top: 150px;
    }
    body{
        background-color: gray;
    }
    .form-control{
        position: relative;
        width: 200px;
        left: 100px;
    }
</style>