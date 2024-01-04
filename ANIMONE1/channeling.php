<!doctype html>
<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
<html lang="en">
  <head>
	 
		  
		
	<style>

nav
{
	
  box-sizing: border-box;
 border-radius: 25px;
  color: white;
  line-height: 25px;
  box-shadow: 5px 5px 10px #ccc;
  
}

.card {
	
  
  box-sizing: border-box;
 
 
  border-radius: 25px;
  color: white;
  
  box-shadow: 5px 5px 10px #ccc;
  
  margin-right: 1em;
}


		#foot 
		{
			clear: both;
		}
		
		footer {
			clear: both;
			position:fixed;
			height: 50px;
			margin-top: -200px;
			overflow-block:auto;

			
		}
		.modal-content {
	background:url('anim.gif');
	background-size: cover;
}
.form-group.label-animate>label {
  top: 18px !important;
  left: 16px !important;
  font-size: 0.9em;
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
		}
		.form-group
		{
			font-size:80%;
			
		}
		.form-control
		{
		font-size:small;
		}
		form {
			width: 450px;
			
		
		   }
		   input[type=button], input[type=submit], input[type=reset] {
			background-color: #f08d0c;
			border: none;
			color: white;
			padding: 16px 32px;
			text-decoration: none;
			margin: 4px 2px;
			cursor: pointer;
		   }
		   @import url(https://fonts.googleapis.com/css?family=Open+Sans:600);

		   img {
  image-rendering: auto;
 
}

*{
	box-sizing: border-box;
	-webkit-font-smoothing: auto;
  -moz-osx-font-smoothing: grayscale;
}


		  
		   html
		   {
			   
			   height: 100%;
			  
		   }
		   
		   body {
			overflow-y:scroll;
			 /* Hide horizontal scrollbar */
			 height: 100%;
		  }

		  input[type="tel"]::placeholder {  
                  
				  /* Firefox, Chrome, Opera */ 
				  text-align: center; 
			  } 
		  input[type="text"]::placeholder {  
                  
            /* Firefox, Chrome, Opera */ 
            text-align: center; 
        } 
		input[type="telephone"]::placeholder {  
                  
            /* Firefox, Chrome, Opera */ 
            text-align: center; 
        } 
		input[type="number"]::placeholder {  
                  
            /* Firefox, Chrome, Opera */ 
            text-align: center; 
        } 
        input[type="password"]::placeholder {  
                  
            /* Firefox, Chrome, Opera */ 
            text-align: center; 
        } 
		 /* Full-width input fields */
input[type=text], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
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
  
  img.avatar {
	width: 40%;
	border-radius: 50%;
  }
  
  .containers {
	padding: 16px;
  }
  
  span.psw {
	float: right;
	padding-top: 16px;
  }
  
  /* The Modal (background) */
  .modal {
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 1; /* Sit on top */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	padding-top: 60px;
  }
  
  /* Modal Content/Box */
  .modal-content {
	background-color: #fefefe;
	margin: 7% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
	border: 1px solid #888;
	width: 10%; /* Could be more or less, depending on screen size */
  }
  
  /* The Close Button (x) */
  .close {
	position: absolute;
	right: 25px;
	top: 0;
	color: #000;
	font-size: 35px;
	font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
	color: red;
	cursor: pointer;
  }
  
  
  
  /* Add Zoom Animation */
  .animate {
	-webkit-animation: animatezoom 0.6s;
	animation: animatezoom 0.6s
  }
  
  @-webkit-keyframes animatezoom {
	from {-webkit-transform: scale(0)} 
	to {-webkit-transform: scale(1)}
  }
	
  @keyframes animatezoom {
	from {transform: scale(0)} 
	to {transform: scale(1)}
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
	span.psw {
	   display: block;
	   float: none;
	}
	.cancelbtn {
	   width: 100%;
	}
  }	
  .carousel-inner img {
  margin: auto;
  max-height: 280px
}
  .carousel img {     width: 100%;     height: auto; margin: auto;}
	</style>
	  
	  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Channeling</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">

		
		
  </head>

  <body>
 
	
	
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
			  <path id='sineWave' fill="#0099ffz" fill-opacity="0.2" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
			</defs>
			<use class="wave" href="#sineWave" />
			<use class="wave" x="-100%" href="#sineWave" />
			<use class="wave1" href="#sineWave" />
			<use class="wave1" x="-100%" href="#sineWave" />
			<use class="wave2" href="#sineWave" />
			<use class="wave2" x="-100%" href="#sineWave" />
		  </svg>
		  </div>
		
	 

	  <header>
	 
		<section >
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
		

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
	  </header>
	  <center><div class="container">
		  <br>
		<h4>Create Your Account in Few easy Steps...</h4>
		<table border="0">
			<tr>
				<td>
		<form name="reg1" class="form-horizontal needs-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  onsubmit="return validate()" novalidate >
		  <div class="form-group">
			<label class="control-label col-sm-2" for="uname">Name:</label>
			<div class="col-sm-7">
			  <input type="text" class="form-control form-control-sm" id="uname" placeholder="Enter name" name="uname"pattern="[A-Za-z ]{1,32}" required>
			<div class="invalid-feedback">
				Enter name
			</div>
			</div>

		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="age">Age:</label>
			<div class="col-sm-7">          
			  <input type="Text" class="form-control form-control-sm" id="age" placeholder="Enter Age" name="age" pattern="^[1-9][0-9]?$|^110$" max="110" required=>
			  <div class="invalid-feedback">
				Enter Age
			</div>
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-1" for="mob">Mobile:</label>
			<div class="col-sm-7">          
			  <input type="tel" class="form-control form-control-sm" id="mob" placeholder="Enter Number" name="mob" pattern="^(?:7|0|(?:\+94))[0-9]{9,10}$" required>
			  <div class="invalid-feedback">
				Invalid number
			</div>
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-3" for="iden">ID Number:</label>
			<div class="col-sm-7">          
			  <input type="text" class="form-control form-control-sm" id="iden" placeholder="Enter IDNumber" name="iden" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" required>
			  <div class="invalid-feedback" id="err">
				Invalid input
			</div>
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="gender">Gender:</label>
			<div class="col-sm-7">          
			  <label class="radio-inline">
				<input type="radio" name="gen" value="m" checked required="">Male
			  </label>
			  <label class="radio-inline">
				<input type="radio" name="gen" value="f" required="">Female
			  </label>
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="pwq">password</label>
			<div class="col-sm-7">          
			  <input type="password" class="form-control form-control-sm" id="pwd" placeholder="Enter Password" pattern="^(?=.*[A-Za-z])(?=.*\d).{8,}$" name="pwd"  required>
			  <div class="invalid-feedback">
				minimum 8, at least one letter and one number
				
			</div>
			</div>
			
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-5" for="pwq1">confirm password</label>
			<div class="col-sm-7">          
			  <input type="password" class="form-control form-control-sm" id="cpwd" placeholder="Enter Password" name="cpwd" required>
			</div>
		  </div>
		  <div class="form-group">        
			<div class="col-sm-offset-2 col-sm-7">
			  <button type="submit" name="sub" id="sub" class="btn btn-outline-primary">Submit</button>
			</div>
		  </div>
		
		</form>
	
		</td>
		<td style="vertical-align:baseline" rowspan="2">
			
				<div class="card h-100 text-white bg-success" style="width:400px">
					<div class="card-body">
						<p class="card-text">Already have A Account? ?<br>Click Below to Log in.<br>Its 100% Free.</p>
						<a href="#" onclick="document.getElementById('id01').style.display='block'" class="btn btn-outline-light">Login</a>
						
					</div>
				</div>
				<div id="id01" class="modal">
					<div class="modal-dialog" style="max-width: 40%;max-height:80%"; role="document">
						
					<form class="modal-content animate " name="log" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					 
					  <center>
						  
					  <div class="container">
						  <center>
						
							<h4>LOGIN</h4>
							<div class="form-group">
							  <label class="control-label col-sm-4" for="name" font color="black">Enter ID:</label>
							  <div class="col-sm-5">
								<input type="text" class="form-control form-control-sm" id="loguname" placeholder="Enter ID" name="loguname" required>
							  </div>
				  
							</div>
							<div class="form-group">
								
							  <label class="control-label col-sm-3" for="pwd">Enter Password</label>
							  <div class="col-sm-3">          
								<input type="password" class="form-control form-control-sm" id="logpwds" placeholder="Password" name="logpwds" required>
							  </div>
							</div>
							<div class="form-group">        
							  <div class="col-sm-offset-2 col-sm-4">
								<button type="submit" name="loginb" class="btn btn-outline-primary">Login</button>
							  </div>
							</div>
							<div class="col-sm-offset-2 col-sm-4">
								<button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger">Cancel</button>
								<br><br>
							  </div>
							
						
						  </center>
					  </div>
					  </center>
				  
					 
					</form>
					
				  </div>
				  </div>
				  <div class="modal" tabindex="-1" role="dialog" id="emp">
					<div class="modal-dialog" role="document">
					  <div class="modal-content">
						<div class="modal-header">
							<center>
						  
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						  </center>
						</div>
						<div class="modal-body">
						  <center>
							  <div id="img">
							  <img id="msg" src="err.png" width="90" height="90">
							  </div>
						  <p id="error"><b>Form contains incorrect values.ReCheck</b></p></center>
						  <br>
						  
						  <br>
						
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="rem();">okay</button>
						 
						</div>
						
					  </div>
					</div>
				  </div>
			
				<div class="card h-100 text-white bg-danger" style="width:400px">
					<div class="card-body">
						<p class="card-text">Are you fed up with thinking of yourself as a covid positive person? Now it's time to clear all your confusion. Apply  for an antigen or a PCR test From our hospital</p>
						<a href="pcr.php" class="btn btn-outline-light">Apply</a>
					</div>
				</div>
			
			<div class="card" style="width:400px">
				<img class="card-img" src="doc.gif" alt="Card image" style="width:100%">
			  </div>
		</td>
			</tr>
			
		</table>
	  </div>
	  </center>
	
	  <script>


function rem()
{
	document.reg1.uname.value="";
	document.document.reg1.age.value="";
	document.reg1.mob.value="";
	document.reg1.iden.value="";
	document.reg1.cpwd.value="";
	document.reg1.pwd.value="";
}
function validate()
{
	if(document.reg1.uname.value.length==0||document.document.reg1.age.value.length==0||document.reg1.mob.value.length==0||document.reg1.iden.value.length==0||document.reg1.cpwd.value.length==0)
	{
	
		$('#emp').modal('show');
		
		return false;
	}
}

document.addEventListener("DOMContentLoaded", function() {
	initApp();
  });

  function initApp() {
	  document.querySelector("#sign-up").addEventListener("submit", createAccount, false);
  }

  (function () {
	  "use strict";
	  window.addEventListener(
		  "load",
		  function () {
			  // Fetch all the forms we want to apply custom Bootstrap validation styles to
			  var forms = document.getElementsByClassName("needs-validation");
			  // Loop over them and prevent submission
			  var validation = Array.prototype.filter.call(forms, function (form) {
				  form.addEventListener(
					  "submit",
					  function (event) {
						  if (form.checkValidity() === false) {
							  event.preventDefault();
							  event.stopPropagation();
						  }
						  form.classList.add("was-validated");
					  },
					  false
				  );
			  });
		  },
		  false
	  );
  })();

  $(document).ready(function() {
    $('submit').click(function() {
        var value = document.getElementById('uname').value;
        if (value === '') {
            alert('Enter your name');
			
				evt.preventDefault();
				window.history.back();
			
        }
    })
});
		var password = document.getElementById("pwd");
		var confirm_password = document.getElementById("cpwd");
	   
	   function validatePassword(){
		 if(password.value != confirm_password.value) {
	   confirm_password.setCustomValidity("Passwords Don't Match");
		 } else {
	   confirm_password.setCustomValidity('');
		 }
	   }
	   
	   password.onchange = validatePassword;
	   confirm_password.onkeyup = validatePassword;

	   

		</script>

		<div id="foot">
		<footer style="width: 5%;">
			<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
				<!-- Grid container -->
				<div class="container p-4"> “We need a cost-effective, high-quality health care system, guaranteeing health care to all of our people as a right."
					<sup>©</sup></div>
				<!-- Grid container -->
			  
				<!-- Copyright -->
				<!-- Copyright -->
			  </footer>
		</footer>
	</div>
		<br><br>
		
		<?php
	
if(isset($_REQUEST["sub"]))
{
	$rows=0;
	$name="";
	$age="";
	$mob="";
	$uid="";
	$pwd="";
	$gen="";
	$name=$_REQUEST["uname"];
	$age=$_REQUEST["age"];
	$mob=$_REQUEST["mob"];
	$uid=$_REQUEST["iden"];
	$pwd=$_REQUEST["cpwd"];
	
	if(isset($_REQUEST["gen"]))
	{
		$gen=$_REQUEST["gen"];
	}
	if($name==""||$age==""|$mob==""||$uid==""|$pwd=="")
	{
		echo "error";
	}
	else 
	{
		$con=mysqli_connect("localhost","root","","test");
		if($con)
		{
			//echo "<p>good</p>";
			$sel= "SELECT * FROM usersl  WHERE uid = '".$uid."'";
if ($result=mysqli_query($con,$sel)) {
$row=mysqli_num_rows($result);

}
if($row!==0)
{
echo"$row";

echo "<script type='text/javascript'>
document.getElementById('msg').src = 'err.png';
$(document).ready(function(){
$('#emp').modal('show');
});
document.getElementById('error').innerHTML = 'Seems Like You have Already Registered.<br><b>Login</b> to continue';
document.reg1.uname.value='';
document.document.reg1.age.value='';
document.reg1.mob.value='';
document.reg1.iden.value='';
document.reg1.cpwd.value='';
document.reg1.pwd.value='';
</script>
";

}
else 
{
	$ins="insert into usersl values('$uid','$name',$age,$mob,'$gen','$pwd')";

	if(mysqli_query($con,$ins))
	{
		
		echo "<script type='text/javascript'>
document.getElementById('msg').src = 'success.gif';
$(document).ready(function(){
$('#emp').modal('show');
});
document.getElementById('error').innerHTML = 'Account Created';
document.reg1.uname.value='';
document.document.reg1.age.value='';
document.reg1.mob.value='';
document.reg1.iden.value='';
document.reg1.cpwd.value='';
document.reg1.pwd.value='';
</script>
";

	}
	else 
	{
		echo "<script type='text/javascript'>
document.getElementById('msg').src = 'err.png';
$(document).ready(function(){
$('#emp').modal('show');
});
document.getElementById('error').innerHTML = 'Something went Wrong';
document.reg1.uname.value='';
document.document.reg1.age.value='';
document.reg1.mob.value='';
document.reg1.iden.value='';
document.reg1.cpwd.value='';
document.reg1.pwd.value='';
</script>
";
	}





	
}
		}
		else
		{
			echo "<script type='text/javascript'>
document.getElementById('msg').src = 'err.png';
$(document).ready(function(){
$('#emp').modal('show');
});
document.getElementById('error').innerHTML = '.Connection Error';
document.reg1.uname.value='';
document.document.reg1.age.value='';
document.reg1.mob.value='';
document.reg1.iden.value='';
document.reg1.cpwd.value='';
document.reg1.pwd.value='';
</script>
";
			
		}
	}
	
	 
	}
	if(isset($_REQUEST["loginb"]))
	{
	
		
		$idno=$_REQUEST['loguname'];  
		$password = ($_REQUEST['logpwds']);  
		if($idno==""||$password=="")
		{
			echo "error";
		}
		else 
		{
			$con=mysqli_connect("localhost","root","","test");
		if($con)
			{

				
				$res = mysqli_query($con,"select *from usersl where uid= '$idno' and pwd= '$password'");
			
				$result=mysqli_fetch_array($res);
				if(is_array($result)) {
					$_SESSION["id"] = $result['uid'];
					$_SESSION["name"] = $result['uname'];

					echo "<script type='text/javascript'>
					document.getElementById('msg').src = 'success.gif';
					$(document).ready(function(){
					$('#emp').modal('show');
					});
					document.getElementById('error').innerHTML = '<b>Logged></b>';
					document.reg1.uname.value='';
					document.document.reg1.age.value='';
					document.reg1.mob.value='';
					document.reg1.iden.value='';
					document.reg1.cpwd.value='';
					document.reg1.pwd.value='';
					</script>
					";
					
					if(isset($_SESSION["id"],$_SESSION["name"])) {
						header('Location:dbook.php?customer_id='.$_SESSION['id']);
											}
				
				
				}	
				else	
				{
					echo "<script type='text/javascript'>
document.getElementById('msg').src = 'err.png';
$(document).ready(function(){
$('#emp').modal('show');
});
document.getElementById('error').innerHTML = 'Wrong Credentials';
document.getElementById('hyp').style.visibility='visible';
document.reg1.uname.value='';

document.document.reg1.age.value='';
document.reg1.mob.value='';
document.reg1.iden.value='';
document.reg1.cpwd.value='';
document.reg1.pwd.value='';
</script>
";
					
				}	
		
				
			}

	}

}
?>


  </body>
</html>