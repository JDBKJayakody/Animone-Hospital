<?php
   ob_start();
   session_start();
?>

<?php

$errors = array();
   
$customer_id= '';
$name= '';
$age= '';
$mobile= '';
$gender= ''; 


$connect=mysqli_connect("localhost","root","","test");

if(isset($_GET['customer_id']))
   {
	

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



if(isset($_POST['submit']))
   {
     $customer_id = $_POST['customer_id'];
     $password = $_POST['password'];
     

     $req_fields = array('customer_id','password');

     foreach($req_fields as $field)
     {
      if(empty(trim($_POST[$field])))
      {
        $errors[] = $field . " is required";
      }
     }

     $max_len_fields = array('password' => 40);

     foreach($max_len_fields as $field => $max_len)
     {
      if(strlen(trim($_POST[$field])) > $max_len)
      {
        $errors[] = $field . ' must be less than ' . $max_len . ' characters.';
      }
     }


     if(empty($errors))
     {

        //$connect=mysqli_connect("localhost","root","","test");

      $password = mysqli_real_escape_string($connect, $_POST['password']);

      $query = "UPDATE usersl SET pwd = '{$password}' WHERE uid = '{$customer_id}' ";

      $result_set = mysqli_query($connect,$query);


      if($result_set)
      {
        header("Location: userprofile.php?customer_id=$customer_id");
      }

      else
      {
        $errors[] = "Failed to modify the record";
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



<h1><?php echo $name; ?></h1>




<form class="userform" action="user_change_password.php" method="post">

    <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
   
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
		<button style="color: white; margin-bottom: 0px;" type="submit" name="submit">Update Password</button>
	</p>

</form>

<div>
 <a href = "userprofile.php?customer_id=<?php echo $customer_id?>"><button style="color:black; width: 200px; margin-top: 5px; margin-left: 250px;">< Profile</button></a>
</div>

<div>
 <a href = "dbook.php?customer_id=<?php echo $customer_id?>"><button style="color:black; width: 200px; margin-top: 0px; margin-left: 250px;">< Home</button></a>
</div>


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