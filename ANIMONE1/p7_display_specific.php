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

    <title>Contact</title>
   

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


  </head>
  <body>



		

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
                <li class="nav-item"><a href="indexx.php" class="nav-link">home</a></li>
                <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="p6_delete1.php">Delete Channelling</a>
          <a class="dropdown-item" href="dbook.php">BACK</a>
          
         
        </div>
      </li>
		        
		        	<li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="feedbak.php" class="nav-link">Feedback</a></li>
		          <li class="nav-item"><a href="aboutus.php" class="nav-link">About us</a></li>
                  <li class="nav-item active">
		        </ul>
		      </div>
		   
      
		 
		</div> </nav>
		</div>
            </section>


<div class="container">
<center><h1>PLEASE ENTER YOUR NIC</h1></center>
    <form name="form1" method="POST">
    ID :
    <div class="input-group">
     <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
      <input id="nic" type="text" class="form-control" name="nic" placeholder="nic" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" required>
    </div><br>
    <div class="input-group">
    <input type="submit"name="submit" value="submit" class="btn btn-primary btn-block">
    </div>
</form>

           

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
				<div class="container p-4">“We need a cost-effective, high-quality health care system, guaranteeing health care to all of our people as a right."<sup>©</sup></div>
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

if(isset($_POST['submit']))
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $nic=$_REQUEST['nic'];

  $conn= mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error)
{
  die("Connection failed: ".$conn->connect_error);
}

      //echo "Connection OK";


  $sql = "select * from person where nic='$nic'";

   $result=$conn->query($sql);
 if ($result->num_rows > 0)
  {

  while($row = $result->fetch_assoc())
  	{
		  
  		echo "
		  <center>
		  <table border='2'>

 <tr>
 <td>code</td>
 <td>$row[code]</td>
</tr>
<tr>
 <td>country</td>
 <td>$row[country]</td>
</tr>
<tr>
 <td>mar</td>
 <td>$row[mar]</td>
</tr>
<tr>
 <td>name</td>
 <td>$row[name]</td>
</tr>
<tr>
 <td>phone</td>
 <td>$row[phone]</td>
</tr>
<tr>
 <td>nic</td>
 <td>$row[nic]</td>
</tr>
<tr>
 <td>email</td>
 <td>$row[email]</td>
</tr>
<tr>
 <td>Address</td>
 <td>$row[address]</td>
</tr>
<tr>
 <td>Dname</td>
 <td>$row[Dname]</td>
</tr>
<tr>
 <td>ConsultantFee</td>
 <td>$row[ConsultantFee]</td>
</tr>";
					
echo "
					
</table>
</center>";
  	}
  }
  else
  {
  echo "<center><b>No Records</b></center>";
  }
  $conn->close();
  }





     

         






      
    ?>
  </body>
</html>