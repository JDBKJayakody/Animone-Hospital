<?php require_once("inc/connection.php"); ?>

<?php

 $first_name = "Rose";
 $last_name = "Dawson";
 $email = "rose@gmail.com";
 $password = "abcd1234";
 $hashed_password = sha1($password);
 $is_deleted = 0;

 $query = "INSERT INTO admin (FirstName,LastName,Email,Password,IsDeleted) VALUES ( '{$first_name}','{$last_name}','{$email}','{$hashed_password}','{$is_deleted}' )";

 $result = mysqli_query($connect,$query);

 if($result)
 {
 	echo "1 record added";
 }
 else
 {
 	echo "Query Failed";
 }

?>
