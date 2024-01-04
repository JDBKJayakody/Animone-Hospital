<!doctype html>
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
  .modal {
	display: none;
	position: fixed; 
	z-index: 1; 
	left: 0;
	top: 0;
	width: 100%; 
	height: 100%;
	overflow: auto;
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


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
		input[type="text"] {width: 100%;}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    <script src="js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>


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
		    	<a class="navbar-brand" href="indexx.php">MDSN Hospital</a> <!--pic-->
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




            
	  </header>

      <form  name="form1" method="POST">
	<div class="container mt-3"  class="form-group">
		<div class="panel panel-default">
			<h2><U><CENTER>APPLY FOR PCR OR ANTIGEN TESTS</CENTER></U></h2><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<TABLE align="center" width="60%">
			<TR>
				<TD width="10%">
					<b>TEST TYPE</b>
				</TD>
				<TD width="50%">
					<select name="testType" id="testType" class="custom-select-sm mb-3" style="width: 200px;" required>
					<option value="">SELECT TEST TYPE</option>
					<OPTION value="ANTIGEN TEST">ANTIGEN TEST</OPTION>
					<OPTION value="PCR TEST">PCR TEST</OPTION>
					</select>
				</TD>
			</TR>
			<TR>
				<TD>
					<b>PERSON TYPE</b>
				</TD>
				<TD>
					<select name="personType" id="personType" class="custom-select-sm mb-3" style="width: 200px;" required>
						<option value="">SELECT PERSON TYPE</option>
						<OPTION value="LOCAL">LOCAL</OPTION>
						<OPTION value="FOREIGN">FOREIGN</OPTION>
					</select>
				</TD>
			</TR>
			<TR>
				<TD><B>NAME</B></TD>
				<TD>
					<input type="text" name="name" class="custom-select-sm mb-3" placeholder="ENTER YOUR NAME" 
					pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required="" >
				</TD>
			</TR>
			<TR>
				<TD><B>AGE</B></TD>
				<TD>
					<input type="text" name="age" class="custom-select-sm mb-3" placeholder="ENTER YOUR AGE" pattern="(?:\b|-)([1-9]{1,2}[0]?|100)\b" required="">
				</TD>
			</TR>
			<TR>
				<TD><B>ADDRESS</B></TD>
				<TD>
					<input type="text" name="address" class="custom-select-sm mb-3" placeholder="ENTER YOUR ADDRESS" required="">
				</TD>
			</TR>
			<TR>
				<TD><B>TELEPHONE NO&nbsp&nbsp&nbsp&nbsp&nbsp</B></TD>
				<TD>
					<input type="text" name="tp" class="custom-select-sm mb-3" placeholder="ENTER YOUR TELEPHONE NO" pattern="[0-9]{3}[0-9]{7}" required="" >
				</TD>
			</TR>
			<TR>
				<TD><B>NIC</B></TD>
				<TD>
					<input type="text" name="nicpass" class="custom-select-sm mb-3" placeholder="ENTER YOUR NIC" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" required="">
				</TD>
			</TR>
			<TR>
				<TD><B>GENDER</B></TD>
				<TD>
					<input type="radio" name="gender" id="male" value="MALE"width="" required=""><b>&nbspMALE&nbsp&nbsp</b>
					<input type="radio" name="gender" id="female" value="FEMALE"width=""><b>&nbspFEMALE</b>
				</TD>
			</TR>
			<TR>
                
            <script type="text/javascript">
            function d()
            {
        date1.min = new Date().toISOString().slice(0, -14);
            }
    </script>
        
				<TD><B>DATE</B></TD>
				<TD>
					 <input type="date" class="custom-select-sm mb-3" id="date1"name="date1" placeholder="dd:mm:yy" style="width: 200px; " onclick="d();" required=""/>
				</TD>
			</TR>
		</TABLE>
		<BR>
		<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
		<center>
			<input type="submit" name="submit" value="APPLY" class="fa fa-user-md " onclick="validation();" style="background:#1b54a8; color: white; font-size: 20px">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="reset" name="clear" value="CLEAR" class="fa fa-user-md " style="background:#1b54a8;  color: white; font-size: 20px">
		</center>
	</div>
</form>

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
						  <p id="error"><b>Applied Successfully</b></p></center>
						  <br>
						  
						  <br>
						
						</div>
						<div class="modal-footer">
                        <button type="button" id="btnok" onclick="document.getElementById('emp').style.display='none';window.location.href='indexx.php'" class="btn btn-danger">Okay</button>
						 
						</div>
						
					  </div>
					</div>
				  </div>








	  
	  <div style="clear: both"></div>
		<footer style="width: 5%;">
			<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
				<!-- Grid container -->
				<div class="container p-4">MDSN<sup>©</sup></div>
				<!-- Grid container -->
			  
				<!-- Copyright -->
				<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
				  © 2020 Copyright:
				  <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
				</div>
				<!-- Copyright -->
			  </footer>
		</footer>
		<br><br>
        <?php
	$severname="localhost";
	$username="root";
	$password="";
	$dbname="test";

	
	$con=new mysqli($severname,$username,$password,$dbname);
		if($con->connect_error)
		{
			die("Connection Error".$con->connect_error);
		}
	else if(isset($_POST['submit'])) 
	{	
		$testType=$_REQUEST['testType'];
		$personType=$_REQUEST['personType'];
		$name=$_REQUEST['name'];
		$age=$_REQUEST['age'];
		$address=$_REQUEST['address'];
		$tp=$_REQUEST['tp'];
		$nicpass=$_REQUEST['nicpass'];
		$gender=$_REQUEST['gender'];
		$date1=$_REQUEST['date1']; 

			$sql="INSERT INTO pcr(test_type,person_type,name,age,address,telephone,nicpass,gender,adate) VALUES ('$testType','$personType','$name',
			'$age','$address','$tp','$nicpass','$gender','$date1')";
			
			if ($con->query($sql)) 
			{
				echo "Data inserted successfully";
                echo "<script type='text/javascript'>
                document.getElementById('msg').src = 'success.gif';
                $(document).ready(function(){
                $('#emp').modal('show');
                });
                
                </script>
                ";
			}
			else
			{
				echo "Data insert failed";
			}
			$con->close();
	}
	?>
	  
  </body>
</html>