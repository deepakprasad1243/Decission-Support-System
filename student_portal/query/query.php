

<style>
.form-container
{

	background-color:white;
  border: 1px solid #b9b0b0;
  border-radius:5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:5px;margin-bottom:5px;
}
.form-container1
{

	background-color:white;
  border: 0.08px solid #b9b0b0;
  border-radius:8px;
  box-shadow: 2px 8px 20px 0px rgba(0, 0, 0, 0.3);padding-bottom:5px;padding-left:5px ;margin:10px ;margin-bottom:20px;
}

.button1
{
    background-color: #32726E;
    border: none;
    border-radius: 5px;
    color: white;
    padding: 5px 25px;
    text-align: center;
    display: inline-block;
    font-size: 14px;
    margin-top: 8px;
}
.nav-tabs {
        background-color:  #E0E0E0 ;
        border: 1px 0px;
        border-radius: 5px;
    }
 .nav-tabs>li>a {
            border: medium none;
        }
}

</style>



<div class="row " style="margin-top: 50px;margin-bottom: 50px;margin-left:150px;margin-right:150px;">
   <div class=" form-container">

<ul class="nav nav-tabs">
   <li class="active"><a data-toggle="tab" href="#home"><strong>File Query</strong></a></li>
   <li><a data-toggle="tab" href="#menu1">Your Query</a></li>
</ul>

       <div class="tab-content">
         <div id="home" class="tab-pane fade in active">
           <form role="form" method="POST" id="reused_form" action="query_db.php" >
          <div style="margin:10px">
           <h2>Query</h2>
           <p> Please provide your query below: </p>
                   <div class="row">
                   <div class="col-sm-12 form-group">
                       <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7" autofocus required></textarea>
                   </div>
               </div>
               <div class="row">
                 <div class="col-sm-12 form-group">
                 <select name="whom" id="toWhom" required>
                     <option value="">-- To Whom!--</option>
                     <option value="HOD" rel="icon-temperature">HOD</option>
                     <option value="Administration">Administration</option>
                     <option value="Web Admin">Web Admin</option>
                 </select>
               </div>
               </div>
               <div class="row" >
                   <div class="col-sm-12 form-group" >
                       <button type="submit" name="send" class="button" >Send</button>
                   </div>
               </div>

         </div>
           </form>
       </div>
           <div id="menu1" class="tab-pane fade">
                <div style="margin:10px">

               <h2 class="text-center">Query Registered:</h2>

               <div class="table-responsive">
               <?php
                 $con = mysqli_connect('localhost','root','','dss');
                 $result=mysqli_query($con,"select * from status order by id desc");
                 $i=1;
                 $roll=5;

                echo ' <table class="table table-hover table-bordered">
                   <thead >
                     <tr>
                       <th Style="text-align:center;">S.No.</th>
                       <th Style="text-align:center;">Query</th>
                       <th Style="text-align:center;">Query ID</th>
                       <th Style="text-align:center;">To Whom</th>
                       <th Style="text-align:center;">Status</th>
                     </tr>
                   </thead>';
                   while($row=mysqli_fetch_array($result))
                   {    $j=0;
                            if($row['roll']==$roll)
                         {
                   echo '<tbody>
                     <tr>
                     <form class="form-horizontal" method="POST" action="reply_db.php" class="text-center border ">
                       <td Style="text-align:center;">'.$i.'</td>
                       <td>'.$row['myQuery'].'</td>
                       <td Style="text-align:center;">'.$row['id'].'</td>
                       <td Style="text-align:center;">'.$row['whom'].'</td>
                      <td >';



                           if($row['reply']!=NULL){
                           echo '<button type="button"  style="background-color: #32726E;" class="btn  btn-success btn-sm" data-toggle="modal" data-target="#myModal'.$row["id"].'">View</button>';
                       }else echo '<h6 style="text-align:center">Wait</h6>';

                       echo '

                   <div class="modal fade" id="myModal'.$row["id"].'" role="dialog">
                    <div class="modal-dialog">

                    <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">To &nbsp;'.$row['whom'].'&nbsp;</h4>
                  </div>
                  <div class="modal-body">
                   <b>Query&nbsp;:</b>
                   <div  style="padding:3px;padding-left:20px;">'.$row['myQuery'].'</div>

                 </div>


                 <form class="form-horizontal" method="POST" action="reply_db.php" class="text-center border ">
                  <div class="modal-body">
                ';
               $keywords = preg_split("/-yZ@#%#@zQ-/", $row['reply']);
                   $size=sizeof($keywords);$i=$i+1;

                   if($j%2==0){

                       if($row['reply']!=NULL){
                       echo '<b>Reply &nbsp;:</b>';
                  }}

                  while($j<$size-1)
                  {
                      if($j%2==0){

                          if($row['reply']!=NULL){
                          echo '<div class="form-container1";><div style="padding-top:5px;padding-left:8px;font-style:italic;font-weight:bold;">'.$row['whom'].'&nbsp;&nbsp;:</div>';
                     }}
                     else echo '<div class="form-container1";><div style="padding-top:5px;padding-left:8px;font-style:italic;font-weight:bold;}">You &nbsp;&nbsp;:</div>';
                     echo  '<div  style="padding:3px;padding-left:20px;">'.$keywords[$j].'</div></div>';
                     $j=$j+1;
                  }
                  $j=$j-1;
               if($j%2==0 && $row['reply']!=NULL){

                 $_SESSION['id']=$row['id'];
              echo ' <div style="background-color:white;
              border: 0px solid #b9b0b0;
              border-radius:8px;
              box-shadow: 2px 8px 20px 0px rgba(0, 0, 0, 0.3);padding-bottom:5px;padding-left:5px ;margin:10px ;margin-bottom:20px;">
                     <textarea  class="form-control" type="textarea" name="user_reply" id="user_reply" placeholder="Your Comments" maxlength="6000" rows="3" ></textarea>
                     <button type="submit"  style="background-color: #32726E;margin-top:5px;" class="btn  btn-success btn-md button" name="send"  >Send</button>

                      </div>';}
                echo  ' </div></form>
                <div class="modal-footer">
                <button type="button" style="background-color: #32726E;" class="btn  btn-success btn-md button" data-dismiss="modal">Close</button>
                </div>
               </div>

             </div>
             </div>
                  </td>
                   </form>
                     </tr>
                    </tbody>';

              }
            }
            echo '</table>';
          ?>
               </div>



          </div>
      </div>
</div>
</div>
 </div>
<br/><br/>
