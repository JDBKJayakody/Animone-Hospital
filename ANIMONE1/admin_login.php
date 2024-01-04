<html>
<body>
<h1 style="background-color:pink;"><center>ADMIN PANEL </center></h1>

<body style="background-color:powderblue;">
		<center>
<img src="admin.jpg"  style="width:400px;height:200px;">
		
</center>

<?php session_start(); ?>
<?php require_once("inc/connection.php"); ?>

<?php

  if(isset($_POST['submit']))
  {
  	$errors = array();

  	if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1)
  	{
  		$errors[] = 'Username Missing / Invalid';
  	}

  	if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1)
  	{
  		$errors[] = 'Username Missing / Invalid';
  	}

  	if(empty($errors))
  	{
  		$email = mysqli_real_escape_string($connect,$_POST['email']);
  		$password = mysqli_real_escape_string($connect,$_POST['password']);
  		$hashed_password = sha1($password);

  		$query1 = "SELECT * FROM admin WHERE Email='{$email}' AND Password='{$hashed_password}' LIMIT 1";

  		$result_set1 = mysqli_query($connect, $query1);

  		if($result_set1)
  		{
  			if(mysqli_num_rows($result_set1) == 1)
  			{
    			$user = mysqli_fetch_assoc($result_set1);
    			$_SESSION['user_id'] = $user['ID'];
    			$_SESSION['first_name'] = $user['FirstName'];

    			$query = "UPDATE admin SET LastLogIn = NOW() WHERE ID={$_SESSION['user_id']} LIMIT 1";

    			$result_set = mysqli_query($connect, $query);

    			// if(!$result_set)
    			// {
    			// 	die('Database query Failed.');
    			// }

    			header('Location: admin.php?user_id=' . $_SESSION['user_id']);
  			}

  			else
  			{
    			$errors[] = 'Invalid Username / Password';
  			}
  		}



  		else
  		{
  			$errors[] = 'Database Query Failed';
  		}
  	}
  }

?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=text], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


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


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
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
</style>
</head>
<body>

<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>E Channeling System</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body style="background-color:purple;">
<center>
	<div class="login">
   	  <form action="admin_login.php" method="post">
   	  	<fieldset>
   	  		<h1>Login</h1>

   	  		<?php
              
              if(isset($errors) && !empty($errors))
              {
              	echo '<p class="error">Invalid Username / Password</p>';
              }

   	  		?>

   	  		

   	  		<p>
   	  			<label for="email">Username</lebel>
   	  			<input type="email" name="email" id="email" placeholder="Email Address">
   	  		</p>

   	  		<p>
   	  			<label for="password">Password</label>
   	  			<input type="password" name="password" id="password" placeholder="Password">
   	  		</p>

   	  		<p>
   	  			<button type="submit" name="submit">Login</button>
   	  		</p>

   	  	</fieldset>
   	  </form>
   	</div><!-- login -->
			</center>

</body>
</body>

</html>
<html>