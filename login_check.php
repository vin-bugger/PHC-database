
<?php 
if ($_POST['submit'] == 'Login'){ 
//Collect POST values 
$login = $_POST['login']; 
$password = $_POST['password']; 
if($login && $password){ 
//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', ''); 
//Check link to the mysql server 
if(!$link) { 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysqli_select_db($link, 'phc'); 
if(!$db) { 
die("Unable to select database"); 
} 
//Create query (if you have a Logins table the you can select login id and password from there)
//$qry='SELECT * FROM Logins WHERE login_id = "123" AND password = "123"'; 
//Execute query 
//$result=mysql_query($qry); 
//Check whether the query was successful or not 
if($login == '123' && $password =='123'){ 
//$count = mysql_num_rows($result);
$count = 1; 
} 
else{ 
//Login failed 
include('login_form.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
//if query was successful it should fetch 1 matching record from the table. 
if( $count == 1){ 
//Login successful set session variables and redirect to main page. 
session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $login; 
header('location:main_page.php'); 
} 
else{ 
//Login failed 
include('login_form.php'); 
echo '<h3><center>Incorrect Username or Password !!!</center></h3>'; 
exit(); 
} 
} 
else{ 
include('login_form.php'); 
echo '<h3><center>Username or Password missing!!</center></h3>'; 
exit(); 
} 
} 
else{ 
header("location: login_form.php"); 
exit(); 
} 
?>
