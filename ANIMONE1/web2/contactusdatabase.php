<?php

require_once('config.php');
if(isset($_POST['submit']))
{
        $name=$_POST['name'];
        $mail=$_POST['mail'];
		$subjects=$_POST['subjects'];
        $msg=$_POST['msg'];

	$query="INSERT INTO contactus (name,mail,subjects,msg) VALUES('$name','$mail','$subjects','$msg')";
	$resultx=mysqli_query($conn,$query);
	if($resultx==true)
	{				
		echo "Your contact information is saved successfully";
		header("location:indexx.php");
	}
	else
	{
		echo "Your contact information is not save";
		header("location:contactMINII.php");
	}
}

?>