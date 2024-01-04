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

  
<body style="background-color:powderblue;">

  <header class="header">
  	
  	<div class="appname"><center><h1>Admin</h1></center></div>

  	<div class="loggedin">
  	<h2>	Welcome <?php echo $first_name; ?>! <a href="logout.php"><button>LogOut</button></a> </h2>
  	</div>

  </header>

  	<main>
  		
        <h3>Manage Admins</h3>

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