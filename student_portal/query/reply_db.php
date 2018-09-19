<?php
session_start();

 $con = mysqli_connect('localhost','root','','dss');
$con=new PDO("mysql:host=localhost;dbname=dss",'root','');

if(isset($_POST['send'])) {
$userReply=$_POST['user_reply'];
$new_val="-yZ@#%#@zQ-";
$id = $_SESSION['id'];



$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$update_query = "UPDATE status SET reply=CONCAT(SUBSTRING(reply, 1, CHAR_LENGTH(reply) ),'$userReply') WHERE id = $id";


    $update = $con->prepare($update_query);
    $update->execute(array($userReply));

$update_query1 = "UPDATE status SET reply= CONCAT(SUBSTRING(reply, 1, CHAR_LENGTH(reply) ),'$new_val') WHERE id=$id";


    $update = $con->prepare($update_query1);
    $update->execute();

echo $id;
}

?>
