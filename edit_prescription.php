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
if(!($_POST['drug_name']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
// $p_no = $_POST['p_no']; 
$drug_name = $_POST['drug_name']; 
$quantity = $_POST['quantity']; 
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
// Create Insert query 
// $query1 = "select max(patient_no) from patient_entry";
$pn = mysqli_query($link,"select max(patient_no) m from patient_entry"); 

$tn = mysqli_fetch_assoc($pn);
$p_no = (int)$tn['m']; 


$query = "INSERT INTO prescription (p_no, drug_name, quantity) VALUES ('$p_no','$drug_name', '$quantity')"; 
//Execute query 
$results = mysqli_query($link,$query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysqli_error($link) . '<br>'; 
else
	header('location: register_prescription.php ');

} 
} 
if ($_POST['done'] == 'Done'){
	header('location: main_page.php');
}
 

 


// Code to be executed when 'Update' is clicked. 
// Code to be executed when 'Delete' is clicked. 

} 

// if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
// 	if ($_POST['submit'] == 'Done'){
// 	header('location: main_page.php');
// }
// }

else{ 
header('location:login_form.php'); 
exit(); 
} 
?>
