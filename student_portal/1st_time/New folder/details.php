
<style>
    .input-group{
        padding:5px;
        width:80%;
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
    }

    /* Mark the steps that are finished and valid: */

    .step.finish {
        background-color: #4CAF50;
    }
</style>
<h1 style="color:red"><i><b>Complete your profile</b></i></h1>
<div style="width:80%;min-width:300px;background-color:white ;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin:auto">
<form id="regForm" action="/action_page.php">
    
    
    <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
  <!-- One "tab" for each step in the form: -->
  
 
  
  <div class="tab">
 
   <fieldset class="well" style="border:4px solid black; background-color:white;">
   <legend style="border:2px solid black"><b>PERSONAL DATAILS : </b></legend>
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
    <fieldset class="well" style="border:4px solid black; background-color:white;">
   <legend style="border:2px solid black"><b>FAMILY DETAILS : </b></legend>
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
     <fieldset class="well" style="border:4px solid black; background-color:white;">
   <legend style="border:2px solid black"><b>ACEDEMIC DETAILS : </b></legend>
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
  <div class="tab">Login Info:
    <fieldset class="well" style="border:4px solid black; background-color:white;">
   <legend style="border:2px solid black"><b>UPLOAD PHOTO AND SIGNATURE : </b></legend>
     
     <div class="input-group ">
        <span class="input-group-addon">upload photo</span>
        <input type="file" class="form-control" name="photo" oninput="this.className = 'form-control'" >
    </div>
    <div class="input-group ">
        <span class="input-group-addon">upload signature</span>
        <input type="file" class="form-control" name="sign" oninput="this.className = 'form-control'" >
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

