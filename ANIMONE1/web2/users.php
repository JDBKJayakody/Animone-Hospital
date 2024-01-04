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

<body>

	<header class="header">

		<div class = "appname">Admin</div>

		<div class="loggedin">
			Welcome <?php echo $first_name; ?>! <a href = "logout.php"><button style= "margin-right: 100px; margin-left: 10px; width: 200px; border-radius: 50px; background-color: white; hover-color:red;">LogOut</button></a>
		</div>

	</header>

	<main>
		
		<h1>Sellers</h1>

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