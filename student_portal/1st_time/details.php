<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<!-- jQuery read image data and show preview code -->
   <script>
		    function showTutionImage() {
       if(this.files && this.files[0]) {
            var obj = new FileReader();
            obj.onload = function(data){
                var image = document.getElementById("tutionImage");
                image.src = data.target.result;
                image.style.display = "block";
            }
            obj.readAsDataURL(this.files[0]);
        }
    }

             function showSignature() {
       if(this.files && this.files[0]) {
            var obj = new FileReader();
            obj.onload = function(data){
                var image = document.getElementById("tutionImage1");
                image.src = data.target.result;
                image.style.display = "block";
            }
            obj.readAsDataURL(this.files[0]);
        }
    }
   
   
             function showGCertificate() {
       if(this.files && this.files[0]) {
            var obj = new FileReader();
            obj.onload = function(data){
                var image = document.getElementById("tutionImage2");
                image.src = data.target.result;
                image.style.display = "block";
            }
            obj.readAsDataURL(this.files[0]);
        }
    }


             function showTCertificate() {
       if(this.files && this.files[0]) {
            var obj = new FileReader();
            obj.onload = function(data){
                var image = document.getElementById("tutionImage3");
                image.src = data.target.result;
                image.style.display = "block";
            }
            obj.readAsDataURL(this.files[0]);
        }
    }

             function showTWCertificate() {
       if(this.files && this.files[0]) {
            var obj = new FileReader();
            obj.onload = function(data){
                var image = document.getElementById("tutionImage4");
                image.src = data.target.result;
                image.style.display = "block";
            }
            obj.readAsDataURL(this.files[0]);
        }
    }
   


              </script>
  </head>





</head>
<style>
    .input-group{
        padding:5px;
        width:60%;
        margin:auto;


    }
    * {
        box-sizing: border-box;
    }

    #regForm {
        background-color: #ffffff;
        margin: 50px auto;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */

    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */

    .tab {
        display: none;
    }

    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */

    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
       background-color:#008080;
    }

    /* Mark the steps that are finished and valid: */

    .step.finish {
        background-color: #004c4c;
    }
    .overlay {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.7);
      transition: opacity 500ms;
      visibility: hidden;
      opacity: 0;
    }
    .overlay:target {
      visibility: visible;
      opacity: 1;
    }

    .popup {
      margin: 80px auto;
      padding: 40px;
      background: #fff;
      border-radius: 5px;
      width: 35%;

      position: relative;
      transition: all 5s ease-in-out;
    }

    .popup h2 {
      margin-top: 0;
      color: #333;
      font-family: Tahoma, Arial, sans-serif;
    }
    .popup .close {
      position: absolute;
      top: 20px;
      right: 30px;
      transition: all 200ms;
      font-size: 30px;
      font-weight: bold;
      text-decoration: none;
      color: #333;
    }
    .popup .close:hover {
      color: #06D85F;
    }
    .popup .content {
      max-height: 30%;
      overflow: auto;
    }

    @media screen and (max-width: 700px){

      .popup{
        width: 70%;
      }
    }


</style>

