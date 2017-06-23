<!DOCTYPE HTML>
<head>
<title>City Pet </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
<script>
        $(function(){
            $('#products').slides({
                preload: true,
                preloadImage: 'img/loading.gif',
                effect: 'slide, fade',
                crossfade: true,
                slideSpeed: 350,
                fadeSpeed: 500,
                generateNextPrev: true,
                generatePagination: false
            });
        });
    </script>
</head>
<body>
  <div class="wrap">
    <div class="header">
        <div class="headertop_desc">
            
            <div class="account_desc">
                <ul>
                    <
                    <li><a href="#">My Account</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header_top">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
            </div>
              <div class="cart">
                   <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
                    <ul class="dropdown">
                            <li>you have no items in your Shopping cart</li>
                    </ul></div></p>
              </div>
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
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="delivery.html">Delivery</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="search_box">
                <form>
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                </form>
            </div>
            <div class="clear"></div>
         </div>         
   </div>
 <div class="main">
    <div class="content">
        <div class="content_top">
            <div class="back-links">
            <p><a href="index.html">Home</a> >>>> <a href="#">Electronics</a></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
                <div class="cont-desc span_1_of_2">
                  <div class="product-details">             
                    <div class="grid images_3_of_2">
                        <div id="container">
                           <div id="products_example">
                               <div id="products">
                                <div class="slides_container">
                                    <a href="#" target="_blank"><img src="images/productslide-1.jpg" alt=" " /></a>
                                    <a href="#" target="_blank"><img src="images/productslide-2.jpg" alt=" " /></a>
                                    <a href="#" target="_blank"><img src="images/productslide-3.jpg" alt=" " /></a>                 
                                    <a href="#" target="_blank"><img src="images/productslide-4.jpg" alt=" " /></a>
                                    <a href="#" target="_blank"><img src="images/productslide-5.jpg" alt=" " /></a>
                                    <a href="#" target="_blank"><img src="images/productslide-6.jpg" alt=" " /></a>
                                </div>
                                <ul class="pagination">
                                    <li><a href="#"><img src="images/thumbnailslide-1.jpg" alt=" " /></a></li>
                                    <li><a href="#"><img src="images/thumbnailslide-2.jpg" alt=" " /></a></li>
                                    <li><a href="#"><img src="images/thumbnailslide-3.jpg" alt=" " /></a></li>
                                    <li><a href="#"><img src="images/thumbnailslide-4.jpg" alt=" " /></a></li>
                                    <li><a href="#"><img src="images/thumbnailslide-5.jpg" alt=" " /></a></li>
                                    <li><a href="#"><img src="images/thumbnailslide-6.jpg" alt=" " /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desc span_3_of_2">
                    <h2>Lorem Ipsum is simply dummy text </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>                    
                    <div class="price">
                        <p>Price: <span>$500</span></p>
                    </div>
                    <div class="available">
                        <p>Available Options :</p>
                    <ul>
                        <li>Color:
                            <select>
                            <option>Silver</option>
                            <option>Black</option>
                            <option>Dark Black</option>
                            <option>Red</option>
                        </select></li>
                        <li>Size:<select>
                            <option>Large</option>
                            <option>Medium</option>
                            <option>small</option>
                            <option>Large</option>
                            <option>small</option>
                        </select></li>
                        <li>Quantity:<select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                             <option>9</option>
                            <option>10</option>
                        </select></li>
                    </ul>
                    </div>
                <div class="share-desc">
                    <div class="share">
                        <p>Share Product :</p>
                        <ul>
                            <li><a href="#"><img src="images/facebook.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/twitter.png" alt="" /></a></li>                        
                        </ul>
                    </div>
                    <div class="button"><span><a href="#">Add to Cart</a></span></div>                  
                    <div class="clear"></div>
                </div>
                 <div class="wish-list">
                    <ul>
                     <!--    <li class="wish"><a href="#">Add to Wishlist</a></li>
                        <li class="compare"><a href="#">Add to Compare</a></li> -->
                    </ul>
                 </div>
            </div>
            <div class="clear"></div>
          </div>
        <div class="product_desc">  
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>Product Details</li>
                   
                    <div class="clear"></div>
                </ul>
                <div class="resp-tabs-container">
                    <div class="product-desc">
                        <p>Lorem Ipsum is simply dummy text of the <span>printing and typesetting industry</span>. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <span>when an unknown printer took a galley of type and scrambled</span> it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<span> It has survived not only five centuries</span>, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                   </div>

                

                <div class="review">
                    <h4>Lorem ipsum Review by <a href="#">Finibus Bonorum</a></h4>
                     <ul>
                        <li>Price :<a href="#"><img src="images/price-rating.png" alt="" /></a></li>
                        <li>Value :<a href="#"><img src="images/value-rating.png" alt="" /></a></li>
                        <li>Quality :<a href="#"><img src="images/quality-rating.png" alt="" /></a></li>
                     </ul>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                 
            </div>
         </div>
     </div>
        <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>        
   <div class="content_bottom">
            <div class="heading">
            <h3>Related Products</h3>
            </div>
            <div class="see">
                <p><a href="#">See all Products</a></p>
            </div>
            <div class="clear"></div>
        </div>
   <div class="section group">
                <div class="grid_1_of_4 images_1_of_4">
                     <a href="#"><img src="images/new-pic1.jpg" alt=""></a>                 
                    <div class="price" style="border:none">
                                <div class="add-cart" style="float:none">                               
                                    <h4><a href="#">Add to Cart</a></h4>
                                 </div>
                             <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="#"><img src="images/new-pic2.jpg" alt=""></a>
                     <div class="price" style="border:none">
                                <div class="add-cart" style="float:none">                               
                                    <h4><a href="#">Add to Cart</a></h4>
                                 </div>
                             <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="#"><img src="images/new-pic4.jpg" alt=""></a>
                    <div class="price" style="border:none">
                                <div class="add-cart" style="float:none">                               
                                    <h4><a href="#">Add to Cart</a></h4>
                                 </div>
                             <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                 <img src="images/new-pic3.jpg" alt="">
                     <div class="price" style="border:none">
                                <div class="add-cart" style="float:none">                               
                                    <h4><a href="#">Add to Cart</a></h4>
                                 </div>
                             <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
                <div class="rightsidebar span_3_of_1">
                    <h2>CATEGORIES</h2>
                    <ul>
                     <li><a href="#">Dog Food</a></li>
                            <li><a href="#">Cat Food</a></li>
                            <li><a href="#">Bird Food</a></li>
                            <li><a href="#">Fish Food</a></li>
                            <li><a href="#">Accessories</a></li>
                    
                    </ul>
                    <div class="subscribe">
                        <h2>Newsletters Signup</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.......</p>
                            <div class="signup">
                                <form>
                                    <input type="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';"><input type="submit" value="Sign up">
                                </form>
                            </div>
                    </div>
                     <div class="community-poll">
                        <h2>Community POll</h2>
                        <p>What is the main reason for you to purchase products online?</p>
                        <div class="poll">
                            <form>
                                <ul>
                                    <li>
                                    <input type="radio" name="vote" class="radio" value="1">
                                    <span class="label"><label>More convenient shipping and delivery </label></span>
                                    </li>
                                    <li>
                                    <input type="radio" name="vote" class="radio" value="2">
                                    <span class="label"><label for="vote_2">Lower price</label></span>
                                    </li>
                                    <li>
                                    <input type="radio" name="vote" class="radio" value="3">
                                    <span class="label"><label for="vote_3">Bigger choice</label></span>
                                    </li>
                                    <li>
                                    <input type="radio" name="vote" class="radio" value="5">
                                    <span class="label"><label for="vote_5">Payments security </label></span>
                                    </li>
                                    <li>
                                    <input type="radio" name="vote" class="radio" value="6">
                                    <span class="label"><label for="vote_6">30-day Money Back Guarantee </label></span>
                                    </li>
                                    <li>
                                    <input type="radio" name="vote" class="radio" value="7">
                                    <span class="label"><label for="vote_7">Other.</label></span>
                                    </li>
                                    </ul>
                            </form>
                        </div>
                     </div>
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
</body>
</html>

Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Priva