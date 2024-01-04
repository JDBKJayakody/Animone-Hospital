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
    $query = "SELECT * FROM usersl WHERE uid= '{$customer_id}' ";

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
     $name = $_POST['user_name'];
     $age = $_POST['user_age'];
     $mobile = $_POST['user_mobile'];
     

     $req_fields = array('user_name','user_age','user_mobile');

     foreach($req_fields as $field)
     {
      if(empty(trim($_POST[$field])))
      {
        $errors[] = $field . " is required";
      }
     }

     $max_len_fields = array('user_name' => 50, 'user_age' => 50, 'user_mobile' => 10);

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

      $name = mysqli_real_escape_string($connect,$_POST['user_name']);
      $age = mysqli_real_escape_string($connect,$_POST['user_age']);
      $mobile = mysqli_real_escape_string($connect,$_POST['user_mobile']);

      $query = "UPDATE usersl SET uname='{$name}', age='{$age}', mobile='{$mobile}' WHERE uid = '{$customer_id}' ";

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
<main>









<h1><?php echo $name; ?></h1>

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


<form class="userform" action="user_update_details.php" method="post">

     <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
   
   <p>
     <label for="user_id">User ID:</label>
     <input type="text" name="customer_id" id="customer_id" placeholder="User ID" <?php echo 'value="' . $customer_id . '"'; ?> disabled>
   </p>

   <p>
     <label for="ame">User Name:</label>
     <input type="text" name="user_name" id="user_name" placeholder="User Name" <?php echo 'value="' . $name . '"'; ?> >
   </p>

   <p>
     <label for="last_name">User Age:</label>
     <input type="text" name="user_age" id="user_age" placeholder="User Age" <?php echo 'value="' . $age . '"'; ?> >
   </p>

   <p>
     <label for="email">Mobile Number:</label>
     <input type="text" name="user_mobile" id="user_mobile" placeholder="Mobile Number" <?php echo 'value="' . $mobile . '"'; ?> >
   </p>

   <p>
     <label for="email">Gender:</label>
     <input type="text" name="user_gender" id="user_gender" placeholder="User Gender" <?php echo 'value="' . $gender . '"'; ?> disabled>
   </p>

   <p>
    <label for="">&nbsp;</label>
    <button style="color:black;" type="submit" name="submit">Update Details</button>
   </p>

</form>  


<div>
 <a href = "userprofile.php?customer_id=<?php echo $customer_id?>"><button style="color:black; width: 200px; margin-top: 5px; margin-left: 250px;">< Profile</button></a>
</div>

<div>
 <a href = "dbook.php?customer_id=<?php echo $customer_id?>"><button style="color:black; width: 200px; margin-top: 0px; margin-left: 250px;">< Home</button></a>
</div>


</main>
</body>
</html>