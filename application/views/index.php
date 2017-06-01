<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>City Pet Service</title>
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
        <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diam nonummy nib. <a class="more" href="#"></a> </p>
      </li>
      <li> <img src="<?php echo base_url();?>assets/images/pet-lover2.jpg" width="240" height="186" alt="">
        <h2><a href="#">How dangerous are they</a></h2>
        <p> Lorem ipsum dolor sit amet, cons ectetuer adepis cing, sed diam euis. <a class="more" href="#"></a> </p>
      </li>
      <li> <img src="<?php echo base_url();?>assets/images/healthy-dog.jpg" width="240" height="186" alt="">
        <h2><a href="#">Keep them healthy</a></h2>
        <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diam nonu mmy. <a class="more" href="#">R</a> </p>
      </li>
      <li>
        <h2><a href="#">Love...love...love...pets</a></h2>
        <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diameusim. <a class="more" href="#"></a> </p>
        <img src="<?php echo base_url();?>assets/images/pet-lover.jpg" width="240" height="186" alt=""> </li>
    </ul>
  </div>
  <div id="footnote">
    <div class="section">Copyright &copy; 2017 <a href="#">City Pet Service</a> All rights reserved <a target="_blank" href="http://www.facebook.com/citypetservice/">www.facebook.com/citypetservice</a></div>
  </div>
</div>
</body>
</html>