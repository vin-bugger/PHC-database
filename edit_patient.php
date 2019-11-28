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
if(!($_POST['P_Ssn']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
// $patient_no = $_POST['patient_no']; 
$P_Ssn = $_POST['P_Ssn']; 
$D_Ssn = $_POST['D_Ssn']; 
$Age = $_POST['Age']; 
$visit_date = $_POST['visit_date']; 
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
$query = "INSERT INTO patient_entry (P_Ssn, D_Ssn, Age, visit_date) VALUES ('$P_Ssn','$D_Ssn','$Age','$visit_date')"; 
//Execute query 
$results = mysqli_query($link,$query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysqli_error($link) . '<br>'; 
else
	header('location: register_prescription.php ');

} 
} 
 
// Code to be executed when 'Update' is clicked. 

// Code to be executed when 'Delete' is clicked. 

} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?>
