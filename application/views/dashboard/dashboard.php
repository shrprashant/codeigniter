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


<audio id="audio" src="<?php echo base_url();?>assets/sound/TinyButton.mp3" ></audio>
</head>
<body>
<div id="header"> <a href="<?php echo site_url('Home/dashboard')?> " id="logo"><img src="<?php echo base_url();?>assets/images/logo.gif" width="310" height="114" alt=""></a>
  <ul class="navigation">
 <li class="active"><a href="<?php echo site_url('Home/dashboard')?> " value="PLAY"  onclick="play()">Home</a></li>
    <li><a href="<?php echo site_url('Cart/selectProduct')?>"  value="PLAY"  onclick="play()">PetMart</a></li>
    <li><a href="<?php echo site_url('Home/petservice1')?>"  value="PLAY"  onclick="play()">PetService</a></li>
    <li><a href="<?php echo site_url('Home/petguide1')?>"  value="PLAY"  onclick="play()">PetGuide</a></li>
     <li><a href="<?php echo site_url('Home/about2')?>"  value="PLAY"  onclick="play()">About us</a></li>
   
    <li><a href="<?php echo site_url('User/selectProfile')?>"  value="PLAY"  onclick="play()"> Update info</a></li>
     <li><a href="<?php echo site_url('User/Logout')?>"  value="PLAY"  onclick="play()">Logout</a></li>

  </ul>
</div>
<div id="body">
  <div class="banner">&nbsp;</div>
  <div id="content">
    <div class="content">
      <ul>
        <li> <a href="#"><img src="<?php echo base_url();?>assets/images/puppy.jpg" width="114" height="160" alt=""></a>
          <h2>What they need</h2>
          <p>All they want to be treated like a part of  family. Pets need care and support just like human being <a class="more" href="#">View all</a></p>
        </li>
        <li> <a href="#"><img src="<?php echo base_url();?>assets/images/cat.jpg" width="114" height="160" alt=""></a>
          <h2>Something good</h2>
          <p>Based on your needs we'll do all the legwork and match the most qualified professional dog walker or pet sitter in your area to care for your pet. <a class="more" href="#">View all</a></p>
        </li>
        <li> <a href="#"><img src="<?php echo base_url();?>assets/images/koi.jpg" width="114" height="160" alt=""></a>
          <h2>Kinds of Fish</h2>
          <p>Different types of fish are comming soon.. <a class="more" href="#"></a></p>
        </li>
        <li> <a href="#"><img src="<?php echo base_url();?>assets/images/bird.jpg" width="114" height="160" alt=""></a>
          <h2>Fun birds</h2>
          <p>We mostly sale products for piegon and diffferent types of pegion <a class="more" href="#"></a></p>
        </li>
      </ul>
    </div>
    <div id="sidebar">
      <div class="search">
        <input type="text" name="s" value="Find">
        <button>&nbsp;</button>
        <label for="articles">
          <input type="radio" id="articles">
          Articles</label>
        <label for="products">
          <input type="radio" id="products" checked>
          PetMart Products</label>
      </div>
      <div class="section">
        <ul class="navigation">
          <li class="active"><a href="#">Shopping Guides</a></li>
      <!--    <li><a href="#">Discounted Items</a></li> -->
        </ul>
        <div class="aside">
          <div>
            <div>
              <ul>
                <li><a href="#">Pet Accesories </a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Bath Essentials</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Food</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Vitamins</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Needs</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Toy and Treats</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Supplies</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Emergency Kit</a> <a class="more" href="#">see all</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="featured">
    <ul>
      <li><a href="#"><img src="<?php echo base_url();?>assets/images/organic-and-chemical-free.jpg" width="300" height="90" alt=""></a></li>
      <li><a href="#"><img src="<?php echo base_url();?>assets/images/good-food.jpg" width="300" height="90" alt=""></a></li>
      <li class="last"><a href="#"><img src="<?php echo base_url();?>assets/images/pet-grooming.jpg" width="300" height="90" alt=""></a></li>
    </ul>
  </div>
</div>
<div id="footer">
  <div class="section">
    <ul>
      <li> <img src="<?php echo base_url();?>assets/images/friendly-pets.jpg" width="240" height="186" alt="">
        <h2><a href="#">Friendly Pets</a></h2>
        <p> Pets are our best friend. they gives us company. they never betray us.<a class="more" href="#">Read More</a> </p>
      </li>
      <li> <img src="<?php echo base_url();?>assets/images/pet-lover2.jpg" width="240" height="186" alt="">
        <h2><a href="#">How dangerous are they</a></h2>
        <p> They are not dangerous if we love and care them. sometime they may be aggressive. <a class="more" href="#"></a> </p>
      </li>
      <li> <img src="<?php echo base_url();?>assets/images/healthy-dog.jpg" width="240" height="186" alt="">
        <h2><a href="#">Keep them healthy</a></h2>
        <p> Good food with regular diet plan makes them healthy. <a class="more" href="#">Read More</a> </p>
      </li>
      <li>
        <h2><a href="#">Love...love...love...pets</a></h2>
        <p> As we love them they are always loyal to us. So we should care them <a class="more" href="#">Read More</a> </p>
        <img src="<?php echo base_url();?>assets/images/pet-lover.jpg" width="240" height="186" alt=""> </li>
    </ul>
  </div>
  <div id="footnote">
    <div class="section">Copyright &copy; 2017 <a href="#">City Pet Service</a> All rights reserved <a target="_blank" href="http://www.facebook.com/citypetservice/">www.facebook.com/citypetservice</a></div>
  </div>
</div>
</body>
</html>