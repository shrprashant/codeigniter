<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>City Pet Service</title>
<meta charset="iso-8859-1">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/ie7.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/ie6.css" rel="stylesheet" type="text/css">

<script>
  function play(){
       var audio = document.getElementById("audio");
       audio.play();
                 }
   </script>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style1.css" />
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/Ajquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/ddaccordion.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/js/niceforms.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/niceforms-default.css" />

<audio id="audio" src="<?php echo base_url();?>assets/sound/TinyButton.mp3" ></audio>
</head>
<body>
<div id="header"> <a href="#" id="logo"><img src="<?php echo base_url();?>assets/images/logo.gif" width="310" height="114" alt=""></a>
  <ul class="navigation">
 <li class="active"><a href="<?php echo site_url('Home/dashboard')?>"  value="PLAY"  onclick="play()">Home</a></li>
    <li><a href="<?php echo site_url('Cart/selectProduct')?>"  value="PLAY"  onclick="play()">PetMart</a></li>
    <li><a href="<?php echo site_url('Home/petservice1')?>"  value="PLAY"  onclick="play()">PetService</a></li>
    <li><a href="<?php echo site_url('Home/petguide1')?>"  value="PLAY"  onclick="play()">PetGuide</a></li>
     <li><a href="<?php echo site_url('Home/about1')?>"  value="PLAY"  onclick="play()">About us</a></li>
    <li><a href="<?php echo site_url('Home/contact1')?>"  value="PLAY"  onclick="play()">Contact us</a></li>
    <li><a href="<?php echo site_url('User/selectProfile')?>"  value="PLAY"  onclick="play()"> Update info</a></li>

  </ul>
</div>


<table id="rounded-corner" summary="2007 M">
    <thead>
      <tr>
          <th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Name</th>
            <th scope="col" class="rounded">Price</th>
            <th scope="col" class="rounded">Category</th>
            <th scope="col" class="rounded">Description</th>
            <th scope="col" class="rounded">Status</th>
            <th scope="col" class="rounded">Edit</th>
           
        
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        <tfoot>
      <tr>
          <td colspan="6" class="rounded-foot-left"><em></em></td>
          <td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
      <tr>
       <?php
      foreach($message as $row){
        ?>
          <td><input type="checkbox" name="" /></td>
            <td><?php echo $row->item_name;?></td>
            <td><?php  echo $row->item_price;?></td>
            <td><?php  echo $row->category_id;?></td>
            <td><?php  echo $row->item_desc;?></td>
            <td><?php echo $row->item_status;?></td>
            
            <td> <a href="<?php echo base_url().'Admin/findProduct/' . $row->item_id; ?>"class="ask"> <img src="<?php echo base_url();?>assets/images/images/images/user_edit.png" alt="edit" title="" border="0" /></a></td>
  
            <td> <a href="<?php echo base_url().'Admin/deleteProduct/' . $row->item_id; ?>"class="ask"> <img src="<?php echo base_url();?>assets/images/images/images/trash.png" alt="delete" title="" border="0" /></a></td>
  
          <!-- 
            <td><a href="#" class="ask"><img src="<?php echo base_url();?>assets/images/images/images/trash.png" alt="delete" title="" border="0" /></a></td> -->
        </tr>
        <?php
      }
    ?>
    </tbody>
</table>


     
      <div class="pagination">
        <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
        </div> 
  <div id="footnote">
    <div class="section">Copyright &copy; 2017 <a href="#">City Pet Service</a> All rights reserved <a target="_blank" href="http://www.facebook.com/citypetservice/">www.facebook.com/citypetservice</a></div>
  </div>
</div>
</body>
</html>