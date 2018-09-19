


<head>
        <title>Feedback Form</title>
<style>
.form-container
{

	background-color:white;
  border: 1px solid #b9b0b0;
  border-radius:5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:5px;margin-bottom:5px;
}
.button
{
    background-color: #32726E;
    border: none;
    border-radius: 5px;
    color: white;
    padding: 7px 32px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
}
.custom-select
{
 position: relative;
 font-family: Arial;
}


.nav-tabs {
        background-color:  #E0E0E0 ;
        border: 1px 0px;
        border-radius: 5px;
    }
 .nav-tabs>li>a {
            border: medium none;
        }
</style>
</head>
<body>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                  <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home"><strong>File Querry</strong></a></li>
                      <li><a data-toggle="tab" href="#menu1">Querry Status</a></li>
                  </ul>

                  <div id="home" class="tab-pane fade in active">
                   <div style="margin:10px">
                    <h2>Querry</h2>
                    <p> Please provide your querry below: </p>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">

                                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                          <select id="toWhom">
                              <option value="hide">-- To Whom!--</option>
                              <option value="HOD" rel="icon-temperature">HOD</option>
                              <option value="Administration">Administration</option>
                              <option value="Web Admin">Web Admin</option>
                          </select>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="button" >Send</button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>



                <div id="menu1" class="tab-pane fade">
                  <div style="margin:10px">

                  </div>
                </div>
            </div>
          </div>
          <br><br><br><br><br><br>
</body>

