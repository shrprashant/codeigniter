<!DOCTYPE html>
<html>
<head>
<title> PetMart</title>
<meta charset="iso-8859-1">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>
<div id="header"> <a href="#" id="logo"><img src="<?php echo base_url();?>assets/images/logo.gif" width="310" height="114" alt=""></a>
  <ul class="navigation">
 <li class="active"><a href="<?php echo site_url('User/index')?>">Home</a></li>
    <li><a href="<?php echo site_url('User/petmart')?>">PetMart</a></li>
    <li><a href="<?php echo site_url('User/about')?>">About us</a></li>
    <li><a href="<?php echo site_url('User/blog')?>">Blog</a></li>
    <li><a href="<?php echo site_url('User/petguide')?>">PetGuide</a></li>
    <li><a href="<?php echo site_url('User/contact')?>">Contact us</a></li>
    <li><a href="<?php echo site_url('User/login')?>">Login</a></li>
  </ul>
</div>
<div id="body">
  <div id="content">
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
    <div class="content">
      <ul>
        <li> <a href="#"><img src="<?php echo base_url();?>assets/images/koi2.jpg" width="140" height="250" alt=""></a>
          <h2>Food Area</h2>
          <span><a href="#">Dog Food</a></span> <span><a href="#">Cat Food</a></span> <span><a href="#">Bird Food</a></span> <span><a href="#">Fish Food</a></span> <span><a href="#">Reptile Food</a></span> <span><a href="#">Small Pet Food</a></span> <span><a href="#">Large Pet Food</a></span> <span><a class="more" href="#">View all</a></span> </li>
        <li> <a href="#"><img src="<?php echo base_url();?>assets/images/cat3.jpg" width="140" height="250" alt=""></a>
          <h2>Accesories</h2>
          <span><a href="#">Oder Control</a></span> <span><a href="#">Liners</a></span> <span><a href="#">Scoops & Mats</a></span> <span><a href="#">Collars</a></span> <span><a href="#">Harnesses</a></span> <span><a href="#">ID Tags</a></span> <span><a href="#">Leashes</a></span> <span><a class="more" href="#">View all</a></span> </li>
        <li> <a href="#"><img src="<?php echo base_url();?>assets/images/dog2.jpg" width="140" height="240" alt=""></a>
          <h2>Training & Behavior</h2>
          <span><a href="#">Dog Food</a></span> <span><a href="#">Cat Food</a></span> <span><a href="#">Bird Food</a></span> <span><a href="#">Fish Food</a></span> <span><a href="#">Reptile Food</a></span> <span><a href="#">Small Pet Food</a></span> <span><a class="more" href="#">View all</a></span> </li>
        <li> <a href="#"><img src="<?php echo base_url();?>assets/images/bird3.jpg" width="140" height="240" alt=""></a>
          <h2>Health Center</h2>
          <span><a href="#">Multivitamins</a></span> <span><a href="#">Dental Care</a></span> <span><a href="#">First Aid Kits</a></span> <span><a href="#">Medications</a></span> <span><a href="#">Supplements</a></span> <span><a href="#">Eye & Ear Care</a></span> <span><a href="#">Hip & Joint Health</a></span> <span><a class="more" href="#">View all</a></span> </li>
        <li> <a href="#"><img src="<?php echo base_url();?>assets/images/bird-in-cage.jpg" width="140" height="250" alt=""></a>
          <h2>Travel Essentials</h2>
          <span><a href="#">Car Barriers</a></span> <span><a href="#">Car Seat Covers</a></span> <span><a href="#">Car Seats</a></span> <span><a href="#">ramps</a></span> <span><a href="#">Seat Belts & Harnesses</a></span> <span><a href="#">Strollers</a></span> <span><a href="#">Travel Creates & Carrier</a></span> <span><a class="more" href="#">View all</a></span> </li>
        <li> <a href="#"><img src="<?php echo base_url();?>assets/images/puppy3.jpg" width="140" height="240" alt=""></a>
          <h2>Grooming</h2>
          <span><a href="#">Brushes & Combs</a></span> <span><a href="#">Deodorizers</a></span> <span><a href="#">Cologne</a></span> <span><a href="#">Ear & Eya Cleaners</a></span> <span><a href="#">Nail Clippers</a></span> <span><a href="#">Shampoo</a></span> <span><a href="#">Conditioners</a></span> <span><a href="#">Shed Controls</a></span> <span><a class="more" href="#">View all</a></span> </li>
      </ul>
    </div>
    <!--<div id="sidebar"> <a href="#"><img src="images/discount.jpg" width="300" height="790" alt=""></a> </div>  -->
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
