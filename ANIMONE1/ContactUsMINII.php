<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>

       <!-- Font Awesome -->
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <!--<link rel="stylesheet" type="text/css" href="style1.css"> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body
        {
            background: url(ContactUsBackground2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            background-position: center;
        }
        img 
        {
            opacity: 0.2;
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
    </style>
</head>

<body>
    <section class="ftco-section">
    
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Website menu #04</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
            <a class="navbar-brand" href="indexx.php">MDSN Hospital</a> <!--pic-->
		    	<div class="social-media order-lg-last">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
		    		</p>
	        </div>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> Menu
		      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto mr-md-3">
		        	<li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
		        	<li class="nav-item"><a href="#" class="nav-link">Channellings</a></li>
		        	<li class="nav-item"><a href="#" class="nav-link">My Bookings</a></li>
		        	<li class="nav-item"><a href="#" class="nav-link">Feedback</a></li>
		            <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
		        </ul>
		      </div>
		    </div>
		  </nav>
    <!-- END nav -->
  </div>
  
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

<!--****************************************** Start Contact Us Page *****************************************************************************-->

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
                        <p>124/B,<br>Norris Canal Road,<br>Colombo 01000,<br>Sri Lanka</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>011-4256256</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-fax" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Fax</h3>
                        <p>011-3303030</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>mdsnhospitalsofficial@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
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
    <script type="text/javascript">
        
        //swal("Success!", "Your message sent successfully.", "success");
        //swal ( "Oops" ,  "Something went wrong!" ,  "error" );
    </script>

    <p class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.896430125667!2d79.84859301719986!3d6.92354691995981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa826697049b87962!2snawaloka%20hospital!5e0!3m2!1sen!2slk!4v1629012265280!5m2!1sen!2slk" width="800" height="450" style="border:1;" allowfullscreen="" loading="lazy"></iframe><br><br><br></p>

        <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

<!--****************************************** End Contact Us Page *****************************************************************************-->

</body>
</html>