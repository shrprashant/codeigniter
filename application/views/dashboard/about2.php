<!DOCTYPE html>
<html>
<head>
<title>Pet Shop | About</title>
<meta charset="iso-8859-1">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
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
 <li class="active"><a href="<?php echo site_url('Home/dashboard')?>"  value="PLAY"  onclick="play()">Home</a></li><li><a href="<?php echo site_url('Cart/selectProduct')?>"  value="PLAY"  onclick="play()">PetMart</a></li>
    <li><a href="<?php echo site_url('Home/petservice1')?>"  value="PLAY"  onclick="play()">PetService</a></li>
    <li><a href="<?php echo site_url('Home/petguide1')?>"  value="PLAY"  onclick="play()">PetGuide</a></li>
     <li><a href="<?php echo site_url('Home/about1')?>"  value="PLAY"  onclick="play()">About us</a></li>
    <li><a href="<?php echo site_url('Home/contact1')?>"  value="PLAY"  onclick="play()">Contact us</a></li>

  </ul>
</div>
<div id="body">
  <div id="content">
    <div class="content">
      <div class="about">
        <h2>ABOUT US</h2>
        <ul>
          <li>
            <h2><a href="#">Our Introduction</a></h2>
            <p>We're your local professional in-home pet care service providing reliable and personalized pet sitting services to all of our human and furry clients since 2012. No two clients are the same, and that's why we love what we do! We work diligently to ensure that your pet is happy and well cared for at all times while we are on duty.  We enjoy every minute providing our professional pet sitting and dog walking services to our furry friends. But most of all, we strive to be your partners in your pet's care.  We service the entire New Orleans metro area.  Don't wait, schedule your walks or pet sitting today! </p>
          </li>
          <li>
            <h2><a href="#">For Your Pet</a></h2>
            <p> REDUCED ANXIETY. We know what it's like to venture into unknown places and the emotions that it invokes.  With Uptown Girls Pet Services, we eliminate that fear of the unknown as your pet stays home in their environment with the smells, bed and toys they enjoy so much! </p>
          </li>
          <li>
            <h2><a href="#">Be Part of Our Community</a></h2>
            <p> NO TRAVEL DRAMA! No upset tummies, no sad goodbyes and no fighting with the pet carrier. Everyone�s happy, content and you can enjoy yourself guilt-free knowing that your pet is in our loving, caring and reliable hands.  You don�t have to think about sacrificing your pet�s happiness for yours.  Travel worry free! </p>
          </li>
          <li>
            <h2><a href="#">Greetings</a></h2>
            <p>  PERSONALIZED ATTENTION.  During our visits, we deliver hugs, playtime, and all specific care according to your instructions for your pet.  Pets love routine - this is what makes them happy.  We will meet with you prior to your departure (complimentary meet and greet) and walk through your pet care routine and home so that we get it all just right!  </p>
          </li>
        </ul>
      </div>
      <div id="content">
    <div class="content">
      <h2>Contact us</h2>
      <div>
        <p> This is a complete web based system to provide an excellent service regarding pets. As the pets are our family members we need to care about them. This system is a complete solution for the pets. The address can be located with google map, which make it easy to fine the pet service.  User can register themselves and buy pet food and Accessories. In addition to this user can register their pets and book the services for pet. This website will help user to purchase pet foods in day to day life. </p>
      </div>
      <ul class="connect">
        <li>
          <h2>Customer Sales and Serevice</h2>
          <p> <span>E-mail: <a href="#">citypetservice@gmail.com</a></span> <span>Call or e-mail us for help with any aspect of your purchase, online or offline.</span> </p>
          <p> <span> call +977-9849015821</span> <span>Call +9823108477</span> </p>
        </li>
        <li>
          <h2>Store Hours</h2>
          <p> <span>sunday to saturday 9:00 am - 7:00 pm EST (GMT +05:45)</span> <span>Closed on public holidays</span> </p>
        </li>
        <li>
          <h2>Mailing Address</h2>
          <p> <span>Petshop</span> <span>Baghbazar </span> <span>4th Floor</span> <span>Yeti plaza</span> <span>Kathmandu</span> </p>
        </li>
      </ul>
    </div>
    <div id="sidebar">
      <div class="connect">
        <h2>Follow Us</h2>
        <ul>
          <li><a class="facebook" href="https://www.facebook.com/citypetservice">Facebook</a></li>
        
        </ul>
      </div>
    </div>
  </div>
    </div>
    <div id="sidebar">
      <div class="featured">
        <h2>Featured Topic</h2>
        <ul>
          <li> <a href="#"><img src="<?php echo base_url();?>assets/images/puppy2.jpg" width="115" height="155" alt=""></a>
            <h2><a href="#">What they need</a></h2>
            <p> SECURITY. Along with caring for your pet, we�re happy to devise the best service to ensure that your pet and home are secure. </a> </p>
          </li>
          <li> <a href="#"><img src="<?php echo base_url();?>assets/images/bird2.jpg" width="115" height="155" alt=""></a>
            <h2><a href="#">Fun birds</a></h2>
            <p> Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="#">read more</a> </p>
          </li>
          <li class="last"> <a href="#"><img src="<?php echo base_url();?>assets/images/cat2.jpg" width="115" height="155" alt=""></a>
            <h2><a href="#">Something good</a></h2>
            <p> Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="#">read more</a> </p>
          </li>
        </ul>
      </div>
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
