<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
      .default {
    border: none;
    background-color: inherit;
    display: inline-block;
    text-align: left;
}

/* On mouse-over */
.default:hover {background: #f1f1f1;}
     
      
      .sticky + .content {
  padding-top: 60px;
}
       .dropdown .dropdown-menu:after {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    bottom: 100%;
    right: 30px;
    border-width: 0 6px 8px 6px;
    border-style: solid;
    border-color: #fff transparent;    
}

 .dropdown .dropdown-menu:before {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    bottom: 100%;
    right: 28px;
    border-width: 0 8px 10px 8px;
    border-style: solid;
    border-color: rgba(0,0,0,0.1) transparent;    
}
      
 .dropdown:hover .dropdown-menu { display: block; margin-top: 6px; border-radius:5px; }
     
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      position:fixed;
      bottom:0;
      z-index:999;
      width:100%
    }
      .sticky {
  position: fixed;
  top: 0;
  width: 100%;
          z-index: 999;
}
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
 
</head>
<body>
<?php
if(isset($_POST['logout'])){

{
	session_destroy();
	echo "<script> location.href='../index.php'; </script>";
        exit;
}

}
?>
<div  style="width:80%;margin:auto">
<div >
          <img src="<?php echo $root.'images/nit_logo.png'?>"  style="height:130px;width:100%"/>

</div>
</div>

<nav id="navbar" class="navbar navbar-inverse">
  <div class="container-fluid" style="width:80%;margin:auto;">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <a class="navbar-brand" href="http://nitsikkim.ac.in/" style="padding-top:0;padding-bottom:0;"><img src="<?php echo $root.'images/hqdefault.jpg';?>"  style="height:inherit;"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo $root.'student_portal/';?>">Home</a></li>
        <li><a href="<?php echo $root.'student_portal/query';?>">Query</a></li>
        <li><a href="<?php echo $root.'student_portal/registration';?>">Semester Registration</a></li>
        <li><a href="#">Downloads</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><i class="fa fa-bell" style="font-size:18px"></i></a></li>
       <li class="dropdown" >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top:10%;padding-bottom:0;">
        <img src="<?php echo $root.'images/s_icon.png';?>" alt="Avatar" style="height:35px;">
       </a>
                            
                            <ul class="dropdown-menu">
                                <li><a ><i class="fa fa-user-circle"></i> <?php echo $_SESSION['user']; ?></a></li>
                                <li><a ><i class="fa fa-plus-square"></i> <?php echo $_SESSION['roll']; ?></a></li>
                                <li><a href="<?php echo $root.'student_portal/profile';?>"><i class="fa fa-address-card"></i> View profile</a></li>
                                <li><a href="<?php echo $root.'';?>"><i class="fa fa-edit"></i> Edit profile</a></li>
                                <li><a href="<?php echo $root.'';?>"><i class="fa fa-key"></i> Change password</a></li>
                                <form action="" method="post">
                                    <li><button style="width:100%;padding:2px 0 2px 0;" type="submit" class="btn default" name="logout">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-sign-out"></i> Logout</button></li>
                                </form>
                            </ul>
         </li>
          </ul>
    </div>
  </div>
</nav>
 <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>