<h1 style="color:#403330"><b>Complete your Profile</b></h1>
<div style="width:80%;min-width:300px;background-color:white ;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin:auto">
<form id="regForm" action="new.php" method="post" enctype="multipart/form-data">

    <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
  <!-- One "tab" for each step in the form: -->



  <div class="tab">

   <fieldset class="well" style="border:4px solid teal; background-color:white;">
   <legend style="border:4px solid teal;padding:1%"><b>PERSONAL DATAILS : </b></legend>
    <div class="input-group ">
        <span class="input-group-addon">Alternate email</span>
        <input type="email" class="form-control" name="email" id="email" oninput="this.className = 'form-control'" placeholder="Enter alternate email-id" required>
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Gender</span>
        <select class="form-control" name="gender" oninput="this.className = 'form-control'" >
        <option>Male</option>
        <option>Female</option>
        </select>
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Category</span>
        <select class="form-control" name="cat" oninput="this.className = 'form-control'" >
        <option>General</option>
        <option>OBC</option>
        <option>SC</option>
        <option>ST</option>
        </select>
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Date of birth</span>
        <input type="date" class="form-control" name="date" oninput="this.className = 'form-control'" >
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Blood Group</span>
        <select class="form-control" name="blood" oninput="this.className = 'form-control'" >
        <option>O+</option>
        <option>O-</option>
        <option>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>AB+</option>
        <option>AB-</option>
        </select>
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Quota</span>
        <select class="form-control" name="quota" oninput="this.className = 'form-control'" >
        <option>Home state</option>
        <option>Other state</option>
        <option>All India</option>
        </select>
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Seat alloted category</span>
        <select class="form-control" name="sac" oninput="this.className = 'form-control'" >
        <option>General</option>
        <option>OBC</option>
        <option>SC</option>
        <option>ST</option>
        </select>
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Religion</span>
        <input type="text" class="form-control" name="religion" oninput="this.className = 'form-control'" placeholder="Enter Religion">
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Mobile no.</span>
        <input type="text" maxlength="10" size="10" class="form-control" name="mobile" id="mobile"  oninput="this.className = 'form-control'" placeholder="Enter Mobile No.">
    </div>
    </fieldset>
  </div>
  <div class="tab">
    <fieldset class="well" style="border:4px solid teal; background-color:white;">
   <legend style="border:4px solid teal;padding:1%"><b>FAMILY DETAILS : </b></legend>
    <div class="input-group ">
        <span class="input-group-addon">Mother's Name</span>
        <input type="text" class="form-control" name="mname" oninput="this.className = 'form-control'" placeholder="Enter Mother's name">
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Father's Name</span>
        <input type="text" class="form-control" name="fname" oninput="this.className = 'form-control'" placeholder="Enter Father's name">
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Father's mobile no.</span>
        <input type="text" maxlength="10" size="10" class="form-control" name="fmn" id="fmn" oninput="this.className = 'form-control'" placeholder="Enter father's mobile no." >
    </div>
    <div class="input-group ">
        <span class="input-group-addon">Emergency contact no.</span>
        <input type="text" maxlength="10" size="10" class="form-control" name="emn" id="emn" oninput="this.className = 'form-control'" placeholder="Enter emergency contact no.">
    </div>


     <div class="input-group ">
        <span class="input-group-addon">Permanent address</span>
        <input type="textarea" class="form-control" name="paddress" oninput="this.className = 'form-control'" placeholder="Enter permanent address">
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Corresponding address</span>
        <input type="textarea" class="form-control" name="caddress" oninput="this.className = 'form-control'" placeholder="Enter corresponding address">
    </div>
    </fieldset>
  </div>
  <div class="tab">
     <fieldset class="well" style="border:4px solid teal; background-color:white;">
   <legend style="border:4px solid teal;padding:1%"><b>ACEDEMIC DETAILS : </b></legend>
    <div class="input-group ">
        <span class="input-group-addon">Year</span>
        <select class="form-control" name="year" oninput="this.className = 'form-control'" >
        <option>1st year</option>
        <option>2nd year</option>
        <option>3rd year</option>
        <option>4th year</option>
        </select>
    </div>
     <div class="input-group ">
        <span class="input-group-addon">Semester</span>
        <select class="form-control" name="sem" oninput="this.className = 'form-control'" >
        <option>1st semester</option>
        <option>2nd semester</option>
        <option>3rd semester</option>
        <option>4th semester</option>
        <option>5th semester</option>
        <option>6th semester</option>
        <option>7th semester</option>
        <option>8th semester</option>
        </select>
    </div>
     <div class="input-group ">
        <span class="input-group-addon">10th %/CGPA</span>
        <input type="text" maxlength="3" class="form-control" name="10th" id="10" oninput="this.className = 'form-control'" placeholder="Enter 10th % or cgpa" >
    </div>
    <div class="input-group ">
        <span class="input-group-addon">10th Board</span>
        <input type="text" class="form-control" name="10thb" oninput="this.className = 'form-control'" placeholder="Enter 10th board">
    </div>
    <div class="input-group ">
        <span class="input-group-addon">12th %</span>
        <input type="number" step="any" min="0" max="100" class="form-control" name="12th" id="12" oninput="this.className = 'form-control'" placeholder="enter 12th %">
    </div>
     <div class="input-group ">
        <span class="input-group-addon">12th board</span>
        <input type="text"  class="form-control" name="12thb" oninput="this.className = 'form-control'" placeholder="Enter 12 board">
    </div>
    </fieldset>
  </div>
  <div class="tab">

    <fieldset class="well" style="border:4px solid teal; background-color:white;">
   <legend style="border:4px solid teal;padding:1%"><b>UPLOAD PHOTO AND SIGNATURE : </b></legend>



    <div class="input-group " id="n1">
        <span class="input-group-addon">upload photo</span>
        <input type="file" id="exampleFormControlFile1" name="photo" class="form-control-file" onchange="showTutionImage.call(this);this.className = 'form-control'" >
         <span id="errorName" style="color: red;"></span>
        <span class="input-group-addon" data-toggle="modal" data-target="#myModalTution" class="icon" title="Preview">preview</span>

    </div>

    <div class="input-group " id="n1">
        <span class="input-group-addon">upload signature</span>
        <input type="file" id="exampleFormControlFile2" name="sign" class="form-control-file" onchange="showSignature.call(this);this.className = 'form-control'" >
         <span id="errorName" style="color: red;"></span>
        <span class="input-group-addon" data-toggle="modal" data-target="#myModalTution1" class="icon" title="Preview">preview</span>

    </div>



 <div class="input-group " id="n1">
        <span class="input-group-addon">upload graduating certificate</span>
        <input type="file" id="exampleFormControlFile3" name="birthc"class="form-control-file" onchange="showGCertificate.call(this);this.className = 'form-control'" >
         <span id="errorName" style="color: red;"></span>
        <span class="input-group-addon" data-toggle="modal" data-target="#myModalTution2" class="icon" title="Preview">preview</span>

    </div>

    <div class="input-group " id="n1">
        <span class="input-group-addon">upload ten certificate</span>
        <input type="file" id="exampleFormControlFile4" name="tenc" class="form-control-file" onchange="showTCertificate.call(this);this.className = 'form-control'" >
         <span id="errorName" style="color: red;"></span>
        <span class="input-group-addon" data-toggle="modal" data-target="#myModalTution3" class="icon" title="Preview">preview</span>

    </div>

 <div class="input-group " id="n1">
        <span class="input-group-addon">upload twelve certificate</span>
        <input type="file" id="exampleFormControlFile5" name="twelc" class="form-control-file" onchange="showTWCertificate.call(this);this.className = 'form-control'" >
         <span id="errorName" style="color: red;"></span>
        <span class="input-group-addon" data-toggle="modal" data-target="#myModalTution4" class="icon" title="Preview">preview</span>

    </div>


    </fieldset>
  </div>
  <div style="overflow:auto;">

    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>

