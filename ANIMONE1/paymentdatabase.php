<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
			background-color: #4CAF50;
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
function show()
{
    //alert("ASDsa");
        $('#emp').modal('show');
}

        </script>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
       
		
		
    </head>
    <body>
    
   

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
						  <p id="error"><b>Transaction successful</b></p></center>
						  <br>
						  
						  <br>
						
						</div>
						<div class="modal-footer">
                        <button type="button" id="btnok" onclick="document.getElementById('emp').style.display='none';window.location.href='dbook.php'" class="btn btn-danger">Okay</button>
						 
						</div>
						
					  </div>
					</div>
				  </div>
			


      
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>

<?php

require_once('config.php');
if(isset($_POST['submit']))
{
        $type=$_POST['type'];
        $name=$_POST['name'];
        $number=$_POST['number'];
        $expiry=$_POST['expiry'];
        $cvc=$_POST['cvc'];

	$query="INSERT INTO payment(type,name,number,expiry,cvc) VALUES('$type','$name','$number','$expiry','$cvc')";
	$resultx=mysqli_query($conn,$query);
    
	if($resultx==true)
	{				
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
        echo "Error: " . $query . "<br>" . mysqli_error($conn);

    }}
?>