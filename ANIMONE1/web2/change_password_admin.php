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

<body>

	<header class="header">

		<div class="appname">Admin</div>

		<div class="loggedin">Welcome <?php echo $first_name; ?>! <a href="logout.php"><button>LogOut</button></a> </div>
    
	</header>

	<main>

		<h1>Change Password</h1>

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
   	<a href = "admin.php?user_id=<?php echo $user_id?>"><button style="color:white; width: 200px; margin-top: 0px; margin-left: 250px;"> < Back to admin</button></a>
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