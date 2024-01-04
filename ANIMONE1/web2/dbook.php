<!doctype html>
<?php
   ob_start();
   session_start();
?>

<?php
if(isset($_GET['customer_id']))
   {
	$connect=mysqli_connect("localhost","root","","test");

    $customer_id = mysqli_real_escape_string($connect,$_GET['customer_id']);
    $query = "SELECT * FROM usersl WHERE uid= '{$customer_id}' LIMIT 1";

    $result_set = mysqli_query($connect,$query);

    if($result_set)
     {
       if(mysqli_num_rows($result_set) == 1)
       {
        $result = mysqli_fetch_assoc($result_set);
        $name = $result['uname'];
        $age = $result['age'];
        $mobile = $result['mobile'];
        $gender = $result['gend'];
       }
     }
   }

?>

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
		}
		
        nav
{
	
  box-sizing: border-box;
 border-radius: 25px;
  color: white;
  line-height: 25px;
  box-shadow: 5px 5px 10px #ccc;
  
}

		   
		   @import url(https://fonts.googleapis.com/css?family=Open+Sans:600);



		  
		   html
		   {
			   
			   height: 100%;
			  
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
	width: 20%;
    box-sizing: border-box;
  padding: 1em;
 
  border-radius: 25px;
 
  box-shadow: 5px 5px 10px #ccc;
  
  margin-right: 1em;
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
  
  .logout
{
width: 90%;
height:auto;
margin-top: 39.5%;
margin-left: 35%;
padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	
    box-sizing: border-box;
  padding: 1em;
 
  border-radius: 25px;
 
  box-shadow: 5px 5px 10px #ccc;
  
  margin-right: 1em;
}
  
  .containers {
	padding: 16px;
  }
  .modal-content {
	background:url('anim.gif');
	background-size: cover;
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
		

function validation()
		{
			if (document.form1.Specialization.selectedIndex==0) 
			{	alert("Specialization should be select");
				return false;
			}
			else if (document.form1.docName.selectedIndex==0) 
			{
				alert("Doctor Name should be select");
				return false;
			}
			else
			{
				if (document.form1.docSpe.selectedIndex==1 && (document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||
					document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8||document.form1.docName.selectedIndex==9 || document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22 ||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24)) 
				{
					alert("Please select the Doctor referring to the below table");
                    return false;
				}
				else if (document.form1.docSpe.selectedIndex==2 && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==9 || document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22 ||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24)) 
				{
					alert("Please select the Doctor referring to the below table");
					return false;
				}
				else if (document.form1.docSpe.selectedIndex==3 && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22 ||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24)) 
				{
					alert("Please select the Doctor referring to the below table");
                    return false;
				}
				else if (document.form1.docSpe.selectedIndex==4 && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==9 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22 ||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24)) 
				{
					alert("Please select the Doctor referring to the below table");
                    return false;
				}
				else if (document.form1.docSpe.selectedIndex==5 && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==9||document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22 ||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24)) 
				{
					alert("Please select the Doctor referring to the below table");
					return false;
				}
				else if (document.form1.docSpe.selectedIndex==6 && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==9||document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22 ||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24)) 
				{
					alert("Please select the Doctor referring to the below table");
					return false;
				}
				else if (document.form1.docSpe.selectedIndex==7 && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==9||document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22 ||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24)) 
				{
					alert("Please select the Doctor referring to the below table");
                    return false;
				}
				else if (document.form1.docSpe.selectedIndex==8 && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==9||document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==22 ||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24)) 
				{
					alert("Please select the Doctor referring to the below table");
					return false;
				}
				else if (document.form1.docSpe.selectedIndex==9 && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==9||document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24)) 
				{
					alert("Please select the Doctor referring to the below table");
                    return false;
				}
				else if (document.form1.docSpe.selectedIndex==10 && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==9||document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22)) 
				{
					alert("Please select the Doctor referring to the below table");
                    return false;
				}
                return checkdoc();
                return checkdate();
                		
			}
          
		}
		function checkdoc() 
			{
			  var date1 = document.getElementById("date1").value;
			  var date = new Date(date1).getUTCDay();
			  
			  var weekday = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN'];
			  
			  //document.getElementById('output').textContent = weekday[date];
			  if(weekday[date]=="SUN" && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==9 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24)) 
			  {
			  	alert("Please select the Book Date referring to the below table");
                  return false;
			  }
			  else if (weekday[date]=="MON" && ( document.form1.docName.selectedIndex==2 || document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22 ||document.form1.docName.selectedIndex==24))
			  {
			  	alert("Please select the Book Date referring to the below table");
                  return false;
			  }
			  else if (weekday[date]=="TUE" && (document.form1.docName.selectedIndex==1 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==9||document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22||document.form1.docName.selectedIndex==23))
			  {
			  	alert("Please select the Book Date referring to the below table");
                  return false;
			  }
			  else if (weekday[date]=="WED" && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					 document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==9||document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24))
			  {
			  	alert("Please select the Book Date referring to the below table");
                  return false;
			  }
			  else if (weekday[date]=="THU" && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==7 ||document.form1.docName.selectedIndex==8 || document.form1.docName.selectedIndex==9||document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==24))
			  {
			  	alert("Please select the Book Date referring to the below table");
				return false;
			  }
			  else if (weekday[date]=="FRI" && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==8 ||document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==19 ||document.form1.docName.selectedIndex==20 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==22||document.form1.docName.selectedIndex==23))
			  {
			  	alert("Please select the Book Date referring to the below table");
				return false;
			  }
			  else if (weekday[date]=="SAT" && (document.form1.docName.selectedIndex==1 || document.form1.docName.selectedIndex==2 ||
					document.form1.docName.selectedIndex==3 ||document.form1.docName.selectedIndex==4||document.form1.docName.selectedIndex==5 || document.form1.docName.selectedIndex==6 ||document.form1.docName.selectedIndex==7 || document.form1.docName.selectedIndex==9||document.form1.docName.selectedIndex==10 ||document.form1.docName.selectedIndex==11 ||document.form1.docName.selectedIndex==12 ||document.form1.docName.selectedIndex==13 ||document.form1.docName.selectedIndex==14 ||document.form1.docName.selectedIndex==15 ||document.form1.docName.selectedIndex==16 ||document.form1.docName.selectedIndex==17 ||document.form1.docName.selectedIndex==18 ||document.form1.docName.selectedIndex==21 ||document.form1.docName.selectedIndex==23 ||document.form1.docName.selectedIndex==24))
			  {
			  	alert("Please select the Book Date referring to the below table");
				return false;
			  }
			  
			}

			function checkdate() 
			{
			   var selectedText = document.getElementById('date1').value;
			   var selectedDate = new Date(selectedText);
			   var now = new Date();
			   if (selectedDate < now) 
			   {
			    alert("Don't select past dates");
			    return false;
			   }
 			}
             

