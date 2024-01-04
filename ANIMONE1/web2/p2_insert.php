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
    box-sizing: border-box;
	-webkit-font-smoothing: auto;
  -moz-osx-font-smoothing: grayscale;
}

		footer {
			clear: both;
			position:fixed;
			height: 10px;
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

	function getFee()
{
if (docname.value=="PROF SURANJITH SENEVIRATNE")
{
document.getElementById("fee").value="2000.00";
}
else if (docname.value=="PROF ANURA WEERASINGHE")
{
document.getElementById("fee").value="2000.00";
}
else if (docname.value=="PROF (MRS.) G. NEELIKA MALAVIGE")
{
document.getElementById("fee").value="2000.00";
}
else if (docname.value=="DR AJITH AMARASINGHE")
{
document.getElementById("fee").value="1800.00";
}
else if (docname.value=="DR ATHULA ABEYSUNDARA")
{
document.getElementById("fee").value="1600.00";
}
else if (docname.value=="DR SARATH AMARADASA")
{
document.getElementById("fee").value="1650.00";
}
else if (docname.value=="DR W M HILARY COORAY")
{
document.getElementById("fee").value="1600.00";
}
else if (docname.value=="DR NASAR ABDULWADOOD")
{
document.getElementById("fee").value="1700.00";
}
else if (docname.value=="DR KANCHANA SINGAPPULI")
{
document.getElementById("fee").value="2000.00";
}
else if (docname.value=="DR (MRS) P.P. FERNANDO")
{
document.getElementById("fee").value="2500.00";
}
else if (docname.value=="DR A. KAILAINATHAN")
{
document.getElementById("fee").value="2500.00";
}
else if (docname.value=="DR A.S. WITHANAGE")
{
document.getElementById("fee").value="2700.00";
}
else if (docname.value=="DR (MRS) AJANTHA LIYANAGE")
{
document.getElementById("fee").value="1500.00";
}
else if (docname.value=="DR (MRS) C .SELVI PERERA")
{
document.getElementById("fee").value="1500.00";
}
else if (docname.value=="DR A.S.L LIYANARACHCHI")
{
document.getElementById("fee").value="2200.00";
}
else if (docname.value=="DR ANIL KUMAR")
{
document.getElementById("fee").value="2500.00";
}
else if (docname.value=="DR ASUNGA DUNUWILLE")
{
document.getElementById("fee").value="2450.00";
}
else if (docname.value=="DR D.P RUPASINGHE")
{
document.getElementById("fee").value="1800.00";
}
else if (docname.value=="DR H.W PERERA")
{
document.getElementById("fee").value="1800.00";
}
else if (docname.value=="DR CHAMPIKA GUNAWARDANA")
{
document.getElementById("fee").value="2500.00";
}
else if (docname.value=="DR DARSHANA WIJEGUNASINGHE")
{
document.getElementById("fee").value="2500.00";
}
else if (docname.value=="DR SHAMINDA KAHANDAWA")
{
document.getElementById("fee").value="1900.00";
}
else if (docname.value=="DR DULIP PERERA")
{
document.getElementById("fee").value="2300.00";
}
else if (docname.value=="DR A. SHASHANKA RATHNAYAKE")
{
document.getElementById("fee").value="2500.00";
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

    <div class="container">



<form name="form1" method="POST">
<br><br>


COUNTRY :
<div class="input-group">
 <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <!--<input id="country" type="text" class="form-control" name="country" placeholder="country"pattern="[A-Za-z ]{1,32}" required>-->
  <select id="country" name="country" required>
    <option value="">select country</option>
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, Democratic Republic of the Congo</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D'Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CW">Curacao</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and Mcdonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macao</option>
    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="CS">Serbia and Montenegro</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.s.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>
</div>
<br>
 NAME :
 <select name="mar">
   <option value="MR">MR</option>
   <option value="MRS">MRS</option>
   <option value="MISS">MISS</option>
<option value="Master">Master</option>
</select>
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="name" type="text" class="form-control" name="name" placeholder="name" pattern="[A-Za-z ]{1,32}" onchange="getFee();" required>
  </div>
<br>
  PHONE :
 <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
   <input id="phone" type="text" class="form-control" name="phone" placeholder="phone number excluding country code" pattern="[0-9]{3}[0-9]{7}" required>
 </div>
<br>
<div class="container">
  NIC :
<div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
   <input id="nic" type="text" class="form-control" name="nic" placeholder="NIC Required" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" required>
</div>

EMAIL :
<div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input id="email" type="text" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
</div>
<br>
  ADDRESS :
  <div class="input-group">
    <span class="input-group-addon">  <i class="glyphicon glyphicon-home"></i></span>
    <input id="address" type="text" class="form-control" name="address" placeholder="address"pattern="\d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\" required>
    </div>
<br>
DOCTOR NAME :
  <?php
  $dName = "";
  if(isset($_POST["docName"]))
  {
     $dName = $_POST["docName"];
  }
  echo "<div class='input-group'>
  <span class='input-group-addon'>  <i class='glyphicon glyphicon-home'></i></span>
  <input id='docname' type='text' class='form-control' name='Dname'  value='$dName'  readonly pattern='[A-Za-z ]{1,32}' readonly required></div>";?>
</div>

<br>

<div class="container">
ConsultantFee :
  <div class='input-group'>
  <span class='input-group-addon'> <i class='glyphicon glyphicon-home'></i></span>
  <input id='fee' type='text' class='form-control' name='ConsultantFee' pattern='^\d+$' readonly required>
  </div></div>
<br>
<!--<div class="form-group">
  <label for="sel1">Default select list</label>
  <select class="form-control" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>-->

<!--  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">REGISTATION</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">BACK</a></li>
      <li><a href="#">edit</a></li>
      <li><a href="#">confirm</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>-->

</div>
<div class="container">

  <!--<input type="submit"name="submit" value="submit" class="btn btn-primary btn-block">
  <input type="button"name="cancel" class="btn btn-default btn-block"value="Cancel">-->

   <input type="submit"name="submit" value="submit"  class="btn btn-primary btn-block"><br>
  <!--<input type="submit" name="submit" value="submit">-->
<!--  <input type="button" name="cancel" value="Cancel"><br><br>-->
  </form>
</div>
<!--***************************************************************************************************-->

<form name="form1" method="POST" action="indexx.php">
<div class="container">
<!--<input type="submit" name="submit" value="Cancel"><br><br>-->
<!--<input type="submit"name="submit" class="btn btn-default btn-block"value="Cancel">-->
<input type="submit"name="submit" value="Cancel" class="btn btn-primary btn-block">
</div>
</form>




    </section>
		

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
	  </header>




<div>



<?php





$num1 = rand(2,200);
echo "<label for='num1' id='num1'>
    Code: $num1 </label>" ; 
  

if (isset($_POST['submit']))
{
  $_SESSION['dnm']=$Dname;
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed : ".mysqli_connect_error());
}
else
  {
       // $num1=$_REQUEST['num1'];
        $country=$_REQUEST['country'];
        $mar=$_REQUEST['mar'];
        $name=$_REQUEST['name'];
        
        $phone=$_REQUEST['phone'];
        $nic=$_REQUEST['nic'];
        $email=$_REQUEST['email'];
        $address=$_REQUEST['address'];
        $Dname=$_REQUEST['Dname'];
        $ConsultantFee=$_REQUEST['ConsultantFee'];

    $sql = "INSERT INTO person(country,mar,name,phone,nic,email,address,Dname,ConsultantFee)VALUES('$country','$mar','$name','$phone','$nic','$email','$address','$Dname',' $ConsultantFee')";
    if(mysqli_query($conn,$sql))
    {
      
        echo"record created successfully";
        header("Location:paymentMINII.php");
    }
  else
   {
    echo "Error: ".$sql."<br>". mysqli_error($conn);
   }


    mysqli_close($conn);
     }
   }




?>
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
				  © 2020 Copyright:
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