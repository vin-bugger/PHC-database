
 
<?php 
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('navigation.php'); 
} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?> 
<html> 
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			text-decoration: none;
			box-sizing: border-box;
		}
		body{
			min-height: 100vh;
			background-image: linear-gradient(150deg, #3498db,#8e44ad);
		}
		form{
			width: 460px;
			background: #f1f1f1;
			height: 500px;
			padding: 80px 40px;
			border-radius: 10px;
			position: absolute;
			left: 50%;
			top: 60%;
			transform: translate(-50%, -60%);
		}
		.txt{
			border-bottom: 2px solid #adadad;
			position: relative;
			margin: 30px 0;
		}
		.txt input{
			font-size: 15px;
			color: #333;
			border: none;
			width: 100%;
			outline: none;
			background: none;
			padding: 0 5px;
			height: 40px;
		}
		.txt span::before{
			content: attr(data-placeholder);
			position: absolute;
			top: 50%;
			left: 5px;
			color: #adadad;
			transform: translateY(-50%);
			z-index: -1;
			transition: .5s;
		}
		.txt span::after{
			content: '';
			position: absolute;
			width: 0%;
			height: 2px;
			/*background: linear-gradient(120deg,#3498db,#8e44ad);*/
			transition: .5s;
		}
		.focus + span::before{
			top: -5px;
		}
		.focus + span::after{
			width: 100%;
		}
		.btn{
			margin-top: 20px;
			margin-left: 130px;
			display: inline-block;
			width: 20%;
			height: 30px;
			border: none;
			background: linear-gradient(120deg,#3498db,#8e44ad,#3498db);
			background-size: 200%;
			color: #fff;
			outline: none;
			cursor: pointer;
			transition: .5s;
		}
	</style>
</head>
<body>  
<form action="edit_prescription.php" method="post">
	<h2 style="color: #55efc4;">Prescribed Medicines</h2>
<!-- <div class="txt">
	<input type="text" name="p_no" maxlength="15">
	<span data-placeholder="Patient No*"></span>
</div> -->
<div class="txt">
	<input type="text" name="drug_name" maxlength="20">
	<span data-placeholder="Medicine Name"></span>
</div>
<div class="txt">
	<input type="number" name="quantity" maxlength="3">
	<span data-placeholder="Quantitiy"></span>
</div>

<input type="submit" class="btn" name="submit" value="Insert"> 


<input type="submit" class="btn" name="done" value="Done"> 


</form>

<!-- javascript -->
<script type="text/javascript">
$(".txt input").on("focus", function(){
	$(this).addClass("focus");
});

$(".txt input").on("blur", function(){
	if($(this).val()=="")
	$(this).removeClass("focus");
});
</script>

</body> 
</html>
