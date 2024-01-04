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
<main>









<h1><?php echo $name; ?></h1>




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
 <a href = "user_update_details.php?customer_id=<?php echo $customer_id?>"><button style="color:black; width: 200px; margin-top: 5px; margin-left: 250px;">Modify Details</button></a>
</div>

<div>
 <a href = "user_change_password.php?customer_id=<?php echo $customer_id?>"><button style="color:black; width: 200px; margin-top: 5px; margin-left: 250px;">Change Password</button></a>
</div>

<div>
 <a href = "dbook.php?customer_id=<?php echo $customer_id?>"><button style="color:black; width: 200px; margin-top: 0px; margin-left: 250px;">Home</button></a>
</div>


</main>
</body>
</html>