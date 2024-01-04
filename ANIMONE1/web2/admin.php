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



 if(isset($_GET['search']))
  {
  	$search = mysqli_real_escape_string($connect,$_GET['search']);

  	$query = "SELECT * FROM admin WHERE (FirstName LIKE '%{$search}%' or LastName LIKE '%{$search}%' or Email LIKE '%{$search}%') AND IsDeleted = 0 ORDER BY FirstName";
  }

 else
  {
  	$query = "SELECT * FROM admin WHERE IsDeleted=0 ORDER BY FirstName";
  }

  $users = mysqli_query($connect,$query);

  if($users)
  {
  	while($user = mysqli_fetch_assoc($users))
  	{
  		$user_list .= "<tr>";
  		$user_list .= "<td> {$user['FirstName']} </td>";
  		$user_list .= "<td> {$user['LastName']} </td>";
  		$user_list .= "<td> {$user['Email']} </td>";
  		$user_list .= "<td> {$user['LastLogIn']} </td>";
  		$user_list .= "<td> <a href=\" modify_admin.php?user_id={$user['ID']}\"><button style=\"width:90px;\">Modify</button></a></td>";
  		$user_list .= "</tr>";
  	}
  }

  else
  {
  	echo "Database Query Failed";
  }

?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Admins</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

  <header class="header">
  	
  	<div class="appname">Admin</div>

  	<div class="loggedin">
  		Welcome <?php echo $first_name; ?>! <a href="logout.php"><button>LogOut</button></a>
  	</div>

  </header>

  	<main>
  		
        <h1>Admins</h1>

    <!-- Use when Search the Name-->
        <div class="search">
        	
            <form action="admin.php?user_id=<?php echo $user_id ?>" method="get">
            	<p>
					<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            		<input type="text" name="search" id="search" placeholder="Input First Name, Last Name or Email Address and press Enter" value="<?php echo $search ?>" required autofocus>
            	</p>
            </form>

            <div class="refresh">
                <a href="admin.php?user_id=<?php echo $user_id ?>"><button>Refresh</button></a>
            </div>

        </div> <!--saerch-->

        <table class="masterlist">

        	<tr>
        		<th>First Name</th>
        		<th>Last Name</th>
        		<th>Email</th>
        		<th>Last Login</th>
        		<th>Modify Details</th>
        	</tr>

        	<?php echo $user_list ?>

        </table>

        <div class = "refresh">
        	<a href="users.php?user_id=<?php echo $user_id ?>"><button style="margin-top: 3px; margin-right: 100px; width:150px; margin-top:10px; float: right;">Users</button></a>
        </div>

        <div class = "refresh">
        	<a href="add_new_admin.php?user_id=<?php echo $user_id ?>"><button style="margin-top: 20px; margin-right: 20px; width: 150px; margin-top:10px; float: right;">+ Add New Admin</button></a>
        </div>

  	</main>

</body>

</html>