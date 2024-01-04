<?php session_start(); ?>
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/function.php"); ?>

<?php

 if(!isset($_SESSION['user_id']))
   {
   header('Location: admin_login.php');
   }

   $errors = array();
   
   $user_id= '';
   $customer_id= '';
   $name= '';
   $first_name1= '';
   $last_name= '';
   $age= '';
   $mobile= '';
   $gender= '';
   $email1= '';
   $home_town= ''; 
   $password='';

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
        //$last_name = $result['LastName'];
        $email1 = $result['Email'];
        //$home_town = $result['HomeTown'];
       }
       else
       {
        header("Location: ./index.php?error=query_failed");
       }
     }

     else
     {
        header("Location: /index.php?error=query_failed");
     }
   }

?>


<?php

  if(isset($_GET['customer_id']))
  {
    $customer_id = mysqli_real_escape_string($connect,$_GET['customer_id']);

    //if($user_id == $_SESSION['user_id'])
    //{
      //header('Location: seller.php?cannot delete the current user' ); 
    //}
    //else
    
      $query = "SELECT * FROM usersl WHERE uid = '{$customer_id}' ";

      $result_set = mysqli_query($connect,$query);

      if($result_set)
      {
        if(mysqli_num_rows($result_set) == 1)
       {
        $result = mysqli_fetch_assoc($result_set);
        $customer_id = $result['uid'];
        $name = $result['uname'];
        $age = $result['age'];
        $mobile = $result['mobile'];
        $gender = $result['gend'];
       }
       else
       {
        header("Location: ./index.php?error=query_failed&&user_id=$user_id");
       }
       
      }
      else
      {
        header("Location: ./index.php?error=query_failed&&user_id=$user_id");
      }
    
  }

  else
  {
    header("Location: ./index.php?user_id=$user_id");
  }

?>


<!DOCTYPE>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Modify Admin Details</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
<style>

/* body{
  font-family : Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-size : 14px; 
  background-image: url("img/567.jpg");
  background-size: 150%
}


{
  margin : 0px;
}


p
{
  margin-bottom : 15px; 
}

a
{
  text-decoration: none; 
  color:white;
  font-weight: bold;
}

.login
{
  width : 350px;
  margin: 200px auto;
}

label
{
  font-weight: bold;
  text-align: justify-all;
  color: white; 
  margin-bottom: 5px;
}

input
{
  display : block;
  width : 100%;
  padding : 5px;
  box-sizing : border-box;
  font-size : 14px;   
  color: white; 
  background: #00000025;
}

.input:hover
{
  background-color: black;
}

input:hover
{
  background: black;
  color: white;
}

button
{
  width : 100%;
  box-sizing : border-box;
  padding : 5px;
  background-color: green;  
  font-weight: bold;
  font-size: 15px;
}

button:hover
{
  background-color: black; 
  color: white; 
  cursor: pointer;
}

.header
{
  background-color: #6495ED;
}

.appname
{
  border: 2px dashed blue;
  padding: 5px;
}

.refresh button 
{
  margin-bottom: 10px;
  box-sizing : border-box;
  padding : 5px;
  background-color: #4169E1; 
  width: 200px; 
  float: right;
  color: red;
  font-weight: bold;
}

.refresh button:hover 
{
  background-color: black; 
  cursor: pointer;
  color: white;
}

.refresh button a 
{
  text-decoration: none;
  color: red; 
}

.refresh button a:hover 
{
  color: white;
}

.error
{
  text-align : center;
  background : red;
  color : white;
  padding : 5px;
}

.loggedin
{
  font-size: 18px;
  font-weight: bold;
  color: blue;
}

.loggedin button:hover
{
  color: red;
}

.info
{
  text-align : center;
  background-color : green;
  color : white;
  padding : 5px;    
}

fieldset
{
  border: 5px solid white;
}

fieldset h1
{
  color: white;
  text-align: center;
  margin-bottom: 15px;
}

p label
{
  color: white;
}



header
{
  background-color : #eee;
  overflow : auto;
  padding : 10px; 
}

header .appname
{
  float : left;
  margin-left: 100px;
}

header .loggedin
{
  float : right;
  text-align: justify;
}

header .loggedin button
{
  margin-right: 100px; 
  margin-left: 10px; 
  width: 200px; 
  border-radius: 50px; 
  background-color: white; 
  hover-color:red;
}

main
{
  width : 1000px;
  margin : 30px auto;
}

main h1
{
  margin-bottom : 20px;
  font-size : 50px;  
  color: white;
  text-align: center;
}

main h1 span
{
  font-size : 20px; 
}

.search
{
  width: 80%;
  margin-left: auto;
  margin-right: auto;
}

table.masterlist
{
  width : 80%;
  border-collapse : collapse;  
  margin-left: auto;
  margin-right: auto;
}

table.masterlist th
{
  background-color : #191970;
  text-align : left; 

}

table.masterlist th,
table.masterlist td
{
  padding : 10px;
  border-bottom : 1px solid #aaa;
  text-align: center;
  color: white;
}


form.userform label
{
  width : 15%;
  float : left;
  margin-left: 100px;
}

form.userform input
{
  width : 60%;
}

form.userform button
{
  width : 200px;
} 

.errmsg
{
  margin : 20px 0;
  color : red; 
}

.profile-picture
{
  width: 200px;
  height: 200px;
  background-color: #ffffff;
  border:5px solid #00000040;
  margin: 50px auto;
  position: relative;
}

.profile-picture p
{
  text-align: center;
  margin-top: 100px;
  margin-left: 60px;
  position: absolute;
} */

</style>

</head>

<body>
  
   <header class = "header">
       <div class="appname">Seller </div>
       <div class="loggedin">Welcome <?php echo $first_name1; ?>! <a href="logout.php"><button>LogOut</button></a></div>

    </header>
  
  <main>

   <h1><?php echo $name; ?></h1>

   <!-- <div class = "profile-picture">
     <p>Profile Picture</p>
   </div> -->

   <?php
     
     if (!empty($errors))
        {
         echo '<div class="errmsg">';
         echo '<b>There were error(s) on your form.</b> <br>';

         foreach($errors as $error)
           {
            echo '- ' . $error . '<br>';
           }
         echo '</div>';

        }

   ?>
 
   <form class="userform" action="user_profile.php" method="post">

        <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
      
      <p>
        <label for="id">User ID:</label>
        <input type="text" name="user_id" id="user_id" placeholder="User ID" <?php echo 'value="' . $customer_id . '"'; ?> disabled>
      </p>

      <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Name" <?php echo 'value="' . $name . '"'; ?> disabled>
      </p>

      <p>
        <label for="age">Age:</label>
        <input type="text" name="age" id="age" placeholder="Age" <?php echo 'value="' . $age . '"'; ?> disabled>
      </p>

      <p>
        <label for="mobile">Mobile:</label>
        <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" <?php echo 'value="' . $mobile . '"'; ?> disabled>
      </p>

      <p>
        <label for="mobile">Gender:</label>
        <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" <?php echo 'value="' . $gender . '"'; ?> disabled>
      </p>

   </form>  

   <div>
    <a href = "users.php?user_id=<?php echo $user_id?>"><button style="color:white; width: 200px; margin-top: 0px; margin-left: 250px;"> < Users</button></a>
   </div>

  </main>

</body>

</html>