</script>
        
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
                <li class="nav-item">
                <li class="nav-item"><a href="indexx.php" class="nav-link">Home</a></li>
		        
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="p7_display_specific.php">View Channelling</a>
          <a class="dropdown-item" href="p6_delete1.php">Delete Channelling</a>
          
         
        </div>
      </li>

		        	
		        	<li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
		        	 <li class="nav-item"><a href="feedbak.php" class="nav-link">Feedback</a></li>
		          <li class="nav-item"><a href="aboutus.php" class="nav-link">About us</a></li>
				  <li class="nav-item"><a href="userprofile.php?customer_id=<?php echo $customer_id?>" class="nav-link">Profile</a></li>
                  <form name="fake" method="POST"><li class="nav item"><button type="submit" name="logout" class="btn btn-danger btn-outline-dark btn-lg logout" >logout</button></li></form>
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
	  </header>




<div>



<?php


function sendCode(){
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["name"]);
    session_destroy();
    header("Location:channeling.php");

}
function redir()
{
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["name"]);
    session_destroy();
    header("Location:unauth.html");

}

$user="";
$id="";
if($_SESSION["id"]) {
    $user = $_SESSION['name'];
    $id=$_SESSION['id'];
//SHOW USER




}
else
{
    redir();
}

    

?>
</div>
	 

