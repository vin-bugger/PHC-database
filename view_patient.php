<!DOCTYPE html>

<head>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			text-decoration: none;
			box-sizing: border-box;
		}
		body{
			min-height: 100vh;
			background-color: #E9E9E9;
		}
		h1{
			color: #5635ab;
			margin-top: 30px;
			text-align: center;
		}
		table{
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 1em;
			min-width: 400px;
			border-radius: 5px 5px 0 0;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
			position: relative;
    		margin-left: auto;
    		margin-right: auto;
		}
		table th{
			background-color: #009879;
			color: #ffffff;
			text-align: left;
			font-weight: bold;
		}
		table th, table td{
			padding:10px 12px;
		}
		table tr{
			border-bottom: 1px solid #dddddd;
		}
		table tr:nth-of-type(even){
			background-color: #f3f3f3;
		}
		table tr:last-of-type{
			border-bottom: 2px solid #009879;
		}
	</style>
</head>
<body>
 
<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('navigation.php'); 
 
 /*Connect to mysql server*/ 
$link = mysqli_connect('localhost', 'root', '');  

/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysqli_error());
 } 

/*Select database*/ 
$db = mysqli_select_db($link,'phc'); 
if(!$db)
{
 die("Unable to select database"); 
}

 /*Create query*/ 
$qry = 'SELECT * FROM patient_entry'; 

/*Execute query*/ 
$result = mysqli_query($link,$qry);
echo '<h1>The Patient Details are - </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> patient_no </th> 
<th> P_Ssn </th>
 <th> D_Ssn </th>
  <th> Age </th>
   <th> visit_date </th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysqli_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['patient_no'].'</td>
<td>'.$row['P_Ssn'].'</td>
<td>'.$row['D_Ssn'].'</td>
<td>'.$row['Age'].'</td>
<td>'.$row['visit_date'].'</td>

</tr>'; 
}

echo '</table>';
} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?>



</body>
</html>