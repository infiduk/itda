<?php
  $db = mysqli_connect("localhost","root","it_da_ifp5","up_da");
  
  mysqli_set_charset($db,"utf-8");
  if(mysqli_connect_errno($db))
  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $username = $_POST['username'];
  $password = $_POST['password'];
  $result = mysqli_query($db,"select * from member where id = '".$username."' AND password = '".$password."'");
  
  if(!$result) echo "failed";
  $rows = mysqli_num_rows($result);

  if($rows == 0) {
    echo "No Such User Found";
  }
  else  {
	echo "User Found";
  }
  
  mysqli_close($db);
?>