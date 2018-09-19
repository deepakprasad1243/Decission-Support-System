<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>Registration Form</title>
</head>
<script>
    $(document).ready(function(){
        altert($);
    });



    function hide(e){
        var strdisplay = e.options[e.selectedIndex].value;
        var back = document.getElementById("backLog");
        var noback = document.getElementById("noBackLog");
         if(strdisplay == "No Backlogs"){
           noback.style.display = "block";
           back.style.display = "none";
         }else if (strdisplay == "Semester Backlogs") {
          noback.style.display = "block";
          back.style.display = "block";
         }else if(strdisplay == "Year Backlog"){
           noback.style.display = "none";
           back.style.display = "block";
         }else{

         }
        // if(strdisplay=="Teacher")
        //     e.style.display="none";
        // else
        //     e.style.display="block";
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
        /* width:80%; */
        margin:auto;


    }
</style>
<?php


$roll = 'B170095EC';
$department = 'ECE';
$backlog_dept = 'firstyear';
mysqli_select_db($con, 'dss');
$sql = "SELECT * FROM semreg WHERE roll = '$roll'";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);

$sqlsem = "SELECT * FROM semsubjects WHERE department = '$department'";
$resultsem = mysqli_query($con, $sqlsem) or die(mysqli_error($con));

$sqlback_sem = "SELECT * FROM semsubjects WHERE department = '$backlog_dept '";
$resultback_sem = mysqli_query($con, $sqlback_sem) or die(mysqli_error($con));


// $rowsem = mysqli_fetch_array($resultsem);
?>
<div class="container-fluid" style="width:80%;margin:auto;margin-top:50px;">
    <div class="row">

    <!-- Registraion form starts from here -->
        <ol class="breadcrumb">
            <li><a href="#">Login</a></li>
            <li><a href="#">Home</a></li>
            <li class="active">Registration Form</li>
        </ol>
        <legend><h1 class="text-center">Registration Form</h1></legend>
        <div class="col-sm-6">
            <form action="auth.php" method="POST" >
                <div class="input-group ">
                    <span class="input-group-addon">Name</span>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>" required>
                </div>

                <div class="input-group ">
                    <span class="input-group-addon">Email</span>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>" required>
                </div>

                <div class="input-group ">
                    <span class="input-group-addon">Department</span>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['branch']?>" required>
                </div>

                <div class="input-group ">
                    <span class="input-group-addon">Mobile Number</span>
                    <input type="number" class="form-control" name="email" required>
                </div>

                <div class="input-group ">
                    <span class="input-group-addon">Parent's Mobile Number</span>
                    <input type="number" class="form-control" name="email" required>
                </div>


            </form>
        </div>

        <div class="col-sm-6">
            <form metho="POST" action="/action_page.php">

                <div class="input-group ">
                    <span class="input-group-addon">Gender</span>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['gender']?>" required>
                </div>

                <div class="input-group ">
                    <span class="input-group-addon">Category</span>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['category']?>" required>
                </div>

                <div class="input-group ">
                    <span class="input-group-addon">Course</span>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['course']?>" required>
                </div>

                <div class="input-group ">
                    <span class="input-group-addon">Father name</span>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="input-group ">
                    <span class="input-group-addon">Income Category</span>
                    <select class="form-control" name="dept">
                        <option>SC/ST</option>
                        <option>Below 1 Lacs</option>
                        <option>Between 1 Lacs and 5 Lacs</option>
                        <option>Above 5 Lacs</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="input-group ">
            <span class="input-group-addon">Please confirm your semester</span>
            <input type="email" class="form-control" name="email" value="<?php $sem =++$row['current_sem']; echo $sem;?>" required>
        </div>
        <legend><h2 class="text-center">Subject List</h2></legend>

        <!-- Optional Menu for backlog Registration -->
            <div class="input-group ">
                <span class="input-group-addon">Backlog Subject Registration</span>
                <select class="form-control" name="semreg" id="sel1" onchange="hide(this);"> -->
                <!-- </select> onchange="hide(this);"> -->
                    <option><button onclick="toggleClock()">No Backlogs</button></option>
                    <option>Semester Backlogs</option>
                    <option>Year Backlog</option>
                </select>
            </div>

        <div id="backLog" style="display:none;">
            <table class="table table-striped table-responsive">
                <tr>
                    <th>Tick</th>
                    <th> Subject Code </th>
                    <th> Subject Name </th>
                    <th>Credit</th>
                </tr>
                <?php
                while($rowsem = mysqli_fetch_array($resultback_sem)){
                ?>
                <tr>
                    <th><div class="checkbox"><label><input type="checkbox"></label></div></th>
                    <td><?php echo $rowsem['subject_code'];?></td>
                    <td><?php echo $rowsem['subject_name'];?></td>
                    <td><?php echo $rowsem['subject_credit'];?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <!-- <div id="semreg" style="display:none;"> -->
            <!-- <div class="input-group ">
            <span class="input-group-addon">Roll</span> -->
            <!-- <input type="text" class="form-control" name="roll" placeholder="Enter roll no"> -->
        <!-- </div> -->
        <div id="noBackLog" style="display:block;">
        <table class="table table-striped table-responsive">
            <tr>
                <th>Tick</th>
                <th> Subject Code </th>
                <th> Subject Name </th>
                <th>Credit</th>
            </tr>
            <?php
            while($rowsem = mysqli_fetch_array($resultsem)){
            ?>
            <tr>
                <th><div class="checkbox"><label><input type="checkbox"></label></div></th>
                <td><?php echo $rowsem['subject_code'];?></td>
                <td><?php echo $rowsem['subject_name'];?></td>
                <td><?php echo $rowsem['subject_credit'];?></td>
            </tr>
            <?php } ?>
       </table>
     </div>
<!-------------- Upload fees receipt option ------------------->

       <legend><h3 class="text-center">Upload Fees Receipt</h3></legend>
       <div style="padding-left:0%">
       <!-- </div> class="row"> -->
            <table class="table table-responsive table-bordered" >
                    <form action="#" method="post">
                        <!-- Tution fees reciept -->
                        <tr>
                        <th>
                            <!-- <div class="col-sm-6"> -->
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Tution Fees Receipt</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <p><strong>Note:</strong> Please upload only .jpeg and .png files</p>
                                <button class="btn btn-primary">Preview</button>
                            <!-- </div> -->
                        </th>
                        <!-- Mess fees receipt -->
                        <th>
                            <!-- <div class="col-sm-6"> -->
                                <div class="form-group">
                                <label for="exampleFormControlFile1">Mess Fees Receipt</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <p><strong>Note:</strong> Please upload only .jpeg and .png files</p>
                                <button class="btn btn-primary">Preview</button>
                            <!-- </div> -->
                        </th>
                        </tr>
                    </form>
            </table>
        </div>
        <div class="input-group ">
            <button type="submit" style="width:150%; margin-bottom:30%;" class="btn btn-success">Register</button>
        </div>
    </div>
</div>



