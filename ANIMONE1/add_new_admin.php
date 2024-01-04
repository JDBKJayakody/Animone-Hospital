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
   
   $user_id= '';
   $first_name1= '';
   $email= '';

   if(isset($_GET['user_id']))
   {
    $user_id = mysqli_real_escape_string($connect,$_GET['user_id']);
    $query = "SELECT * FROM admin WHERE ID= {$user_id} LIMIT 1";

    $result_set = mysqli_query($connect,$query);

    if($result_set)
     {
       if(mysqli_num_rows($result_set) == 1)
       {
        $result = mysqli_fetch_assoc($result_set);
        $first_name1 = $result['FirstName'];
        $email = $result['Email'];
       }
       else
       {
        header("Location: ./index.php?error=query_failed");
       }
     }

     else
     {
        header("Location: ./index.php?error=query_failed");
     }
   }

?>


<?php
  
  $errors = array();
  $first_name = '';
  $last_name = '';
  $email = '';
  $password = '';

  if(isset($_POST['submit']))
  {
  	$first_name = $_POST['first_name'];
  	$last_name = $_POST['last_name'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	//Checking required fields
  	$req_fields = array('first_name','last_name','email','password');

  	foreach ($req_fields as $field)
  	{
  		if(empty(trim($_POST[$field])))
  		{
  			$errors[] = $field . " is required";
  		}
  	}

  	$max_len_fields = array('first_name' => 50, 'last_name' => 50, 'email' => 50, 'password' => 50);

  	foreach ($max_len_fields as $field => $max_len)
  	{
  		if(strlen(trim($_POST[$field])) > $max_len)
  		{
  			$errors[] = $field . ' must be less than ' . $max_len . ' characters';
  		}
  	}

  	if(!is_email($_POST['email']))
  	{
  		$errors[] = "Email Address is Invalid";
  	}

  	$email = mysqli_real_escape_string($connect,$_POST['email']);

  	$query = "SELECT * FROM admin WHERE Email='{$email}' LIMIT 1";
  	$result_set = mysqli_query($connect,$query);

  	if($result_set)
  	{
  		if(mysqli_num_rows($result_set) == 1)
  		{
  			$errors[] = 'Email Address is already exists';
  		}
  	}

  	if(empty($errors))
  	{
  		$first_name = mysqli_real_escape_string($connect,$_POST['first_name']);
  		$last_name = mysqli_real_escape_string($connect,$_POST['last_name']);
  		$password = mysqli_real_escape_string($connect,$_POST['password']);
  		$hashed_password = sha1($password);

  		$query = "INSERT INTO admin (FirstName,LastName,Email,Password,IsDeleted) VALUES ('{$first_name}','{$last_name}','{$email}','{$hashed_password}',0)";

  		$result = mysqli_query($connect, $query);

  		if($result)
  		{
  			header("Location: admin.php?user_id=$user_id");
  		}
  		else
  		{
  			$errors[] = 'Failed to add the new record';
  		}

  	}

  }

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
	<title>Add New Admib</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body style="background-color:powderblue;">

	<header class="header">

	<div class="appname"><center><h1>Admin</h1></center></div>

	<h2><div class="loggedin">Welcome <?php echo $first_name1; ?>! <a href="logout.php"><button>LogOut</button></a></div></h2>

	</header>

	<main>

        <h3>Add New Admin</h3>

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

        <form class="userform" action="add_new_admin.php?user_id=<?php echo $user_id ?>" method="post">

		<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
		
        <p>
        	<label for="first_name">First Name:</label>
        	<input type="text" name="first_name" id="first_name" placeholder="First Name" <?php echo 'value="' . $first_name . '"' ?> >
        </p>

        <p>
        	<label for="last_name">Last Name:</label>
        	<input type="text" name="last_name" id="last_name" placeholder="Last Name" <?php echo 'value="' . $last_name . '"' ?> >
        </p>

        <p>
        	<label for="email">Email:</label>
        	<input type="email" name="email" id="email" placeholder="Email Address" <?php echo 'value="' . $email . '"' ?> >
        </p>

        <p>
        	<label for="password">Password:</label>
        	<input type="password" name="password" id="password" placeholder="Password">
        </p>

        <p>
        	<label for="">&nbsp;</label>
        	<button style="color: white;" type="submit" name="submit" id="submit">Save</button>
        </p>

        </form>

        <div>
        <label for="">&nbsp</label>  
          <a href="admin.php?user_id=<?php echo $user_id ?>"><button style="width: 200px; margin-left: 20px; color: white;" > < Back to Admin</button> </a> 
        </div>

	</main>
  
</body>

</html>

<?php mysqli_close($connect); ?>