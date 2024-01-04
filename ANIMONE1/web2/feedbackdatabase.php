<?php

require_once('config.php');
if(isset($_POST['submit']))
{
        $name=$_POST['name'];
        $age=$_POST['age'];
        $phone=$_POST['phone'];
        $mail=$_POST['mail'];
        $rate=$_POST['rate'];
        $feedback=$_POST['feedback'];
	$query="INSERT INTO feedback(name,age,phone,mail,rate,feedback) VALUES('$name','$age','$phone','$mail','$rate','$feedback')";
	$resultx=mysqli_query($conn,$query);
	if($resultx==true)
	{				
		echo"<script>alert('Data sent successfully.')</script>";
                header("location:indexx.php");	
	}
        else
	{
		echo"<script>alert('Data didn't send.')</script>";
                header("location:feedbak.php");
        }
}

?>