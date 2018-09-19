<?php include 'connection.php'; ?>
<!----------------------------------------------------header------------------------------------------------->
<?php $root="";include 'header.php'; ?>
<!--------------------------------------Database entry------------------------------------------------------->
<?php 
//---------------------------------signup---------------------------------------------------
if(isset($_POST['register']))
{
$name=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['name']))));
$roll=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['roll']))));
$email=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['email']))));
$dept=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['dept']))));
$degn=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['deg']))));
$course=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['course']))));
$pass=rand(11111,99999999);
//$password=md5($pass);

if($degn=="Teacher")
    $course="";
    
$sql="INSERT INTO `users`(`name`, `email`, `password`, `department`, `designation`, `roll`, `course`) VALUES ('$name','$email','$pass','$dept','$degn','$roll','$course')";
mysqli_query($con,$sql) or die("error in connection to database".mysqli_error($con));
    
if($degn=="Teacher")
    $roll=$email;
    
    
$to= $email;
$to_admin='webteamnitskm@gmail.com';
$subject_admin='NEW USER REGISTERED | DETAILS | CONFIRMATION';
$message_admin='USER DETAILS ARE: -
---------------------------------------------------------------------------------
NAME : '.$name.'
DESIGNATION : '.$degn.'
ROLL NO./ID(In case of teacher) : '.$roll.'
EMAIL : '.$email.'
---------------------------------------------------------------------------------';
$subject = 'LOGIN PORTAL REGISTRATION DETAILS | CONFIRMATION';
$message = 'Thank you for registering to login portal of NIT SIKKIM.
Your registration has been successfully confirmed.
---------------------------------------------------------------------------------
YOUR USERNAME : '.$roll.'
YOUR PASSWORD : '.$pass.'
---------------------------------------------------------------------------------



NOTE : THIS IS A SYSTEM GENERATED E-MAIL. DONOT REPLY.

';


echo '<span style="color:green;"class="text-center"><b>
        <h1> &#10004; </h1>
        <h3> successfully registerd!!!</h3>
    </b></span>';

if(mail($to, $subject, $message)&& mail($to_admin, $subject_admin, $message_admin))
{
echo '<span style="color:blue;"class="text-center"><b>
        <h3>USERNAME and PASSWORD has been sent to your Email!</h3>
    </b></span>';
} else
{
    echo '<span style="color:blue;"class="text-center"><b>
        <h3>Your username is '.$roll.'. Your password is '.$pass.' </h3>
                <p style="color:red;">Failure in sending mail: Something went wrong . Email was not sent</p>
    </b></span>';

}   
	echo '<a href="index.php"><button type="button" class="btn  btn-success" style="color:red;width:40%;margin-left:30%;"><b>Go to login page</b></button></a>	';
	


}


?>
<!-----------------------------------------------Footer------------------------------------------------------>
<?php include 'footer.php';?>