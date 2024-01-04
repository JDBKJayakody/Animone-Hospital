<?php

require_once('contactusdatabase.php');
if(isset($_POST['submit']))
{   if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
     {   $name=$_POST['name'];
        $mail=$_POST['mail'];
	$subjects=$_POST['subjects'];
        $msg=$_POST['msg'];

	//$mailTo="nethminirathnasiri@gmail.com";
	//$headers="From:".$mailFrom;
	//$txt="You have received an e-mail from".name.".\n\n".$message;

	//mail($mailTo,$subject,$txt,$headers);
        //header("Location: contact.php?mailsend");

                $mailTo="nethminirathnasiri@gmail.com";
                $headers="From : ".$mail;
		//$subject=.$subjects;
		$message="Name    : ".$name."<br>"."Message : "."\n\n".$msg;

		if(mail($to,$headers,$message))
		{
			header("location:contactus.php");
		}
                else
	        {
	        	header("location:contactus.php");
                }

                $message_sent=true;
                echo"<br>";
                echo"mail sent successful";
     }
     else
     {
                $message_sent=false;
                echo"invalid email";
     }
}
?>