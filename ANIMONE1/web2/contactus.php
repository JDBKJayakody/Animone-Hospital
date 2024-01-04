<!doctype html>
<html lang="en">
<style>
		
        
img {
  image-rendering: auto;
 
}

*{
    box-sizing: border-box;
	-webkit-font-smoothing: auto;
  -moz-osx-font-smoothing: grayscale;
}


.map
        {
            text-align: center;
        }
        .contact
        {
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .contact .content
        {
            max-width: 800px;
            text-align: left;
        }
        .contact .content h2
        {
            font-size: 40px;
            font-weight: 500;
            color: #000;
        }
        .contact .content p
        {
            font-weight: 300;
            color: #000;
        }
        .container1
        {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
        .container1 .containerInfo
        {
            width: 50%;
            display: flex;
            flex-direction: column;
        }
        .container1 .containerInfo .box
        {
            position: relative;
            display: flex;
            padding: 20px 0;
        }
        .container1 .containerInfo .box .icon
        {
            min-width: 100px;
            height: 100px;
            background:white;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 22px;
        }
        .container1 .containerInfo .box .text
        {
            display: flex;
            margin-left: 20px;
            font-size: 16px;
            color: white;
            flex-direction: column;
            font-weight: 400;
        }
        .container1 .containerInfo .box .text h3
        {
            color: rgb(5, 5, 15);
            font-weight: 900;
        }
        .contactForm
        {
            width: 40%;
            padding: 40px;
            background: white;
        }
        .contactForm h2
        {
            font-size: 30px;
            color: black;
            font-weight: 500;
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
   

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">

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
        <li class="nav-item"><a href="channeling.php" class="nav-link">Channeling</a></li>
		       
		        	<li class="nav-item active"><a href="contactus.php" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="feedbak.php" class="nav-link">Feedback</a></li>
		          <li class="nav-item"><a href="aboutus.php" class="nav-link">About us</a></li>
                 
		        </ul>
		      </div>
		   
      
		 
		</div> </nav>
		</div>
            </section>


            <section class="contact">
        <div class="content">
            <h1>Contact Us</h1>
        </div>
        <div class ="container1">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>23/A,<br>Richmond Road,<br>Colombo 01000,<br>Sri Lanka</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>011-7767767</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-fax" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Fax</h3>
                        <p>011-7777777</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>animonehospitalsofficial@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="contact.php" method="post">
                    <h2>Send Message</h2>
                    <div class="col-md-12">
                        <div class="md-form form-group">
                            <input type="text" id="name" name="name" pattern="^[\p{L}\p{M} \-\.',]*$" class="form-control text-black" required="">
                            <label for="name"> Name </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="md-form form-group">
                            <input type="text" id="mail" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control text-black" required="">
                            <label for="mail"> Mail </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="md-form form-group">
                            <input type="text" id="subjects" name="subjects" class="form-control text-black" required="">
                            <label for="subject"> Subject </label>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                            <div class="md-form">
                                <textarea type="text" id="msg" name="msg" rows="3" class="form-control md-textarea text-black" required=""></textarea>
                                <label for="messege"> Text Your Message </label>
                                <br><button type="submit" name="submit" class="btn btn-primary btn-block"> Send Message </button>
                            </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>



    <p class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.896430125667!2d79.84859301719986!3d6.92354691995981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa826697049b87962!2snawaloka%20hospital!5e0!3m2!1sen!2slk!4v1629012265280!5m2!1sen!2slk" width="800" height="450" style="border:1;" allowfullscreen="" loading="lazy"></iframe><br><br><br></p>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
	  </header>




<div>




</div>
	 








	  
	  <div style="clear: both"></div>
		<footer style="width: 5%;">
			<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
    
				<!-- Grid container -->
        <div class="container p-4"> “We need a cost-effective, high-quality health care system, guaranteeing health care to all of our people as a right."
					<sup>©</sup></div>
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