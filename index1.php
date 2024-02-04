<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div id="head">
<?php
if($_SESSION["name"]) {
?>
<div id="headtwo">
<span class="badge bg-secondary"><b>Welcome</b></span> <?php echo $_SESSION["name"]; ?> <a href="logout.php" tite="Logout"><span id="logout"><button class="btn btn-primary">Logout.</button><span></span>
<?php
}else echo "<h1>Please login first .</h1>";
?>
</div>
</div>
</body>
</html>
<style type="text/css">
	#head{
		position: relative;
		width: 1500px;
		height: 100px;
		background-color: #9494b8;
	}
	#logout{
		position: relative;
		left: 1000px;
		
	}
	#headtwo{
		position: relative;
		background-color: white;
		width: 1500px;
		height: 40px;
		top: 100px;
	}
	body{
		background-color: gray;
	}
</style>