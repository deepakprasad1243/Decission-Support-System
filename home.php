 <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
function show() {
    var x = document.getElementById("pwd");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function tshow() {
    var x = document.getElementById("tpwd");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function hide(e){
    var strdisplay = e.options[e.selectedIndex].value;
    var e = document.getElementById("deg");
    if(strdisplay=="Teacher")
        e.style.display="none";
    else
        e.style.display="block";
}  
</script>
<style>
    .nav-tabs {
        background-color: #E0E0E0;
        border: 1px 0px;
        border-radius: 5px;
    }

    .tab-content {
        background-color: white;


    }

    .nav-tabs>li>a {
        border: medium none;
    }

    .imgcontainer {
        text-align: center;
        position: relative;
    }

    img.avatar {
        width: 30%;
        border-radius: 40%;
    }
    .input-group{
        padding:5px;
        width:80%;
        margin:auto;
        
        
    }

    
</style>
</head>
 <div class="row" style="margin:50px 0px 20px 0px">
  <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
      <div style="background-color:white ;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:5px;margin-bottom:5px;">
          <h5 class ="text-center"><i class="fa fa-bullhorn" style="font-size:16px"></i>&nbsp; Announcements</h5><hr>
          <div style="padding-left:10%;" >
      <marquee behavior="scroll" direction="up"  style="max-height:325px;" onmouseover="this.stop();" onmouseout="this.start();">
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff wjebfj sfbkj sjfbj ajsfbj <img src="images/new.png"  height=18px width=30px></p>
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff <img src="images/new.png"  height=18px width=30px></p>
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff <img src="images/new.png"  height=18px width=30px></p>
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff <img src="images/new.png"  height=18px width=30px></p>
      </marquee>
     </div>
      </div>
  </div>
<div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
    <div style="background-color:white ;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:5px;margin-bottom:5px;">

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><strong>Student login</strong></a></li>
    <li><a data-toggle="tab" href="#menu1">Teacher login</a></li>
    <li><a data-toggle="tab" href="#menu2">Sign up</a></li>
</ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
 <div style="margin:10px">
  
  <form class="form-horizontal" action="" method="POST" class="text-center ">
  <div class="imgcontainer">
  <img src="images/s_icon.png" alt="Avatar" class="avatar">
  </div>
   <h2 class="text-center">Student login</h2>
    <div class="form-group">
      <label class="control-label col-sm-2" for="id"><i class="fa fa-user-circle" style="font-size:24px"></i></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" placeholder="Enter user id" name="id" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><i class="fa fa-lock" style="font-size:30px"></i></label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
        <input type="checkbox" onclick="show()">Show Password
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="student_login" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

            </div>
            <div id="menu1" class="tab-pane fade">
                 <div style="margin:10px">
  
  <form class="form-horizontal" action="" method="POST" class="text-center border ">
  <div class="imgcontainer">
  <img src="images/teacher.png" alt="Avatar" class="avatar">
  </div>
   <h2 class="text-center">Teacher login</h2>
     <div class="form-group">
      <label class="control-label col-sm-2" for="id"><i class="fa fa-user-circle" style="font-size:24px"></i></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" placeholder="Enter user id" name="id" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tpwd"><i class="fa fa-key" style="font-size:25px"></i></label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="tpwd" placeholder="Enter password" name="pwd" required>
        <input type="checkbox" onclick="tshow()">Show Password
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="Teacher_login" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

            </div>
            <div id="menu2" class="tab-pane fade">
                 <div style="margin:10px">
  
<form action="signup.php" method="POST" style="max-width:500px;margin:auto">


    <h2 class="text-center">Registration form</h2>


    <div class="input-group ">
        <span class="input-group-addon">Name</span>
        <input type="text" class="form-control" name="name" placeholder="Enter name" required>
    </div>
    <div class="input-group ">
        <span class="input-group-addon">Email</span>
        <input type="email" class="form-control" name="email" placeholder="Enter email" required pattern="[a-z0-9._%+-]+@nitsikkim.ac.in" title="Required format= xxxxx@nitsikkim.ac.in">
    </div>
    <div class="input-group ">
        <span class="input-group-addon">Department</span>
        <select class="form-control" name="dept">
        <option>CSE</option>
        <option>ECE</option>
        <option>EEE</option>
        <option>ME</option>
        <option>CE</option>
        <option>BT</option>
        <option>MATHEMATICS</option>
        <option>PHYSICS</option>
        <option>CHEMISTRY</option>
        </select>
    </div>
    <div class="input-group ">
        <span class="input-group-addon">Designation</span>
        <select class="form-control" name="deg" id="sel1" onchange="hide(this);">
        <option>Teacher</option>
        <option>Student</option>
        </select>
    </div>
    <div id="deg" style="display:none;">
    <div class="input-group ">
        <span class="input-group-addon">Roll</span>
        <input type="text" class="form-control" name="roll" placeholder="Enter roll no with Branch. Eg-B120001CS" >
    </div>
    <div class="input-group ">
        <span class="input-group-addon">Course</span>
        <select class="form-control" name="course">
        <option>B.Tech</option>
        <option>M.Tech</option>
        <option>Phd</option>
        <option>M.Sc</option>
        </select>
    </div>
    </div>

    <div class="input-group ">
        <button type="submit" style="width:100%" name="register" class="btn btn-success">Register</button>
    </div>
</form>
</div>

            </div>
           
        </div>
    </div>
</div>
  <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
      <div style="overflow:hidden;background-color:white ;height:100%;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:10px;margin-bottom:5px;">
      <h5 class ="text-center"><i class="fa fa-download" style="font-size:16px"></i>&nbsp; Downloads</h5><hr>
      <div style="padding-left:10%;" >
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff <img src="images/new.png"  height=18px width=30px></p>
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff <img src="images/new.png"  height=18px width=30px></p>
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff <img src="images/new.png"  height=18px width=30px></p>
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff <img src="images/new.png"  height=18px width=30px></p>
      
     </div>
      </div>
      <div style="overflow:hidden;background-color:white ;height:100%;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:10px;">
      <h5 class ="text-center"><i class="fa fa-calendar" style="font-size:16px"></i>&nbsp; Upcoming events</h5><hr>
      <div style="padding-left:10%;" >
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff <img src="images/new.png"  height=18px width=30px></p>
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff <img src="images/new.png"  height=18px width=30px></p>
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff <img src="images/new.png"  height=18px width=30px></p>
      <p><img src="images/bulletimage.png"/>&nbsp; thaskjf ahsfkal ksjhf aljfll ff <img src="images/new.png"  height=18px width=30px></p>
      
     </div>
      </div>
  </div>
</div>





<?php
//----------------------------------------------------------student login------------------------------------------------------------------
if(isset($_POST['student_login']))
{
   
    
echo '<div class="row">

    <div class="col-md-12">
        <div class="panel panel-default text-center" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;">

            <div class="panel-body">';


                $u=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['id']))));

                $p=$_POST['pwd'];
                // $p=md5($_POST['pwd']);

                $sql="SELECT `name`, `email`, `password`, `department`, `designation`, `roll`, `course`, `Blocked` FROM `users` WHERE `roll`= '$u'";
                $passw=mysqli_query($con,$sql) or die("error in connection".mysqli_error($con));

                $row=mysqli_fetch_array($passw);
                $pass=$row['password'];
                $user=$row['name'];
                $email=$row['email'];
                $dept=$row['department'];
                $block=$row['Blocked'];
                $roll=$row['roll'];
                $course=$row['course'];

                if(($roll==$u))
                {

                if(($p==$pass))
                {
                    if($block=="yes")
                    {

                        echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspYou have been blocked.Contact Administrator. </i></b></span>';

                    }
                    else{


                     $_SESSION['id']="@student$";
                     $_SESSION['user']=$user;
                     $_SESSION['dept']=$dept;
                     $_SESSION['roll']=$roll;
                     $_SESSION['course']=$course;
                     $_SESSION['email']=$email;

                    $sql="SELECT * FROM `info` WHERE `roll`= '$u'";
                    $info=mysqli_query($con,$sql) or die("error in connection".mysqli_error($con));
                    $row=mysqli_fetch_array($info);
                    if($row){
                        echo "<script>
                        location.href = 'student_portal/';
                        </script>";
                    }else {
                        echo "<script>
                        location.href = 'student_portal/1st_time/';
                        </script>";

                    }
                    }
                }
                else
                {
                echo '<span style="color:red;" class="text-center"><b><i>&#10008;&nbsp&nbspInvalid password. Please try again. </i></b></span>';
                }
                }
                else{
                echo '<span style="color:red;"  class="text-center"><b><i>&#10008;&nbsp&nbspInvalid username. Please register or try again. </i></b></span>';

                }



                echo '</div>
        </div>
    </div>
</div>';
}
    
    
 
//---------------------------------------------------------teacher login--------------------------------------------------------------------
elseif(isset($_POST['teacher_login']))
{
    $_SESSION['id']="@teacher$";
    
    echo '<script>
                    alert("under maintainence");
                </script>';
}
?>