<!DOCTYPE html>
<html>
<head>
<title>Pet Shop | PetGuide</title>
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
      <h2>Pet Guide</h2>
      <a href="<?php echo base_url();?>assets/userguide.pdf"> Click Here for User Guide</a>
      <div>
        <p> Here are some useful pet quide tips for your pets. Easy and convenient for you to learn more on how to understand them. basic intructions to useful information not just for your pet but also for other animals. </p>
      </div>
      <ul class="section">
        <li>
          <h2>Basic examination</h2>
          <p> A quick examination of your pet is extremely useful when describing
              the injuries that your animal may have sustained to your vet or vet nurse.
              With your own safety in mind, attempt to check the gums (should be
              pink), breathing (normal/laboured/noisy), assess for pain, ability to
              walk (lameness) and any discharges present.
              All this information can quickly pinpoint your animal’s injury or illness
              and allow the vet to provide you with suitable first aid measures to apply. </p>
        </li>
        <li>
          <h2>Know your pet’s individual heat risk</h2>
          <p>  
            We all know our pets are unique - importantly, so is their risk of overheating in the summer. Owners of white cats and dogs, and those that have white ears should be aware that they have a higher chance of burning. Visit Petplan’s website and use our Summer Proof Fun guide to ensure you know how vulnerable your own pet is when temperatures increase.</p>
        </li>
        <li>
          <h2>How to make them happy</h2>
          <p> The summer holidays are fast approaching and, while many of us may have already booked our holiday, there will still be some of us searching for last minute deals.

            However, for the dog owners amongst us, deciding whether we want a fortnight relaxing on a beach or a weekend city break is only one of the things we need to think about.

           Petplan takes a look at how you and your dog can have a safe and enjoyable holiday whatever your summer holiday plans…</p>
        </li>
        <li>
          <h2>While buying dogs</h2>
          <p> There are lots of things to consider if you are buying a new dog. Tiny canines are great companions, and their small size makes them perfect for smaller homes and gardens.

          Small dogs are known for being passionate, inquisitive and quick on their feet.

          Petplan looks at the all the little things you need to consider if you’re thinking of getting a small dog. </p>
        </li>
        <li>
          <h2>Pet Health and Allergies</h2>
          <p> Many pet owners will be familiar with the particular problems that this time of year can bring – grass and pollen allergies can affect both us and our pets.

          However, many people suffer allergies all year round and, unfortunately, there are thousands of people who are allergic to cats and dogs.

          This can prove problematic for people with pets, regardless of whether it’s them themselves that have allergies or close friends and family who also come into contact with their pets.

          Petplan takes a look at what causes this issue in some people and if there’s anything that can be done to treat it… </p>
        </li>
        <li>
          <h2>How to reduce risk of diabetes</h2>
          <p> One in every 500 dogs and cats develops diabetes, leading to costly daily insulin injections and lifelong monitoring. Yet in many cases, diabetes may be preventable, simply by establishing good feeding habits.

          Diabetes results in excessive levels of glucose (sugar) in the bloodstream and is more common in middle-aged, neutered pets</p>
        </li>
      </ul>>
      <div class="paging"> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a class="next" href="#">NEXT</a> </div>
    </div>
    <div id="sidebar">
      <div id="section">
        <div>
          <div>
            <h2>Pet Guide Overview</h2>
            <ul>
              <li><a href="#">Pet Trainging Guides <span>(1)</span> </a></li>
              <li><a href="#">Behavior Training <span>(11)</span> </a></li>
              <li><a href="#">Pet Recipes <span>(3)</span> </a></li>
              <li><a href="#">Do's and Don'ts <span>(8)</span> </a></li>
              <li><a href="#">Pet Foods <span>(3)</span> </a></li>
              <li><a href="#">Cosplay Pets <span>(2)</span> </a></li>
              <li><a href="#">Shopping Guides <span></span> </a></li>
              <li><a href="#">Pregnancy and Nursing Pets <span>(8)</span> </a></li>
              <li><a href="#">Medications <span>(7)</span> </a></li>
              <li><a href="#">Excercise <span>(7)</span> </a></li>
              <li><a href="#">Diet <span>(10)</span> </a></li>
              <li><a href="#">Grooming <span>(1)</span> </a></li>
              <li><a href="#">Cosplay Pets <span>(2)</span> </a></li>
              <li><a href="#">Shopping Guides <span></span> </a></li>
              <li><a href="#">Pregnancy and Nursing Pets <span>(8)</span> </a></li>
              <li><a href="#">Medications <span>(7)</span> </a></li>
              <li><a href="#">Excercise <span>(7)</span> </a></li>
              <li><a href="#">Diet <span>(10)</span> </a></li>
              <li><a href="#">Grooming <span>(1)</span> </a></li>
            </ul>
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
