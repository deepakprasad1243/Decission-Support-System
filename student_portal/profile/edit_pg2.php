
<head>
<link rel="stylesheet" href="ll.css">
<style>
    .button {
    background-color: #e7e7e7; /* Green */
    border: none;
    color: #000;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
    
    * {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 4px solid #000;
    background-color: #f1f1f1;
    width: 30%;
   
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}
    
    
    .tab-content>.tab-pane{
    style="height:50%;"
    visibility:hidden;
}

.tab-content>.active{
    visibility:visible;
    max-height: 50%
}
    td {
    padding: 10px;
    }
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
 <div style="width:80%;margin:auto;">

 <div class="row" style="margin:50px 0px 20px 0px">
  <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
      <div style="margin-bottom: 2%;background-color:#e5e5e5 ;border: 4px solid teal;box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      
          
          <div style="height:50%;" >
          <!--profile card start-->
                  <div align="center" class="card hovercard">
                <div class="cardheader">
          </div>
                <div class="avatar">
                    <img alt="" src="avatar.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        User Name
                    </div>
                    <div class="desc">Third Year</div>
                    <div class="desc">B160062cs</div>
                    <div class="desc">5<sup>th</sup>&nbsp;&nbsp;Sem</div>
                </div>
                
            </div>
          </div>
     </div>
      </div>
  <!--        profile card end-->
<div class="col-sm-9 col-md-9 col-lg-9 col-xs-12" >
    
    <div style="margin-bottom: 2%;background-color:#e5e5e5 ;border: 4px solid teal;box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1" style="color:#000;font-weight:800"><strong>Academic Details</strong></a></li>
    
</ul>
        <div class="tab-content" >
            <div id="menu1" class="tab-pane fade in active" style="height:50%;">
                  <table align="center" class="table-borderless">
                      <tr><td style="font-weight:700">
                          
                          Course:
                          </td>
                      <td><div class="form-group">
      
      <select class="form-control" id="sel1">
        <option></option>
        <option>B.TECH</option>
         <option>M.TECH</option>
        <option>M.Sc</option>
        <option>PhD</option>
        
        
      </select>                           
   
                         
  </div>
                          
                          </td></tr>
                      <tr><td style="font-weight:700">
                          
                          Semester:
                          </td> 
                          <td><div class="form-group">
      
      <select class="form-control" id="sel1">
        <option>1st</option>
        <option>2nd</option>
        <option>3rd</option>
        <option>4th</option>
          <option>5th</option>
        <option>6th</option>
        <option>7th</option>
        <option>8th</option>
      </select>
                      
                          
                        
                              </div>   </td></tr>
                  <tr><td style="font-weight:700">
                          Year:
                          
                          </td>
                      <td>
                          <div class="form-group">
      
      <select class="form-control" id="sel1">
        <option>1st</option>
        <option>2nd</option>
        <option>3rd</option>
        <option>4th</option>
          
      </select>
                      
                          
                          </div>    </td></tr>
                  <tr><td style="font-weight:700">
                          Branch:
                          
                          </td>
                      <td><div class="form-group">
      
      <select class="form-control" id="sel1">
        <option>Computer Science and technology</option>
        <option>Electronics and Communications</option>
        <option>Electrical and Electronics</option>
        <option>Civil</option>
          <option>Mechanical</option>
        
      </select>
                          </div>
                          
                        
                    
                          
                          </td></tr>
                  <tr><td style="font-weight:700">
                  Last SGPA:        
                          
                          </td>
                      <td><input type="text" class="form-control" />
                          
                          
                          </td></tr>
                  <tr><td style="font-weight:700">
                          
                  CGPA        
                          </td>
                      <td>
                          
                         <input type="text" class="form-control" />
                          </td></tr>
                  
                   <tr><td style="font-weight:700">
                          12<sup>th</sup> % and Board:
                          
                          </td>
                      <td><input type="text" class="form-control" />
                          
                          
                          </td></tr>
                      <tr><td style="font-weight:700">
                          
                          10<sup>th</sup> % and Board:
                          </td>
                      <td>
                          <input type="text" class="form-control" />
                          
                          </td></tr>
                  <tr><td style="font-weight:700">
                          JEE Main Rank:
                          </td>
                      <td>
                          <input type="text" class="form-control" />
                          
                          </td></tr>
                  <tr><td style="font-weight:700">
                          JEE Advanced Rank:
                          
                          </td>
                      <td>
                          <input type="text" class="form-control" />
                          
                          </td></tr>
                      <td></td>
                      <td><button class="button">SAVE</button></td>
                  </table><hr/></div>
            
    </div>
     </div>

  
</div>

</div>
</div>