</form>
</div>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
//-----------------------------------------for current tab = 0-----------------------------------------
    if(currentTab==0){
    var z = document.getElementById("email");
    var ph = document.getElementById("mobile");
    if(!((z.value).match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/)))
        if(!((z.value).match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/)))
    {
        z.className +=" invalid";
        valid = false;
    }
    if(!((ph.value).match(/[5-9][0-9]{9}/)))
    {
        ph.className +=" invalid";
        valid = false;
    }
    }
//-------------------------------------end of current tab = 0------------------------------------------
    //-----------------------------------------for current tab = 1-----------------------------------------
    if(currentTab==1){
    var fmn = document.getElementById("fmn");
    var emn = document.getElementById("emn");
    if(!((fmn.value).match(/[5-9][0-9]{9}/)))
    {
        fmn.className +=" invalid";
        valid = false;
    }
    if(!((emn.value).match(/[5-9][0-9]{9}/)))
    {
        emn.className +=" invalid";
        valid = false;
    }
    }
//-------------------------------------end of current tab = 1------------------------------------------
      //-----------------------------------------for current tab = 2-----------------------------------------
    if(currentTab==2){
    var ten = document.getElementById("10");
    var tw = document.getElementById("12");
    if(!((ten.value).match(/[0-9][0-9]/)) || ten.value > 100)
    {
        ten.className +=" invalid";
        valid = false;
    }
    if(!((tw.value).match(/[0-9][0-9]/)) || tw.value > 100)
    {
        tw.className +=" invalid";
        valid = false;
    }
    }
//-------------------------------------end of current tab = 2------------------------------------------
//-------------------------------------for current tab = 3---------------------------------------------

