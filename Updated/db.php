<?php
// Enter your Host, username, password, database below.
// I left password empty because i did not set password on my localhost.
$con = mysqli_connect("sql302.epizy.com","epiz_24503671","IAX8ApB2ARQHFhN","epiz_24503671_teamstar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>