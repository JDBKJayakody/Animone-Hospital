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


<?php

 if(!isset($_SESSION['user_id']))
 {
  header('Location: admin_login.php');
 } 

 $user_id = '';
 $user_list = '';
 $search = '';

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
	  $first_name = $result['FirstName'];
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


 //Search the User
  if (isset($_GET['search']))
  {
  	$search = mysqli_real_escape_string($connect,$_GET['search']);

  	$query = "SELECT * FROM usersl WHERE (uid LIKE '%{$search}%' or uname LIKE '%{$search}%' or mobile LIKE '%{$search}%' ) ORDER BY uid";
  }

 else
  {
  	$query = "SELECT * FROM usersl ORDER BY uid";
  }

  $users = mysqli_query($connect,$query);

  if($users)
  {
  	while($user = mysqli_fetch_assoc($users))
  	{
  		$user_list .= "<tr>";
  		$user_list .= "<td> {$user['uid']} </td>";
  		$user_list .= "<td> {$user['uname']} </td>";
  		$user_list .= "<td> {$user['age']} </td>";
      	$user_list .= "<td> {$user['mobile']} </td>";
  		$user_list .= "<td> {$user['gend']} </td>";
  		$user_list .= "<td> <a href=\" user_profile_view.php?customer_id={$user['uid']}&&user_id=$user_id\"><button style=\"width:90px;\">View</button></a></td>";
        $user_list .= "<td> <a href = \"delete_user.php?customer_id={$user['uid']}&&user_id=$user_id\"onclick=\"return confirm('Are you sure?');\"><button style=\"width:90px;\">Delete</button></a> </td>";
  		$user_list .= "</tr>";
  	}
  }

  else
  {
  	echo "Database Query Failed!";
  }

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
	<title>Sellers</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body style="background-color:powderblue;">

	<header class="header">

<div class="appname"><center><h1>Admin</h1></center></div>

		<div class="loggedin">
			<h2>Welcome <?php echo $first_name; ?>! <a href = "logout.php"><button style= "margin-right: 100px; margin-left: 10px; width: 200px; border-radius: 50px; background-color: white; hover-color:red;">LogOut</button></a></h2>
		</div>

	</header>

	<main>
		
		<h3>Manage Users</h3>

		<div class = "search">

			<form action="users.php?user_id=<?php echo $user_id ?>" method="get">
				<p>
					<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
					<input type="text" name="search" id="search" placeholder="Input First Name, Last Name or Email Address and press Enter" value="<?php echo $search ?>" required autofocus>
				</p>
			</form>

            <div class="refresh">           	
                <a  href="users.php?user_id=<?php echo $user_id ?>"><button>Refresh</button></a>
            </div>
			

		</div> <!--search-->

		<table class="masterlist">

			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Age</th>
        		<th>Mobile</th>
				<th>Gender</th>
				<th>User Profile</th>
        		<th>Delete</th>
			</tr>

			<?php echo $user_list ?>

		</table>


	

    <div class="refresh">
          <a href="admin.php?user_id=<?php echo $user_id ?>"><button style= "margin-top: 3px; margin-right: 100px; width:150px; margin-top:10px; float: right;">< Back to Admin</button></a>
    </div>

	<div class="refresh">
        <a href="add_new_user.php?user_id=<?php echo $user_id ?>"><button style= "margin-top: 20px; margin-right: 20px; width: 150px; margin-top:10px; float: right;"">+ Add New User</button></a>
    </div>


	</main>

</body>

</html>