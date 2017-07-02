<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="iso-8859-1">
<link href="<?php echo base_url();?>assets/css/form.css" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>
<div id="header"> <a href="#" id="logo"><img src="<?php echo base_url();?>assets/images/logo1.png" width="310" height="114" alt=""></a>
  <ul class="navigation">
 <li class="active"><a href="<?php echo site_url('Home/dashboard')?>  value="PLAY"  onclick="play()">Home</a></li>
    <li><a href="<?php echo site_url('Cart/selectProduct')?>"  value="PLAY"  onclick="play()">PetMart</a></li>
    <li><a href="<?php echo site_url('Home/petservice1')?>"  value="PLAY"  onclick="play()">PetService</a></li>
    <li><a href="<?php echo site_url('Home/petguide1')?>"  value="PLAY"  onclick="play()">PetGuide</a></li>
     <li><a href="<?php echo site_url('Home/about1')?>"  value="PLAY"  onclick="play()">About us</a></li>
    <li><a href="<?php echo site_url('Home/contact1')?>"  value="PLAY"  onclick="play()">Contact us</a></li>
    <li><a href="<?php echo site_url('User/selectProfile')?>"  value="PLAY"  onclick="play()"> Update info</a></li>

  </ul>
</div>



<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

</script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jconfirmaction.jquery.js"></script>
<script type="text/javascript">
  
  $(document).ready(function() {
    $('.ask').jConfirmAction();
  });
  
</script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/reg.js"></script>
    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form.css">

    <!-- Website Font style -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='<?php echo base_url();?>assets/css/googlefonts.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url();?>assets/css/googefonts.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url();?>assets/css/reg.css' rel='stylesheet' type='text/css'>
   
    
<div class="regform"&emsp;&emsp;&emsp;>
  <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
   <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
   
<div class="container">
      <div class="r">
        <div class="main-login main-center">
          <tr>
             <td><label>* Note 1 session = 60 minutes</label></td>
             
              </tr>
        <h1>Pet Booking</h1>
            <form class="form-control" method="post" action="<?php echo base_url();?>Booking/addBooking">
            
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Select Pet Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  
                 <select class="form-control" name="petname">
                  <option value="">Select pet name </option>
                      <?php if(count($getPetName)):?>
                      <?php foreach($getPetName as $name):?>
                      <option value='<?php echo $name->petname;?>'>
                      <?php echo $name->petname;?>  
                   </option> 
                     <?php endforeach;?>
                             <?php else:?>
  
                             <?php endif;?>
                </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="service" class="cols-sm-2 control-label">Service </label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <select class="form-control" name="service">
                    <option value="">Select Service </option>
                    <option>walk</option> 
                    <option>feed </option> 
                    <option>play</option> 
                    <option>vetenary </option> 
                    <option>vaccination </option> 
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="day" class="cols-sm-2 control-label">Day </label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <select class="form-control" name="day">
                    <option value="">Select Day </option>
                    <option>Sunday </option> 
                    <option>Monday </option> 
                    <option>Tuesday</option> 
                    <option>Wednesday</option> 
                    <option>Thursday </option> 
                    <option>Friday </option> 
                    <option>Saturday </option> 
                  </select>
                </div>
              </div>
            </div>
            
            
            

            <div class="form-group">
              <label for="Date" class="cols-sm-2 control-label">Date</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="date" class="form-control" name="date" id="date"  />
                </div>
              </div>
            </div>




           <div class="form-group">
              <label for="color" class="cols-sm-2 control-label">Time</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="Time" class="form-control" name="time" id="time"  />
                </div>
              </div>
            </div>

           <div class="form-group">
              <label for="session" class="cols-sm-2 control-label">Session</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="sessionno" id="sessionno"  />
                </div>
              </div>
            </div>

        
            
            <div class="form-group ">
              <button type="submit"  name ='booking'id="button" class="btn btn-success btn-lg btn-block login-button">Submit
              </button>
             
            </div>
            
          </form>
        </div>
      </div>
    </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>


<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  </div>
</div> -->

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  

 
</div>

<div id="footer">
  <div class="section">
    <ul>
      <li> <img src="<?php echo base_url();?>assets/images/friendly-pets.jpg" width="240" height="186" alt="">
        <h2><a href="#">Friendly Pets</a></h2>
        <p> Pets are our best friend. they gives us company. they never betray us.<a class="more" href="#"></a> </p>
      </li>
      <li> <img src="<?php echo base_url();?>assets/images/pet-lover2.jpg" width="240" height="186" alt="">
        <h2><a href="#">How dangerous are they</a></h2>
        <p> They are not dangerous if we love and care them. sometime they may be aggressive. <a class="more" href="#"></a> </p>
      </li>
      <li> <img src="<?php echo base_url();?>assets/images/healthy-dog.jpg" width="240" height="186" alt="">
        <h2><a href="#">Keep them healthy</a></h2>
        <p> Good food with regular diet plan makes them healthy. <a class="more" href="#"></a> </p>
      </li>
      <li>
        <h2><a href="#">Love...love...love...pets</a></h2>
        <p> As we love them they are always loyal to us. So we should care them <a class="more" href="#"></a> </p>
        <img src="<?php echo base_url();?>assets/images/pet-lover.jpg" width="240" height="186" alt=""> </li>
    </ul>
  </div>
  <div id="footnote">
    <div class="section">Copyright &copy; 2017 <a href="#">City Pet Service</a> All rights reserved <a target="_blank" href="http://www.facebook.com/citypetservice/">www.facebook.com/citypetservice</a></div>
  </div>
</div>
</body>
</html>
