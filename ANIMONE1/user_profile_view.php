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
<?php
   ob_start();
   session_start();
?>

<?php

if(isset($_GET['customer_id']))
   {
	$connect=mysqli_connect("localhost","root","","test");

    $customer_id = mysqli_real_escape_string($connect,$_GET['customer_id']);
    $query = "SELECT * FROM usersl WHERE uid= '{$customer_id}' LIMIT 1";

    $result_set = mysqli_query($connect,$query);

    if($result_set)
     {
       if(mysqli_num_rows($result_set) == 1)
       {
        $result = mysqli_fetch_assoc($result_set);
        $name = $result['uname'];
        $age = $result['age'];
        $mobile = $result['mobile'];
        $gender = $result['gend'];
       }
     }
   }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body style="background-color:powderblue;">
<main>








<center>
<h1><?php echo $name; ?></h1>
  </center>

<form class="userform" action="userprofile.php" method="post">

     <input type="hidden" name="customer" value="<?php echo $customer_id; ?>">
   
   <p>
     <label for="customer_id">User ID:</label>
     <input type="text" name="customer_id" id="customer_id" placeholder="User ID" <?php echo 'value="' . $customer_id . '"'; ?> disabled>
   </p>

   <p>
     <label for="ame">User Name:</label>
     <input type="text" name="user_name" id="user_name" placeholder="User Name" <?php echo 'value="' . $name . '"'; ?> disabled>
   </p>

   <p>
     <label for="last_name">User Age:</label>
     <input type="text" name="user_age" id="user_age" placeholder="User Age" <?php echo 'value="' . $age . '"'; ?> disabled>
   </p>

   <p>
     <label for="email">Mobile Number:</label>
     <input type="text" name="user_mobile" id="user_mobile" placeholder="Mobile Number" <?php echo 'value="' . $mobile . '"'; ?> disabled>
   </p>

   <p>
     <label for="email">Gender:</label>
     <input type="text" name="user_gender" id="user_gender" placeholder="User Gender" <?php echo 'value="' . $gender . '"'; ?> disabled>
   </p>


</form>  

<div>
 <a href = "user_update_details.php?customer_id=<?php echo $customer_id?>"><button style="color:black; width: 200px; margin-top: 5px; margin-left: 20px;">Modify Details</button></a>
</div>

<div>
 <a href = "user_change_password.php?customer_id=<?php echo $customer_id?>"><button style="color:black; width: 200px; margin-top: 5px; margin-left: 20px;">Change Password</button></a>
</div>

<div>
 <a href = "dbook.php?customer_id=<?php echo $customer_id?>"><button style="color:black; width: 200px; margin-top: 0px; margin-left: 20px;">Home</button></a>
</div>


</main>
</body>
</html>