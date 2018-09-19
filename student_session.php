<?php 

//session_start();
if (!isset($_SESSION['id']))
{
	header('location: ../');
    exit;
}
elseif($_SESSION['id']!="@student$")
{
   header('location: ../');
    exit;
}

?>