<?php
// Enter your Host, username, password, database below.
// I left password empty because i did not set password on my localhost.
$con = mysqli_connect("localhost","root","","teamstar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>