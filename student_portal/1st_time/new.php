<?php include '../../connection.php'; ?>
<?php $root="../../";include 'header.php'; ?>
<?php

$roll=$_SESSION['roll'];

$email=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['email']))));
$category=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['cat']))));
$gender=mysqli_real_escape_string($con,$_POST['gender']);
$dob=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['date']))));
$blood=mysqli_real_escape_string($con,$_POST['blood']);
$quota=mysqli_real_escape_string($con,$_POST['quota']);
$seat=mysqli_real_escape_string($con,$_POST['sac']);
$religion=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['religion']))));
$number=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['mobile']))));
$mname=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['mname']))));
$fname=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['fname']))));
$fnumber=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['fmn']))));
$econtact=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['emn']))));
$paddress=addslashes(stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['paddress'])))));
$caddress=addslashes(stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['caddress'])))));
$year=mysqli_real_escape_string($con,$_POST['year']);

$sem=mysqli_real_escape_string($con,$_POST['sem']);
$ten=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['10th']))));
$tenb=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['10thb']))));
$twelve=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['12th']))));
$twelveb=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['12thb']))));



$photo = $_FILES['photo']['name'];
$sign = $_FILES['sign']['name'];
$birthc = $_FILES['birthc']['name'];
$tenc = $_FILES['tenc']['name'];
$twelc = $_FILES['twelc']['name'];

$tmpphoto=$_FILES["photo"]["tmp_name"];
$tmpsign=$_FILES["sign"]["tmp_name"];
$tmpbirthc=$_FILES["birthc"]["tmp_name"];
$tmptenc=$_FILES["tenc"]["tmp_name"];
$tmptwelc=$_FILES["twelc"]["tmp_name"];

move_uploaded_file($tmpphoto,"image/".$photo);
move_uploaded_file($tmpsign,"image/".$sign);
move_uploaded_file($tmpbirthc,"image/".$birthc);
move_uploaded_file($tmptenc,"image/".$tenc);
move_uploaded_file($tmptwelc,"image/".$twelc);


$sql="INSERT INTO `info`(`roll`,`email`, `gen`, `cat`, `date`, `blood`, `quota`, `seat`, `religion`, `mobile`, `mname`, `fname`, `fmn`, `fem`, `padd`, `cadd`, `year`, `sem`, `ten`, `tenb`, `twel`, `twelb`, `photo`, `sign`, `birth`, `tenc`, `twelc`) VALUES ('$roll','$email','$gender','$category','$dob','$blood','$quota','$seat','$religion','$number','$mname','$fname','$fnumber','$econtact','$paddress','$caddress','$year',
'$sem','$ten','$tenb','$twelve','$twelveb','$photo','$sign','$birthc','$tenc','$twelc')";
mysqli_query($con,$sql) or die("Error in registration-> ".mysqli_error($con));


echo '<span class="text-center" style="color:green;text-align:center;padding-left:30%;"><b><h1>	&#10004; </h1><h3> successfully registerd!!!</h3><br>you will be redirected to your home page in few seconds. </b></span>';

         

	



?>
<meta http-equiv="refresh" content="5;url=../index.php">
<?php include '../footer.php';?>