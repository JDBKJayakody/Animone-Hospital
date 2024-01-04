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
  $customer_id= '';
  $name = '';
  $age = '';
  $mobile = '';
  $gender = '';
  $password = 'abcd1234';

  if(isset($_POST['submit']))
  {
	$customer_id= $_POST['customer_id'];
  	$name = $_POST['user_name'];
  	$age = $_POST['user_age'];
  	$mobile = $_POST['user_mobile'];
    $gender = $_POST['user_gender'];
  	

  	//Checking required fields
  	$req_fields = array('customer_id','user_name','user_age','user_mobile','user_gender');

  	foreach ($req_fields as $field)
  	{
  		if(empty(trim($_POST[$field])))
  		{
  			$errors[] = $field . " is required";
  		}
  	}

  	$max_len_fields = array('customer_id' => 50 ,'user_name' => 50, 'user_age' => 50, 'user_mobile' => 50,'user_gender' => 50);

  	foreach ($max_len_fields as $field => $max_len)
  	{
  		if(strlen(trim($_POST[$field])) > $max_len)
  		{
  			$errors[] = $field . ' must be less than ' . $max_len . ' characters';
  		}
  	}

  	$customer_id = mysqli_real_escape_string($connect,$_POST['customer_id']);

  	$query = "SELECT * FROM usersl WHERE uid='{$customer_id}' ";
  	$result_set = mysqli_query($connect,$query);

  	if($result_set)
  	{
  		if(mysqli_num_rows($result_set) == 1)
  		{
  			$errors[] = 'NIC is already exists';
  		}
  	}

  	if(empty($errors))
  	{
		$customer_id = mysqli_real_escape_string($connect,$_POST['customer_id']);
  		$name = mysqli_real_escape_string($connect,$_POST['user_name']);
  		$age = mysqli_real_escape_string($connect,$_POST['user_age']);
        $mobile = mysqli_real_escape_string($connect,$_POST['user_mobile']);
  		$gender = mysqli_real_escape_string($connect,$_POST['user_gender']);
  		
  		$query = "INSERT INTO usersl (uid,uname,age,mobile,gend,pwd) VALUES ('{$customer_id}','{$name}','{$age}','{$mobile}','{$gender}','{$password}')";

  		$result = mysqli_query($connect, $query);

  		if($result)
  		{
  			header("Location: users.php?user_id=$user_id");
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
	<title>Add New User</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body style="background-color:powderblue;">
	<header class="header">

	<div class="appname"><center><h1>Admin</h1></center></div>

		<h2><div class="loggedin">Welcome <?php echo $first_name1; ?>! <a href="logout.php"><button>LogOut</button></a></div></h2>

	</header>

	<main>

        <h3>Add New User</h3>

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

        <form class="userform" action="add_new_user.php?user_id=<?php echo $user_id ?>" method="post">

		<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        
		<p>
        	<label for="id">ID:</label>
        	<input type="text" name="customer_id" id="customer_id" placeholder="User NIC" <?php echo 'value="' . $customer_id . '"' ?> >
        </p>
		
        <p>
        	<label for="name">Name:</label>
        	<input type="text" name="user_name" id="user_name" placeholder="User Name" <?php echo 'value="' . $name . '"' ?> >
        </p>

        <p>
        	<label for="age">Age:</label>
        	<input type="text" name="user_age" id="user_age" placeholder="User Age" <?php echo 'value="' . $age . '"' ?> >
        </p>

        <p>
        	<label for="mobile">Mobile:</label>
        	<input type="text" name="user_mobile" id="user_mobile" placeholder="Mobile Number" <?php echo 'value="' . $mobile. '"' ?> >
        </p>

        <p>
        	<label for="gender">Gender:</label>
        	<input type="text" name="user_gender" id="user_gender" placeholder="User Gender" <?php echo 'value="' . $gender . '"' ?> >
        </p>

        

        <p>
        	<label for="">&nbsp;</label>
        	<button style="color: white;" type="submit" name="submit" id="submit">Save</button>
        </p>

        </form>

        <div>
        <label for="">&nbsp</label>  
          <a href="users.php?user_id=<?php echo $user_id ?>"><button style="width: 200px; margin-left: 10px; color: white;" > < Back to User</button> </a> 
        </div>

	</main>
  
</body>

</html>

<?php mysqli_close($connect); ?>