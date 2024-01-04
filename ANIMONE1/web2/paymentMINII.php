<!doctype html>
<?php
   ob_start();
   session_start();

?>
<html lang="en">
<style>
		
        
img {
  image-rendering: auto;
 
}

*{
    margin:0;
        padding:0;
        box-sizing: border-box;
	-webkit-font-smoothing: auto;
  -moz-osx-font-smoothing: grayscale;
}


#countdown
    {
        background-color: red;
        display:flex;
        text-align:center;
        align-item:center;
        justify-content: center;
        font-size: 20px;
        margin: 0;
        height:30px;
        width:635px;
    }


    .background
    {
        background-color:LightBlue;
    }
		footer {
			clear: both;
			position:fixed;
			height: 50px;
			margin-top: -200px;
			overflow-block:auto;

			
		}

		#waves
		{
			z-index:-1;
			position:absolute;
			top:0;
			left: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
		}
		
		.header
		{
            box-sizing: border-box;
  padding: 1em;
 
  border-radius: 25px;
  color: white;
 
  box-shadow: 5px 5px 10px #ccc;
  
  margin-right: 1em;
			margin-top: 100%;
			margin-top: 100%;
        }
		
	
		   
		   @import url(https://fonts.googleapis.com/css?family=Open+Sans:600);


		  
		   html
		   {
			   
			   height: 100%;
			  
		   }
		  
		 

  
  /* Set a style for all buttons */
  button {
	background-color: #04AA6D;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
  }
  
  button:hover {
	opacity: 0.8;
  }
  
  /* Extra styles for the cancel button */
  .cancelbtn {
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
  }
  
  /* Center the image and position the close button */
  .imgcontainer {
	text-align: center;
	margin: 24px 0 12px 0;
	position: relative;
	height: 50%;
	width: 50%;
	
  }
  .hide{
	display:none
  }
  
  
  
  .containers {
	padding: 16px;
  }
  
  span.psw {
	float: right;
	padding-top: 16px;
  }
  
  /* The Modal (background) */
  
  
  /* Modal Content/Box */
  
  
  /* The Close Button (x) */
  .
  
  
  
  /* Add Zoom Animation */
  
	</style>
	  
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>payments</title>
   

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">

	function getConsultant()
{
if (consultent.value=="PROF SURANJITH SENEVIRATNE")
{
document.getElementById("speciality").value="ALLERGIST";
}
else if (consultent.value=="PROF ANURA WEERASINGHE")
{
document.getElementById("speciality").value="ALLERGIST";
}
else if (consultent.value=="PROF (MRS.) G. NEELIKA MALAVIGE")
{
document.getElementById("speciality").value="ALLERGIST";
}
else if (consultent.value=="DR AJITH AMARASINGHE")
{
document.getElementById("speciality").value="ALLERGIST";
}
else if (consultent.value=="DR ATHULA ABEYSUNDARA")
{
document.getElementById("speciality").value="DENTIST";
}
else if (consultent.value=="DR SARATH AMARADASA")
{
document.getElementById("speciality").value="DENTIST";
}
else if (consultent.value=="DR W M HILARY COORAY")
{
document.getElementById("speciality").value="DENTIST";
}
else if (consultent.value=="DR NASAR ABDULWADOOD")
{
document.getElementById("speciality").value="DENTIST";
}
else if (consultent.value=="DR KANCHANA SINGAPPULI")
{
document.getElementById("speciality").value="PEDIATRICIAN";
}
else if (consultent.value=="DR (MRS) P.P. FERNANDO")
{
document.getElementById("speciality").value="SURGEON";
}
else if (consultent.value=="DR A. KAILAINATHAN")
{
document.getElementById("speciality").value="SURGEON";
}
else if (consultent.value=="DR A.S. WITHANAGE")
{
document.getElementById("speciality").value="SURGEON";
}
else if (consultent.value=="DR (MRS) AJANTHA LIYANAGE")
{
document.getElementById("speciality").value="THEROPIST";
}
else if (consultent.value=="DR (MRS) C .SELVI PERERA")
{
document.getElementById("speciality").value="THEROPIST";
}
else if (consultent.value=="DR A.S.L LIYANARACHCHI")
{
document.getElementById("speciality").value="CARDIOLOGIST";
}
else if (consultent.value=="DR ANIL KUMAR")
{
document.getElementById("speciality").value="CARDIOLOGIST";
}
else if (consultent.value=="DR ASUNGA DUNUWILLE")
{
document.getElementById("speciality").value="CARDIOLOGIST";
}
else if (consultent.value=="DR D.P RUPASINGHE")
{
document.getElementById("speciality").value="RADIOLOGIST";
}
else if (consultent.value=="DR H.W PERERA")
{
document.getElementById("speciality").value="RADIOLOGIST";
}
else if (consultent.value=="DR CHAMPIKA GUNAWARDANA")
{
document.getElementById("speciality").value="NEUROLOGIST";
}
else if (consultent.value=="DR DARSHANA WIJEGUNASINGHE")
{
document.getElementById("speciality").value="NEUROLOGIST";
}
else if (consultent.value=="DR SHAMINDA KAHANDAWA")
{
document.getElementById("speciality").value="ENDOCRYNOLOGIST";
}
else if (consultent.value=="DR DULIP PERERA")
{
document.getElementById("speciality").value="DREMATOLOGIST";
}
else if (consultent.value=="DR A. SHASHANKA RATHNAYAKE")
{
document.getElementById("speciality").value="DREMATOLOGIST";
}

}	


function cal() 
{
  var x=document.form1.getElementById("docFee").value
   
    alert("Value" +x);
    return;
    /*alert("dinuka badagediya");
    return;*/

    
}
 
   
   


</script>


  </head>
  <body >



		

	  <header>
		  <div id="waves">
		<svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
			<defs>
			  <style type="text/css">
				.wave {
				  animation: wave 8s linear infinite;
				}
		  
				.wave1 {
				  animation: wave1 10s linear infinite;
				}
		  
				.wave2 {
				  animation: wave2 12s linear infinite;
				}
		  
				@keyframes wave {
				  0% {
					transform: translateX(0%);
				  }
		  
				  100% {
					transform: translateX(100%);
				  }
				}
		  
				@keyframes wave1 {
				  0% {
					transform: scaleY(1.2) translateX(0%);
				  }
		  
				  100% {
					transform: scaleY(1.2) translateX(100%);
				  }
				}
		  
				@keyframes wave2 {
				  0% {
					transform: scaleY(.8) translateX(0%);
				  }
		  
				  100% {
					transform: scaleY(.8) translateX(100%);
				  }
				}
			  </style>
			  <path id='sineWave' fill="#0099ff" fill-opacity="0.2" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
			</defs>
			<use class="wave" href="#sineWave" />
			<use class="wave" x="-100%" href="#sineWave" />
			<use class="wave1" href="#sineWave" />
			<use class="wave1" x="-100%" href="#sineWave" />
			<use class="wave2" href="#sineWave" />
			<use class="wave2" x="-100%" href="#sineWave" />
		  </svg>
		  </div>
          <section>
		<div class="container">
			
			<nav class="navbar navbar-expand-lg ftco-navbar ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
		    	<a class="navbar-brand" href="indexx.php">ANIMONE Hospital</a> <!--pic-->
		    	<div class="social-media order-lg-last">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    		</p>
	        </div>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> Menu
		      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto mr-md-3">
                <li class="nav-item"><a href="indexx.php" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="channeling.php" class="nav-link">Channeling</a></li>
		       
		        	<li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="feedbak.php" class="nav-link">Feedback</a></li>
		          <li class="nav-item"><a href="aboutus.php" class="nav-link">About us</a></li>
                  
		        </ul>
		      </div>
		   
      
		 
		</div> </nav>
		</div>
            </section>

<section>
<div class="container mt-7 pt-10">
        <div class="row d_flex justify-contemt-center">
            <div class="col-lg-12 bg-white px-6 rounded z-depth-5 mt-5">
                <div class="row">
                    <div class="col-md-5 border-right">

                        <form name="form1" action="paymentdatabase.php" method="post">
                        <div class="background">
                            <div class="row">
                                <div class="card-header bg-black mt-5">
                                    <h2 class="text-black"> Payment Summary </h2>
                                    <div class="col-sm-13 border border-bottom border-primary"></div>
                                </div>
                            </div>
                            <?php

$dnm="";
$fee="";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query="SELECT Dname,ConsultantFee FROM person WHERE code=(SELECT max(code) FROM person)";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $dnm=$row['Dname'];
    $fee=$row['ConsultantFee'];

  }

}
mysqli_close($conn);
?>
                            <div class="col-md-12">
                                <div class="md-form form-group">
                                        <br><h5>ANIMONE Hostipal Medical Service(PVT)LTD</h5>
                                        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;23/A,Richmond Road,Colombo</h6>  
                                </div>
                            </div>
                            <?php date_default_timezone_set("Asia/Kolkata"); ?>
                            <div class="col-md-12">
                                <div class="md-form form-group">
                                    <br><label>DATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" id="date" name="date" value="<?php echo date('Y-M-D'); ?>"></label>
                                </div>
                            </div>
                            <?php
                            
                              echo "<div class='col-md-12'>
                              <div class='md-form form-group'>
                                  <br><label>CONSULTANT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type='text' id='consultent' name='consultent' value='$dnm'  readonly></label>
                                  
                              </div>
                          </div>";?>
                            

                            <div class="col-md-12">
                                <div class="md-form form-group">
                                    <br><label>SPECIALITY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" id="speciality" name="speciality" readonly></label><br>
                                </div>
                            </div>
                      







                                
                              <div class='col-md-12'>
                              <div class='md-form form-group'>
                                  <br><label>DOCTOR FEE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type='text' id='doctorfee' name='doctorfee' value='<?php echo $fee?>' readonly></label>

                                 
                                 
                                  </div>
                                  
                          </div>
                          
                    
                            <div class='col-md-12'>
                                <div class='md-form form-group'>
                                    <br><label>HOSPITAL FEE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type='text' id='hospitalfee' name='hospitalfee' value='Rs.250.00' readonly></label>
                                </div>
                            </div>

                            <div class='col-md-12'>
                                <div class='md-form form-group'>
                                    <br><label>SERVICE CHARGE &nbsp;&nbsp;:&nbsp;&nbsp;<input type='text' id='servicecharge' name='servicecharge' value='Rs.50.00' readonly></label>
                                </div>
                            </div>

                            <div class='col-md-12'>
                                <div class='md-form form-group'>
                                    <br><label>VAT - 0.0% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type='text' id='vat' name='vat' value='Rs.0.00' readonly></label><br>
                                </div>
                            </div>

                            <div class='col-md-12'>
                                <div class='md-form form-group'>
                                    <br><label>TOTAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type='text' id='total name=total' value='<?php $tot=$fee+300; echo "Rs.$tot";?>' readonly></label><br><br><br><br>
                                    
                                </div>
                            </div>";
                           
                        </div>   
                        
                    </div>

                        <div class="col-md-7 mt-0">
                            <div class="row">
                                <div class="card-header bg-black mt-5">
                                    <h2 class="text-black"> Payment Method </h2>
                                    <div class="col-sm-13 border border-bottom border-primary"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <br><br><label class="text-black"> Select an option </label><br>
                                    <label class="radio-inline"><input type="radio" name="type" value="credit" > <img src="https://i.imgur.com/28akQFX.jpg" width="150px" height="45px"> </label>
                                    <label class="radio-inline"><input type="radio" name="type" value="paypal" required=""> <img src="https://i.imgur.com/5QFsx7K.jpg" width="150px" height="45px"> </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="md-form form-group">
                                    <input type="text" id="name" name="name" pattern="^[\p{L}\p{M} \-\.',]*$" class="form-control text-black" required="">
                                    <label for="name"> Name on Card </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="md-form form-group">
                                    <input type="text" id="number" name="number" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" class="form-control text-black" onchange="getConsultant();" required="">
                                    <label for="number"> Card Number </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="md-form form-group">
                                    <input type="text" id="expiry" name="expiry" pattern="[0-9]{2}/[0-9]{4}" class="form-control text-black"  required="">
                                    <label for="expiry"> Expiration Date </label>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="md-form form-group">
                                    <input type="text" id="cvc" name="cvc" pattern="[0-9]{3}" maxlength="3" size="3" class="form-control text-black"  required="">
                                    <label for="cvc"> CVC </label><br>
                                </div>
                            </div>
                            
                                    <pre id="countdown"> 01.00 <script src="./app.js"></script></pre>
                               
                                <div class="md-form">
                                  <button type="submit" name="submit" class="btn btn-primary btn-block" > Make Payment </button><br><br>
                                    
                                </div>
                        </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
           

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
	  </header>










	  
	  <div style="clear: both"></div>
		<footer style="width: 5%;">
			<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
				<!-- Grid container -->
				<div class="container p-4">ANIMONE<sup>©</sup></div>
				<!-- Grid container -->
			  
				<!-- Copyright -->
				<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
				  © 2022 Copyright:
				  <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
				</div>
				<!-- Copyright -->
			  </footer>
		</footer>
		<br><br>
	 
	  
  </body>
</html>