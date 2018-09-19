<?php
session_start();
$con = mysqli_connect('localhost','root','','dss');
$con=new PDO("mysql:host=localhost;dbname=dss",'root','');



if(isset($_POST['send'])) {

$myQuery = $_POST['comments'];
$whom = $_POST['whom'];

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$insert_query = "INSERT INTO status (myQuery , whom) VALUES (?,?)";

$insert = $con->prepare($insert_query);
$insert->execute(array($myQuery,$whom));

echo "<script>window.location='index.php'</script>";

}
?>
