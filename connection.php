
<?php 
//session_cache_limiter('private');
//$cache_limiter =  session_cache_limiter();
//session_cache_expire(20);
//$cache_expire = session_cache_expire();
session_start();

//connection to database
$con =  mysqli_connect('localhost','root','','dss');
?>