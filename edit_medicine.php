<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('navigation.php'); 
// Code to be executed when 'Insert' is clicked. 
if ($_POST['submit'] == 'Insert'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['m_name']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$m_name = $_POST['m_name']; 
$price = $_POST['price']; 
$in_stock = $_POST['in_stock']; 
}


//If all validations are correct, connect to MySQLi and execute the query 
if($validationFlag){ 
//Connect to mysqli server 
$link = mysqli_connect('localhost', 'root', ''); 
//Check link to the mysqli server 
if(!$link){ 
die('Failed to connect to server: ' . mysqli_error($link)); 
} 
//Select database 
$db = mysqli_select_db($link,'phc'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Create Insert query 
$query = "INSERT INTO medicines (m_name, in_stock, price) VALUES ('$m_name','$in_stock','$price')"; 
//Execute query 
$results = mysqli_query($link,$query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysqli_error($link) . '<br>'; 
else 
header('location: register_medicine.php');
} 
} 
 
// Code to be executed when 'Update' is clicked. 
if ($_POST['submit'] == 'Update'){ 
if(!$_POST['m_name']) 
echo 'Enter the name of the medicines as it is the primary key.'; 
else{ 
$validationFlag = true;

$m_name = $_POST['m_name']; 
$price = $_POST['price']; 
$in_stock = $_POST['in_stock']; 
 
//$update = "UPDATE medicines SET m_name = '$m_name'"; 
if($_POST['in_stock']){ 
$update = "UPDATE medicines SET in_stock = '$in_stock' WHERE m_name = '$m_name'"; 
} 
if($_POST['price']){ 
$update = "UPDATE medicines SET price = '$price' WHERE m_name = '$m_name'"; 
} 

//If all validations are correct, connect to MySQLi and execute the query 
if($validationFlag){ 
//Connect to mysqli server 
$link = mysqli_connect('localhost', 'root', ''); 
//Check link to the mysqli server 
if(!$link){ 
die('Failed to connect to server: ' . mysqli_error($link)); 
} 
//Select database 
$db = mysqli_select_db($link,'phc'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Execute query 
$results = mysqli_query($link,$update); 
if($results == FALSE) 
echo mysqli_error($link) . '<br>'; 
else 
header('location: register_medicine.php');
} 
} 
} 
// Code to be executed when 'Delete' is clicked. 
if($_POST['confirm'] == 'Confirm'){
	header('location: main_page.php');
}
} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?>
