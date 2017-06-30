<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <title>City Pet Service</title>
        <meta charset="iso-8859-1">
        <link href="<?php echo base_url();?>assets/css/petMart.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/ie7.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/ie6.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo base_url();?>assets/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/startstop-slider.js"></script>
        <script>
            function play(){
            var audio = document.getElementById("audio");
            audio.play();
            }
        </script>


    <audio id="audio" src="<?php echo base_url();?>assets/sound/TinyButton.mp3" ></audio>
</head>
<body>
    <div id="header"> <a href="#" id="logo"><img src="<?php echo base_url();?>assets/images/logo.gif" width="310" height="114" alt=""></a>
        <ul class="navigation">
            <li class="active"><a href="<?php echo site_url('Home/dashboard')?>" value="PLAY"  onclick="play()">Home</a></li>
            <li><a href="<?php echo site_url('Cart/selectProduct')?>"  value="PLAY"  onclick="play()">PetMart</a></li>
            <li><a href="<?php echo site_url('Home/petservice1')?>" value="PLAY"  onclick="play()">PetService</a></li>
            <li><a href="<?php echo site_url('Home/petguide1')?>" value="PLAY"  onclick="play()">PetGuide</a></li>
            <li><a href="<?php echo site_url('Home/about1')?>" value="PLAY"  onclick="play()">About us</a></li>
            <li><a href="<?php echo site_url('Home/contact1')?>" value="PLAY"  onclick="play()">Contact us</a></li>

        </ul>
    </div>

    <div class="wrap">
        <div class="header">
            <div class="headertop_desc">
            
                  <div class="cart">
                    <p><span>Cart Items:</span>
                    <div id="dd" class="wrapper-dropdown-2"> 
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url('Cart/getCartProduct')?>"/>UPDATE CART</a></li>
                            <li><a  href="<?php echo site_url('Home/Index')?>" />Logout</a></li>
                        </ul>
                    </div>
                    </p>
                </div>
            
<!-- 
                        <li><a href="#" id="dd" class="wrapper-dropdown-2" >My Account</a></li> -->
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="header_top">

                
                <script type="text/javascript">
                    function DropDown(el) {
                    this.dd = el;
                    this.initEvents();
                    }
                    DropDown.prototype = {
                    initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                    $(this).toggleClass('active');
                    event.stopPropagation();
                    });	
                    }
                    }

                    $(function() {

                    var dd = new DropDown( $('#dd') );

                    $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-2').removeClass('active');
                    });

                    });

                </script>
                <div class="clear"></div>
            </div>
            <div class="header_bottom">


