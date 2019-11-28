
 
<?php 
session_start(); 
session_unset(); 
session_destroy(); 
?> 
<html> 
<head> 
<title>Login Page</title> 
<style type="text/css">
	/*h3{
		color: #9fcfbb;
		align-self: right;
		padding-top: 20px;
	}*/
	body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		min-height: 100vh;
		background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url(https://images.pexels.com/photos/1250655/pexels-photo-1250655.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
		background-repeat: no-repeat;
		background-size: cover;
	}
	.box{
		width: 400px;
		height: 400px;
		padding: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		background: #191919;
		text-align: center;
	}
	.box h1{
		color: white;
		text-transform: uppercase;
		font-weight: 500;
	}
	.box input[type="text"], .box input[type="password"]{
		border: 0;
		background: none;
		display: block;
		margin: 30px auto;
		text-align: center;
		border: 2px solid #3498db;
		padding: 18px 10px;
		width: 200px;
		outline: none;
		color: white;
		border-radius: 30px;
		transition: 0.25s;
	}
	.box input[type="text"]:focus, .box input[type="password"]:focus{
		width: 230px;
		border-color: #2ecc71;
	}
	.box input[type="submit"]{
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid #2ecc71;
		padding: 14px 40px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
		cursor: pointer;
	}
	.box input[type="submit"]:hover{
		background: #2ecc71;
	}
</style>
</head> 
<body> 

<form name="myloginForm" method="post" action="login_check.php" class="box"> 
	<h1> login  </h1> 
	<input type="text" name="login" placeholder="Username">
	<input type="password" name="password" placeholder="Password">
	<input type="submit" name="submit" value="Login">
</form>
</body> 
</html>
