<?php 

  $connect = mysqli_connect("localhost","root","","test");

  if(mysqli_connect_errno())
  {
  	die("Connection Failed" . mysqli_connect_error());
  }

  else
  {
  	//echo "Connection Successful";
  }

?>