<form  name="form1" action="p2_insert.php" method="POST" onsubmit="return validation()">
	<div class="container" align="center" class="">
		<h2>CHANNEL YOUR DOCTOR</h2><br>
		<b>SPECIALIZATION</b>&nbsp&nbsp&nbsp
			<select name="Specialization" id="docSpe" class="custom-select-sm mb-3" style="width: 240px;">
				<option selected>SELECT DOCTOR SPECIALIZATION</option>
				      <option value="ALLERGIST">ALLERGIST</option>
				      <option value="DENTIST">DENTIST</option>
				      <option value="PEDIATRICIAN">PEDIATRICIAN</option>
				      <option value="SURGEON">SURGEON</option>
				      <option value="THEROPIST">THEROPIST</option>
				      <option value="CARDIOLOGIST">CARDIOLOGIST</option>
				      <option value="RADIOLOGIST">RADIOLOGIST</option>
				      <option value="NEUROLOGIST">NEUROLOGIST</option>
				      <option value="ENDOCRYNOLOGIST">ENDOCRYNOLOGIST</option>
				      <option value="DREMATOLOGIST">DREMATOLOGIST</option>
			</select><br>
			<b>DOCTOR NAME</b> &nbsp&nbsp&nbsp
			<select name="docName" class="custom-select-sm mb-3" style="width: 240px;">
				<option selected><center> SELECT DOCTOR NAME</center></option>
				      <option value="PROF SURANJITH SENEVIRATNE">PROF SURANJITH SENEVIRATNE</option>
				      <option value="PROF ANURA WEERASINGHE">PROF ANURA WEERASINGHE</option>
				      <option value="PROF (MRS.) G. NEELIKA MALAVIGE">PROF (MRS.) G. NEELIKA MALAVIGE</option>
				      <option value="DR AJITH AMARASINGHE">DR AJITH AMARASINGHE</option>
				      <option value="DR ATHULA ABEYSUNDARA">DR ATHULA ABEYSUNDARA</option>
				      <option value="DR SARATH AMARADASA">DR SARATH AMARADASA</option>
				      <option value="DR W M HILARY COORAY">Dr W M HILARY COORAY</option>
				      <option value="DR NASAR ABDULWADOOD">DR NASAR ABDULWADOOD</option>
				      <option value="DR KANCHANA SINGAPPULI">DR KANCHANA SINGAPPULI</option>
				      <option value="DR (MRS) P.P. FERNANDO">DR (MRS) P.P. FERNANDO</option>
				      <option value="DR A. KAILAINATHAN">DR A. KAILAINATHAN</option>
				      <option value="DR A.S. WITHANAGE">DR A.S. WITHANAGE</option>
				      <option value="DR (MRS) AJANTHA LIYANAGE">DR (MRS) AJANTHA LIYANAGE</option>
				      <option value="DR (MRS) C .SELVI PERERA">DR (MRS) C .SELVI PERERA</option>
				      <option value="DR A.S.L LIYANARACHCHI">DR A.S.L LIYANARACHCHI</option>
				      <option value="DR ANIL KUMAR">DR ANIL KUMAR</option>
				      <option value="DR ASUNGA DUNUWILLE">DR ASUNGA DUNUWILLE</option>
				      <option value="DR D.P RUPASINGHE">DR D.P RUPASINGHE</option>
				      <option value="DR H.W PERERA">DR H.W PERERA</option>
				      <option value="DR CHAMPIKA GUNAWARDANA">DR CHAMPIKA GUNAWARDANA</option>
				      <option value="DR DARSHANA WIJEGUNASINGHE">DR DARSHANA WIJEGUNASINGHE</option>
				      <option value="DR SHAMINDA KAHANDAWA">DR SHAMINDA KAHANDAWA</option>
				      <option value="DR DULIP PERERA">DR DULIP PERERA</option>
				      <option value="DR A. SHASHANKA RATHNAYAKE">DR A. SHASHANKA RATHNAYAKE</option>
			</select><br>
			<b>&nbsp&nbsp&nbspBOOK DATE</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<script>
			function d()
            {
        date1.min = new Date().toISOString().slice(0, -14);
            }
    </script>
              <input type="date" class="custom-select-sm mb-3" id="date1" placeholder="Pick A Date" style="width: 240px; padding:" onclick="d();" required=""><br>
              <button type="submit" class="btn btn-primary btn-sm" value="submit" style="background:#1b54a8;  color: white; font-size: 20px"><i class="fa fa-user-md " style="font-size:30px;"></i> &nbspChannel</button>
              <br><br>
              <h3><u>DOCTOR DETAIL LIST</u></h3>
              <table class="table table-bordered" border="2 black">
    <thead>
      <tr>
        <th><center>SPECIALIZATION</center></th>
        <th><center>DOCTOR NAME</center></th>
        <th><center>WEEKDAY</center></th>
        <th><center>TIME</center></th>
        <th><center>CONSULTANT FEE (RS)</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>ALLERGIST</b></td>
        <td><b>PROF SURANJITH SENEVIRATNE</b></td>
        <td><b>MON</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2000.00</b></td>
      </tr>
      <tr>
        <td><b>ALLERGIST</b></td>
        <td><b>PROF ANURA WEERASINGHE</b></td>
        <td><b>TUE</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2000.00</b></td>
      </tr>
      <tr>
        <td><b>ALLERGIST</b></td>
        <td><b>PROF (MRS.) G. NEELIKA MALAVIGE</b></td>
        <td><b>WED</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2000.00</b></td>
      </tr>
      <tr>
        <td><b>ALLERGIST</b></td>
        <td><b>DR AJITH AMARASINGHE</b></td>
        <td><b>FRI</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>1800.00</b></td>
      </tr>
      <tr>
        <td><b>DENTIST</b></td>
        <td><b>DR ATHULA ABEYSUNDARA</b></td>
        <td><b>TUE</b></td>
        <td><b>09:00AM-12:00PM</b></td>
        <td><b>1600.00</b></td>
      </tr>
      <tr>
        <td><b>DENTIST</b></td>
        <td><b>DR SARATH AMARADASA</b></td>
        <td><b>THU</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>1650.00</b></td>
      </tr>
      <tr>
        <td><b>DENTIST</b></td>
        <td><b>DR W M HILARY COORAY</b></td>
        <td><b>FRI</b></td>
        <td><b>09:00AM-12:00PM</b></td>
        <td><b>1600.00</b></td>
      </tr>
      <tr>
        <td><b>DENTIST</b></td>
        <td><b>DR NASAR ABDULWADOOD</b></td>
        <td><b>SAT</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>1700.00</b></td>
      </tr>
      <tr>
        <td><b>PEDIATRICIAN</b></td>
        <td><b>DR KANCHANA SINGAPPULI</b></td>
        <td><b>MON/FRI</b></td>
        <td><b>05:00PM-07:30PM</b></td>
        <td><b>2000.00</b></td>
      </tr>
      <tr>
        <td><b>SURGEON</b></td>
        <td><b>DR (MRS) P.P. FERNANDO</b></td>
        <td><b>SUN</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2500.00</b></td>
      </tr>
      <tr>
        <td><b>SURGEON</b></td>
        <td><b>DR A. KAILAINATHAN</b></td>
        <td><b>TUE</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2500.00</b></td>
      </tr>
      <tr>
        <td><b>SURGEON</b></td>
        <td><b>DR A.S. WITHANAGE</b></td>
        <td><b>FRI</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2700.00</b></td>
      </tr>
      <tr>
        <td><b>THEROPIST</b></td>
        <td><b>DR (MRS) AJANTHA LIYANAGE</b></td>
        <td><b>MON/WED</b></td>
        <td><b>09:00PM-12:00PM</b></td>
        <td><b>1500.00</b></td>
      </tr>
      <tr>
        <td><b>THEROPIST</b></td>
        <td><b>DR (MRS) C .SELVI PERERA</b></td>
        <td><b>TUE/FRI</b></td>
        <td><b>10:00AM-02:00PM</b></td>
        <td><b>1500.00</b></td>
      </tr>
      <tr>
        <td><b>CARDIOLOGIST</b></td>
        <td><b>DR A.S.L LIYANARACHCHI</b></td>
        <td><b>MON</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2200.00</b></td>
      </tr>
      <tr>
        <td><b>CARDIOLOGIST</b></td>
        <td><b>DR ANIL KUMAR</b></td>
        <td><b>WED</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2500.00</b></td>
      </tr>
      <tr>
        <td><b>CARDIOLOGIST</b></td>
        <td><b>DR ASUNGA DUNUWILLE</b></td>
        <td><b>FRI</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2450.00</b></td>
      </tr>
      <tr>
        <td><b>RADIOLOGIST</b></td>
        <td><b>DR D.P RUPASINGHE</b></td>
        <td><b>MON/WED/FRI</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>1800.00</b></td>
      </tr>
      <tr>
        <td><b>RADIOLOGIST</b></td>
        <td><b>DR H.W PERERA</b></td>
        <td><b>TUE/THU/SAT</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>1800.00</b></td>
      </tr>
      <tr>
        <td><b>NEUROLOGIST</b></td>
        <td><b>DR CHAMPIKA GUNAWARDANA</b></td>
        <td><b>MON/SAT</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2500.00</b></td>
      </tr>
      <tr>
        <td><b>NEUROLOGIST</b></td>
        <td><b>DR DARSHANA WIJEGUNASINGHE</b></td>
        <td><b>THU</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2500.00</b></td>
      </tr>
      <tr>
        <td><b>ENDOCRYNOLOGIST</b></td>
        <td><b>DR SHAMINDA KAHANDAWA</b></td>
        <td><b>THU/SAT</b></td>
        <td><b>06:00PM-09:00PM</b></td>
        <td><b>1900.00</b></td>
      </tr>
      <tr>
        <td><b>DREMATOLOGIST</b></td>
        <td><b>DR DULIP PERERA</b></td>
        <td><b>MON/THU</b></td>
        <td><b>04:00PM-07:00PM</b></td>
        <td><b>2300.00</b></td>
      </tr>
      <tr>
        <td><b>DREMATOLOGIST</b></td>
        <td><b>DR A. SHASHANKA RATHNAYAKE</b></td>
        <td><b>TUE/FRI</b></td>
        <td><b>04:00PM-07:30PM</b></td>
        <td><b>2500.00</b></td>
      </tr>
    </tbody>
  </table>
	</div>
</form>








	  
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
	  
	  <?php
if(isset($_POST["logout"]))
{
    sendCode();
}


      ?>
  </body>
</html>