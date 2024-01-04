<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  
<body style="background-color:powderblue;">
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

<?php session_start(); ?>
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/function.php"); ?>

<?php

  if(!isset($_SESSION['user_id']))
  {
  	header('Location: admin_login.php');
  }

  $errors = array();

  $user_id = '';
  $first_name = '';
  $last_name = '';
  $email = '';
  $password = '';

  if(isset($_GET['user_id']))
  {
  	$user_id = mysqli_real_escape_string($connect,$_GET['user_id']);

  	$query = "SELECT * FROM admin WHERE ID={$user_id} LIMIT 1";
  	$result_set = mysqli_query($connect,$query);

  	if($result_set)
  	{
  		if(mysqli_num_rows($result_set) == 1)
  		{
  			//User Found
  			$result = mysqli_fetch_assoc($result_set);
  			$first_name = $result['FirstName'];
  			$last_name = $result['LastName'];
  			$email = $result['Email'];
  		}
  		else
  		{
  			header('Location: admin.php?error=user_not_found');
  		}
  	}
  	else
  	{
       header('Location: admin.php?error=query_failed'); 
  	}

  }

  if(isset($_POST['submit']))
  {
  	$user_id = $_POST['user_id'];
  	$password = $_POST['password'];

  	$req_fields = array('user_id','password');

  	foreach ($req_fields as $field) 
  	{
  		if(empty(trim($_POST[$field])))
  		{
  			$errors[] = $field . " is required"; 
  		}
  	}

    $max_len_fields = array('password' => 40);

    foreach ($max_len_fields as $field => $max_len) 
    {
    	if(strlen(trim($_POST[$field])) > $max_len)
    	{
    		$errors[] = $field . ' must be less than ' . $max_len . ' characters.';
    	}
    }

    if(empty($errors))
    {
    	$password = mysqli_real_escape_string($connect, $_POST['password']);
    	$hashed_password = sha1($password);

    	$query = "UPDATE admin SET Password = '{$hashed_password}' WHERE ID = {$user_id} LIMIT 1";

    	$result_set = mysqli_query($connect,$query);

    	if($result_set)
    	{
    		header("Location: admin.php?password_changed_successful&&user_id=$user_id");
    	}
    	else
    	{
    		$errors[] = 'Failed to update the Password';
    	}
    }

  }

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>


<body style="background-color:powderblue;">

	<header class="header">

	<center><h1>	<div class="appname">Admin</div> </h1> <center>

		<h2><div class="loggedin">Welcome <?php echo $first_name; ?>! <a href="logout.php"><button>LogOut</button></a> </div><h2>
    
	</header>

	<main>

		<h3>Change Password</h3>

		<?php

          if(!empty($errors))
          {
          	echo '<div class="errmsg">';
            echo '<b>There were error(s) on your form.</b> <br>';

            foreach ($errors as $error) 
            {
          	  echo '- ' . $error . '<br>';
            }

            echo '</div>';
          }

		?>

		<form class="userform" action="change_password_admin.php?user_id=<?php echo $user_id ?>" method="post">

			<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

			<p>
				<label for="first_name">First Name:</label>
				<input type="text" name="first_name" id="first_name" <?php echo 'value="' . $first_name . '"'; ?> disabled>
			</p>

			<p>
				<label for="last_name">Last Name:</label>
				<input type="text" name="last_name" id="last_name" <?php echo 'value="' . $last_name . '"'; ?> disabled>
			</p>

			<p>
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" <?php echo 'value="' . $email . '"'; ?> disabled>
			</p>

			<p>
				<label for="password">New Password:</label>
				<input type="password" name="password" id="password" placeholder="New Password">
			</p>

			<p>
				<label for="showpassword">Show Password</label>
				<input type="checkbox" name="showpassword" id="showpassword" style="width:20px; height:20px;">
			</p>

			<p>
				<label for="">&nbsp;</label>
				<button style="color: white;" type="submit" name="submit">Update Password</button>
			</p>

		</form>

		<div>
			<center>
   	<a href = "admin.php?user_id=<?php echo $user_id?>"><button style="color:white; width: 200px; margin-top: 0px; margin-left: 20px;"> < Back to admin</button></a>
		</center>
</div>
		
	</main>

	<script src="js/jquery.js"></script>
    <script>
      $(document).ready(function(){
          $('#showpassword').click(function(){
            if( $('#showpassword').is(':checked') ){
             $('#password').attr('type','text');
            } else{
              $('#password').attr('type','password');
            }
          });
        });
    </script>  

</body>

</html>

<?php mysqli_close($connect); ?>