<!--                  search option for next version
 -->              <!--   <div class="search_box">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                    </form>
                </div> -->
                <div class="clear"></div>
            </div>	     
            <div class="header_slide">
                <div class="header_bottom_left">				
                    <div class="categories">
                        <ul>
                            <h3>Categories</h3>
                            <li><a href="#">Dog Food</a></li>
                            <li><a href="#">Cat Food</a></li>
                            <li><a href="#">Bird Food</a></li>
                            <li><a href="#">Fish Food</a></li>
                            <li><a href="#">Accessories</a></li>

                        </ul>
                    </div>					
                </div>
                <div class="header_bottom_right">					 
                    <div class="slider">					     
                        <div id="slider">
                            <div id="mover">
                                <div id="slide-1" class="slide">			                    
                                    <div class="slider-img">
                                        <a href="preview.html"><img src="<?php echo base_url()?>assets/images/images/dashboard/slide-1-image.jpg" alt="learn more" /></a>									    
                                    </div>
                                    <div class="slider-text">
                                        <h1>Clearance<br><span>SALE</span></h1>
                                        <h2>UPTo 10% OFF</h2>
                                        <div class="features_list">
                                            <h4>Get to Know More About Our Memorable Services</h4>							               
                                        </div>
                                        <a href="preview.html" class="button">Shop Now</a>
                                    </div>			               
                                    <div class="clear"></div>				
                                </div>	
                                <div class="slide">
                                    <div class="slider-text">
                                        <h1>Clearance<br><span>SALE</span></h1>
                                        <h2>UPTo 20% OFF</h2>
                                        <div class="features_list">
                                            <h4>Get to Know More About Our Memorable Services</h4>							               
                                        </div>
                                        <a href="preview.html" class="button">Shop Now</a>
                                    </div>		
                                    <div class="slider-img">
                                        <a href="preview.html"><img src="<?php echo base_url()?>assets/images/images/dashboard/slide-2-image.jpg" alt="learn more" /></a>
                                    </div>						             					                 
                                    <div class="clear"></div>				
                                </div>
                                <div class="slide">						             	
                                    <div class="slider-img">
                                        <a href="preview.html"><img src="<?php echo base_url()?>assets/images/images/dashboard/slide-3-image.jpg" alt="learn more" /></a>
                                    </div>
                                    <div class="slider-text">
                                        <h1>Clearance<br><span>SALE</span></h1>
                                        <h2>UPTo 10% OFF</h2>
                                        <div class="features_list">
                                            <h4>Get to Know More About Our Memorable Services </h4>							               
                                        </div>
                                        <a href="preview.html" class="button">Shop Now</a>
                                    </div>	
                                    <div class="clear"></div>				
                                </div>												
                            </div>		
                        </div>
                        <div class="clear"></div>					       
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <h1 class="bar">
        	<?php echo str_replace('-',' ',ucwords($this->uri->segment(3))); ?>
        </h1>


        <div class="main">
            <div class="content">
                <div class="content_top">
                    <div class="heading">
                        <h3>Bird  Food</h3>
                 
                    </div>
                    <div class="see">
                       
                    </div>
                    <div class="clear"></div>
                </div>
               
                <?php foreach ($message as $row) 
      
                {
                ?>
                <div class="section group">
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href=""><img src="<?php echo base_url();?>assets/images/images/upload/<?php echo $row->item_image ?>" alt="" /></a>
                        <h2><?php  echo $row->item_desc;?> </h2>
                        <div class="price-details">
                            <div class="price-number">
                                <p><span class="rupees"><?php  echo $row->item_price;?></span></p>
                            </div>
                            <div class="add-cart">								
                                <h4><?php echo anchor("cart/addToCart/{$row->item_id}",'Add to Cart' );?></h4>
                            </div>
                            <div class="clear"></div>
                        </div>
                </div>
                <?php
}

?> 
    
    <div class="heading">
                        <h3>Cat Food</h3>
                 
                    </div>
                    <div class="see">
                       
                    </div>
                    <div class="clear"></div>
                </div>
               
                <?php foreach ($message as $row) 
      
                {
                ?> 
                    
                <div class="section group" >
                    <div class="grid_2_of_4 images_1_of_4">
                        <a href=""><img src="<?php echo base_url();?>assets/images/images/upload/<?php echo $row->item_image ?>" alt="" /></a>
                        <h2><?php  echo $row->item_desc;?> </h2>
                        <div class="price-details">
                            <div class="price-number">
                                <p><span class="rupees"><?php  echo $row->item_price;?></span></p>
                            </div>
                            <div class="add-cart">                              
                                <h4><?php echo anchor("cart/addToCart/{$row->item_id}",'Add to Cart' );?></h4>
                            </div>
                            <div class="clear"></div>
                        </div>
                </div>
                <?php
}

?> 
                    
                 


               
    <div class="footer">
        <div class="wrap">	
            <div class="section group">
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Customer Service</a></li>
                        <li><a href="#">Advanced Search</a></li>
                        <li><a href="delivery.html">Orders and Returns</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Why buy from us</h4>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Customer Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="contact.html">Site Map</a></li>
                        <li><a href="#">Search Terms</a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>My account</h4>
                    <ul>
                        <li><a href="contact.html">Sign In</a></li>
                        <li><a href="index.html">View Cart</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="contact.html">Help</a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Contact</h4>
                    <ul>
                        <li><span>+91-123-456789</span></li>
                        <li><span>+00-123-000000</span></li>
                    </ul>
                    <div class="social-icons">
                        <h4>Follow Us</h4>
                        <ul>
                            <li><a href="#" target="_blank"><img src="" alt="" /></a></li>
                            <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
                            <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
                            <li><a href="#" target="_blank"> <img src="images/dribbble.png" alt="" /></a></li>
                            <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                </div>
            </div>			
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {			
        $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>	


    <div class="copy_right">
        <p>© City Pet Service </p>
    </div>
</body>

</html>