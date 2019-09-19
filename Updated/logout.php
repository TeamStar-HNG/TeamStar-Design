<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Index Page
header("Location: index.php");
}
?>