if(currentTab==3){
	//	var image1 =document.getElementById("exampleFormControlFile1");
    var img = document.getElementById("exampleFormControlFile1");
		     if(img.value!='')
		     {
		           var checkimg = img.value.toLowerCase();
		          if (!checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.jpeg|\.JPEG)$/)){
								// validation of file extension using regular expression before file upload
		              alert("wrong file selected");
					  img.className +=" invalid";
					img.value="";
		             valid= false;
		           }

		          //  alert(img.files[0].size);
		            if(img.files[0].size <  10485)  // validation according to file size
		            {
                 alert("size too small");
				 img.className +=" invalid";
								 img.value="";
		            //document.getElementById("errorName").innerHTML="Image size too short";
		            valid= false;
		             }
                 if(img.files[0].size > 1048576)  // validation according to file size
 		            {
                  alert("size too large");
				  img.className +=" invalid";
 								 img.value="";
 		            //document.getElementById("errorName").innerHTML="Image size too short";
 		            valid= false;
 		             }
                 else{
                   valid=true;
                 }

		      }
          else{
            valid=false;
          }

		var img2 =document.getElementById("exampleFormControlFile2");
		     if(img2.value!='')
		     {
		           var checkimg = img2.value.toLowerCase();
		          if (!checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.jpeg|\.JPEG)$/)){ // validation of file extension using regular expression before file upload
                alert("wrong file selected");
				img2.className +=" invalid";
                img2.value="";
               valid= false;
		           }
		          //  alert(img.files[0].size);
		            if(img2.files[0].size <  10485)  // validation according to file size
		            {
                  alert("size too small");
				  img2.className +=" invalid";
                  img2.value="";
                 //document.getElementById("errorName").innerHTML="Image size too short";
                 valid= false;
		             }
                 if(img2.files[0].size > 1048576)  // validation according to file size
 		            {
                   alert("size too large");
				   img2.className +=" invalid";
                   img2.value="";
                  //document.getElementById("errorName").innerHTML="Image size too short";
                  valid= false;
 		             }
                 else{
                   valid=true;
                 }
		      }  else{
              valid=false;
            }
		var img3 =document.getElementById("exampleFormControlFile3");
		     if(img3.value!='')
		     {
		           var checkimg = img3.value.toLowerCase();
		          if (!checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.jpeg|\.JPEG)$/)){ // validation of file extension using regular expression before file upload
                alert("wrong file selected");
				img3.className +=" invalid";
                img3.value="";
               valid= false;
		           }
		            //var img = document.getElementById("exampleFormControlFile3");
		          //  alert(img.files[0].size);
		            if(img3.files[0].size <  10485)  // validation according to file size
		            {
                  alert("size too small");
				  img3.className +=" invalid";
                  img3.value="";
                 //document.getElementById("errorName").innerHTML="Image size too short";
                 valid= false;
		             }
                 if(img3.files[0].size >1048576)  // validation according to file size
 		            {
                   alert("size too large");
				   img3.className +=" invalid";
                   img3.value="";
                  //document.getElementById("errorName").innerHTML="Image size too short";
                  valid= false;
 		             }
                 else{
                    valid=true;
                  }

		      }  else{
              valid=false;
            }
		var img4 =document.getElementById("exampleFormControlFile4");
		     if(img4.value!='')
		     {
		           var checkimg = img4.value.toLowerCase();
		          if (!checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.jpeg|\.JPEG)$/)){ // validation of file extension using regular expression before file upload
                alert("wrong file selected");
				img4.className +=" invalid";
                img4.value="";
               valid= false;

		           }
		            //var img = document.getElementById("exampleFormControlFile4");
		          //  alert(img.files[0].size);
		            if(img4.files[0].size <  10485)  // validation according to file size
		            {
                  alert("size too small");
				  img4.className +=" invalid";
                  img4.value="";
                 //document.getElementById("errorName").innerHTML="Image size too short";
                 valid= false;
		             }
                 if(img4.files[0].size > 1048576)  // validation according to file size
 		            {
                   alert("size too large");
				   img4.className +=" invalid";
                   img4.value="";
                  //document.getElementById("errorName").innerHTML="Image size too short";
                  valid= false;
 		             }
                 else{
                   valid=true;
                 }
}  else{
    valid=false;
  }
		var img5 =document.getElementById("exampleFormControlFile5");
		     if(img5.value!='')
		     {
		           var checkimg = img5.value.toLowerCase();
		          if (!checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.jpeg|\.JPEG)$/)){ // validation of file extension using regular expression before file upload
                alert("wrong file selected");
				img5.className +=" invalid";
                img5.value="";
               valid= false;
		           }
		           // var img = document.getElementById("exampleFormControlFile5");
		          //  alert(img.files[0].size);
		            if(img5.files[0].size <  10485)  // validation according to file size
		            {

                     alert("size too small");
					 img5.className +=" invalid";
                     img5.value="";
                    //document.getElementById("errorName").innerHTML="Image size too short";
                    valid= false;
		             }
                 if(img5.files[0].size > 1048576)  // validation according to file size
 		            {
                   alert("size too large");
				   img5.className +=" invalid";
                   img5.value="";
                  //document.getElementById("errorName").innerHTML="Image size too short";
                  valid= false;
 		             }
                 else{
                   valid=true;
                 }
		      }
          else{
            valid=false;
          }
        }


//-------------------------------------end of current tab = 3------------------------------------------
  // If the valid status is true, mark the step as finished and valid:
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

<div class="modal fade" id="myModalTution" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">tution fee</h4>
                        </div>
                        <div class="modal-body">
                            <img src="" style="display:none" align="center" height="200" id="tutionImage">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
<div class="modal fade" id="myModalTution1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">tution fee</h4>
                        </div>
                        <div class="modal-body">
                            <img src="" style="display:none" align="center" height="200" id="tutionImage1">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
<div class="modal fade" id="myModalTution2" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">tution fee</h4>
                        </div>
                        <div class="modal-body">
                            <img src="" style="display:none" align="center" height="200" id="tutionImage2">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
<div class="modal fade" id="myModalTution3" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">tution fee</h4>
                        </div>
                        <div class="modal-body">
                            <img src="" style="display:none" align="center" height="200" id="tutionImage3">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
<div class="modal fade" id="myModalTution4" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">tution fee</h4>
                        </div>
                        <div class="modal-body">
                            <img src="" style="display:none" align="center" height="200" id="tutionImage4">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>





