
<head>
<link rel="stylesheet" href="ll.css">
<style>

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
    .hvrbox,
    .hvrbox * {
    	box-sizing: border-box;
    }
    .hvrbox {
    	position: relative;
    	display: inline-block;
    	overflow: hidden;
    	max-width: 100%;
    	height: auto;
    }
    .hvrbox img {
    	max-width: 100%;
    }
    .hvrbox .hvrbox-layer_bottom {
    	display: block;
    }
    .hvrbox .hvrbox-layer_top {
    	opacity: 0;
    	position: absolute;
    	top: 0;
    	left: 0;
    	right: 0;
    	bottom: 0;
    	width: 100%;
    	height: 100%;
    	background: rgba(0, 0, 0, 0.6);
    	color: #fff;
    	padding: 15px;
    	-moz-transition: all 0.4s ease-in-out 0s;
    	-webkit-transition: all 0.4s ease-in-out 0s;
    	-ms-transition: all 0.4s ease-in-out 0s;
    	transition: all 0.4s ease-in-out 0s;
    }
    .hvrbox:hover .hvrbox-layer_top,
    .hvrbox.active .hvrbox-layer_top {
    	opacity: 1;
    }
    .hvrbox .hvrbox-text {
    	text-align: center;
    	font-size: 18px;
    	display: inline-block;
    	position: absolute;
    	top: 50%;
    	left: 50%;
    	-moz-transform: translate(-50%, -50%);
    	-webkit-transform: translate(-50%, -50%);
    	-ms-transform: translate(-50%, -50%);
    	transform: translate(-50%, -50%);
    }
    .hvrbox .hvrbox-text_mobile {
    	font-size: 15px;
    	border-top: 1px solid rgb(179, 179, 179); /* for old browsers */
    	border-top: 1px solid rgba(179, 179, 179, 0.7);
    	margin-top: 5px;
    	padding-top: 2px;
    	display: none;
    }
    .hvrbox.active .hvrbox-text_mobile {
    	display: block;
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
</head>
 <div style="width:80%;margin:auto;">

   <div class="row" style="margin:50px 0px 20px 0px">
    <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
        <div style="background-color:#e5e5e5 ;border: 4px solid teal;box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">


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
      <li class="active"><a data-toggle="tab" href="#home" style="color:#000;font-weight:800"><strong>Personal Details</strong></a></li>
      <li><a data-toggle="tab" href="#menu1" style="color:#000;font-weight:800">Academic Details</a></li>
      <li><a data-toggle="tab" href="#menu2" style="color:#000;font-weight:800">Uploaded Docs</a></li>
   </ul>
          <div class="tab-content" >
              <div id="home"  class="tab-pane fade in active" >
   <table class="table table-bordered table-striped table-responsive" style="width:90%;margin:auto;">
   <br><br>
      <tr>
          <td style="font-weight:700">Email</td>
          <td>fadgvkhlj;okam@dasda.dcz</td>
      </tr>
      <tr>
          <td style="font-weight:700">Contact No.</td>
          <td>9874563210</td>
      </tr>
      <tr>
          <td style="font-weight:700">Gender:
          </td>
          <td>F</td></tr>
      <tr>
          <td style="font-weight:700">Date Of Birth:</td><td>28/08/1997</td></tr><tr>
          <td style="font-weight:700">Mother's Name:</td>
          <td>hdasbknm</td></tr><tr>
      <td style="font-weight:700">Father's Name:</td><td>akfjdbnzxcm</td></tr><tr>
          <td style="font-weight:700">Emergency Conact No:</td><td>9543215</td></tr><tr>
          <td style="font-weight:700">Address:</td>
          <td>nsdfh878hjbdb</td></tr><tr>
                  <td style="font-weight:700">Blood Group:</td><td>AB+</td></tr><tr>
          <td style="font-weight:700">Category:</td><td>OBC</td></tr><tr>
                  <td style="font-weight:700">Seat Alloted Category:</td><td>OBC</td></tr><tr>

      </table><hr/>
      <a href="index2.php" align="center" ><h4 align="right" style="padding-right:2%;padding-bottom:1%;">Edit
        <span class="glyphicon glyphicon-pencil"></span></h4>
      </a>
              </div>
              
              
              
              <div id="menu1" class="tab-pane fade" >
              <table  class="table table-bordered table-striped table-responsive" style="width:90%;margin:auto;">
   <br><br>
                        <tr><td style="font-weight:700">

                            Course:
                            </td>
                        <td>
                            B.tech.

                            </td></tr>
                        <tr><td style="font-weight:700">

                            Semester:
                            </td>
                        <td>

                    5<sup>th</sup>
                            </td></tr>
                    <tr><td style="font-weight:700">
                            Year:

                            </td>
                        <td>

                            3<sup>rd</sup>
                            </td></tr>
                    <tr><td style="font-weight:700">
                            Branch:

                            </td>
                        <td>
                            CSE

                            </td></tr>
                    <tr><td style="font-weight:700">
                    Last SGPA:

                            </td>
                        <td>
                            8.13

                            </td></tr>
                    <tr><td style="font-weight:700">

                    CGPA
                            </td>
                        <td>

                        8.13
                            </td></tr>

                     <tr><td style="font-weight:700">
                            12<sup>th</sup> % and Board:

                            </td>
                        <td>

                            95.2% CBSE
                            </td></tr>
                        <tr><td style="font-weight:700">

                            10<sup>th</sup> % and Board:
                            </td>
                        <td>
                            10 CBSE

                            </td></tr>
                    <tr><td style="font-weight:700">
                            JEE Main Rank:
                            </td>
                        <td>
                            1236515456

                            </td></tr>
                    <tr><td style="font-weight:700">
                            JEE Advanced Rank:

                            </td>
                        <td>
                            65165412

                            </td></tr>
                    </table><hr/>

          <a href="index3.php" align="center" ><h4 align="right" style="padding-right:2%;padding-bottom:4%;">Edit
            <span class="glyphicon glyphicon-pencil"></span></h4>
          </a>
        </div>
              
              
              
            <div id="menu2" class="tab-pane fade">
              <div class="row">
                     <div class="col-xs-12 col-md-4" style="margin-left:2%;margin-top:1.5% ;"><a href="#popup1">
                         <div class="hvrbox">
                                                  <img src="img1.jpeg" alt="" class="reveal img-responsive reveal-content image-center" > </a>
             		  <div class="hvrbox-layer_top">
             		<div class="hvrbox-text"><a href="#popup1" class="icon" title="Preview">
     <i class="fa fa-search fa-lg" style="height:30px; width:30px;"></i>  </div></a>

             	</div>
             		  </div>
                         <h4>Marketing Associate, Thoughtworks</h4>
             			<br><br>

        </div>

        <div class="col-xs-12 col-md-4"   style=" margin-top:1.5%;"><a href="#popup1">
            <div class="hvrbox">
          <img src="img1.jpeg" alt="" class="reveal img-responsive reveal-content image-center" > </a>
     <div class="hvrbox-layer_top">
   <div class="hvrbox-text"><a href="#popup1" class="icon" title="Preview">
<i class="fa fa-search fa-lg" style="height:30px; width:30px;"></i>  </div></a>

 </div>
     </div>
            <h4>Marketing Associate, Thoughtworks</h4>
     <br><br>

</div>
<div class="col-xs-12 col-md-4"   style=" margin-left:2%;margin-top:1.5%;padding-right:0.5%;"><a href="#popup1">
    <div class="hvrbox">
  <img src="img1.jpeg" alt="" class="reveal img-responsive reveal-content image-center" > </a>
<div class="hvrbox-layer_top">
<div class="hvrbox-text"><a href="#popup1" class="icon" title="Preview">
<i class="fa fa-search fa-lg" style="height:30px; width:30px;"></i>  </div></a>

</div>
</div>
    <h4>Marketing Associate, Thoughtworks</h4>
<br><br>

</div>
    </div>
  </div>
     </div>
<br><br>
  <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">


  </div>
</div>

</div>
<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Pranav Kothri</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
		<img src="img1.jpeg" style="height:400px;weight:400px;">

		</div>
	</div>
</div>
</div>
</div>