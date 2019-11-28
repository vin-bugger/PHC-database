<!DOCTYPE html>
<html>
<head>
	<title>Primary Health Center IIITDMJ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/3d1612f8ca.js" crossorigin="anonymous"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			text-decoration: none;
			box-sizing: border-box;
		}
		.main{
			background: linear-gradient(rgba(255,255,255,.05), rgba(255,255,255,.05)), url(hospitl.jpeg);
			
			position:relative;
		  	background-size: 100% 100%;
		 	background-repeat: no-repeat;
			background-position: center;
		   	height:420px;
		   	display: table;
		   	width:100%;
		   	font-size:20px;
		   	color:#fff;
		}
		
		
		table{
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 1.05em;
			min-width: 400px;
			border-radius: 5px 5px 0 0;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			z-index: 999;
		}
		table th{
			background-color: #009879;
			color: #ffffff;
			font-weight: bold;
		}
		table th, table td{
			padding:10px 12px;
		}
		table tr{
			border-bottom: 1px solid #dddddd;
		}
		table tr:nth-of-type(3n-1){
			background-color: #f3f3f3;
		}
		table tr:last-of-type{
			border-bottom: 2px solid #009879;
		}

		.space{
			background-color: #fffff0;
			margin-bottom: 100px;
		}

    .entry{
      margin-top: 100px;
      margin-bottom: 100px;
    }

		.card-deck{
			margin-top: 10px;
			margin-bottom: 30px;
		}
    .entry .h1{
      color: #3d3231;  
    }
		/*.card-deck .row{
			margin-bottom: 50px;
		}*/
    /*.card-deck .row .card{
      margin: auto;
    }*/




    /*.card-deck .row .card : hover {
    transform: translateY(-20px);
    background-position: center 100%;
    background-size: 105%;
    box-shadow: 0px 0px 20px 0px rgba(119,119,119, 0.6);    
  }*/
		

		footer{
			background-color: #383aa6;
			color: #fff;
		}
    .pb-3 .col-md-12 .mb-5 .fab{
      float: right;
    }
	
	</style>
</head>
<body>

<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the session variable for user authentication is set, if not redirect to login page. 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//include the menu 
require('navigation.php'); 
echo '<div class="main">

</div>

<div class="entry"  style="background-color: #FFFDD0;">

<center><h1>Entry Register</h1></center>
<div class="card-deck" style="padding: 50px 0 50px 0;">


 
  <div class="card col-xl-4">
    <a href="register_medicine.php"><img src="med.jpg" class="card-img-top" alt="medicine"></a>
    <div class="card-body">
      <h5 class="card-title">Medicines</h5>
    </div> 
  </div>




  <div class="card col-xl-4">
    <a href="register_patient.php"><img src="hospital-stay.jpg" class="card-img-top" alt="patient"></a>
    <div class="card-body">
      <h5 class="card-title">Patients</h5>
    </div>
  </div>
  

  
  <div class="card col-xl-4">
    <a href="register_prescription.php"><img src="pres.jpg" class="card-img-top" alt="prescription"></a>
    <div class="card-body">
      <h5 class="card-title">Prescription</h5>
    </div>
  </div>
 

</div>
</div>


<div class="entry"  style="background-color: #FFFDD0;">

<center><h1>View Register</h1></center>
<div class="card-deck" style="padding: 50px 0 50px 0;">


 
  <div class="card col-xl-4">
    <a href="view_medicine.php"><img src="capsules.jpg" class="card-img-top" alt="medicine"></a>
    <div class="card-body">
      <h5 class="card-title">Medicines</h5>
    </div> 
  </div>




  <div class="card col-xl-4">
    <a href="view_patient.php"><img src="det.jpg" class="card-img-top" alt="patient"></a>
    <div class="card-body">
      <h5 class="card-title">Entry Resister</h5>
    </div>
  </div>
  

  
  <div class="card col-xl-4">
    <a href="view_prescription.php"><img src="presc.png" class="card-img-top" alt="prescription"></a>
    <div class="card-body">
      <h5 class="card-title">Prescription</h5>
    </div>
  </div>
 

</div>
</div>

<!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="Committee.pdf">Commitee Members</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="New Guidelines 12-12-2017.pdf">New Guidelines</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="PHC Doctor Duty Chart.pdf">Duty Roster</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Doctors</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Contact</a>
        </h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem">The medical profession has long subscribed to a body of ethical statements developed primarily for the benefit of the patient. As a member of this profession, a physician must recognize responsibility to patients first and foremost, as well as to society, to other health professionals, and to self. The following Principles adopted by the American Medical Association are not laws, but standards of conduct that define the essentials of honorable behavior for the physician.
</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-5 flex-center">

        <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
          </a>
          <!-- Facebook -->
          <a class="fb-ic" href="https://www.facebook.com/iiitdm.jbp">
            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
          </a>
          

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://www.iiitdmj.ac.in/students/PHC.php">IIITDMJ-PHC</a>
  </div>
  <!-- Copyright -->

</footer>



'; 
exit(); 
} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?>


</body>
</html>