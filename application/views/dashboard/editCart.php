<!DOCTYPE HTML>
<head>
    <title>City Pet </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url(); ?>assets/css/petMart.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>assets/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css">
    <link href='<?php echo base_url();?>assets/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <script src="<?php echo base_url(); ?>assets/js/slides.min.jquery.js"></script>
    <script>
        $(function () {
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

                <div class="clear"></div>
            </div>
            <div class="header_top">

                <div class="cart">
                    <p><span>Cart Items:</span>
                    <div id="dd" class="wrapper-dropdown-2"> 
                        <ul class="dropdown">
                            <li><a href="<?php echo site_url('Cart/selectProduct') ?>"/>Select Product</a></li>
                                 <li><a  href="<?php echo site_url('User/billGenerate')?>" />Payment status</a></li>
                            <li><a  href="<?php echo site_url('Home/Index') ?>" />Logout</a>></li>
                        </ul>
                    </div>
                    </p>
                </div>
                <script type="text/javascript">
                    function DropDown(el) {
                        this.dd = el;
                        this.initEvents();
                    }
                    DropDown.prototype = {
                        initEvents: function () {
                            var obj = this;
                            obj.dd.on('click', function (event) {
                                $(this).toggleClass('active');
                                event.stopPropagation();
                            });
                        }
                    }
                    $(function () {
                        var dd = new DropDown($('#dd'));
                        $(document).click(function () {
                            // all dropdowns
                            $('.wrapper-dropdown-2').removeClass('active');
                        });
                    });
                </script>
                <div class="clear"></div>
            </div>

        </div>
         
        
                <div class="main">
                    <div class="content">
       <div class="section group">
        <?php
        foreach ($cartProduct as $row) {
            ?> 
                     <form  method="post" action="<?php echo base_url(); ?>Cart/updateCart">
                            <div class="cont-desc span_1_of_2">
                                <div class="product-details">             
                                    <div class="grid images_3_of_2">
                                        <div id="container">
                                            <div id="products_example">
                                                <div id="products">
                                                    <div class="slides_container">
                                                        <a href="#" target="_blank">
                                                            <img src="<?php echo base_url(); ?>assets/images/images/upload/<?php echo $row->item_image; ?>">
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="desc span_3_of_2">
                                        <h2><?php echo $row->item_name; ?> </h2>

                                        <div class="price">
                                            <p>Price: <span><?php echo $row->item_price; ?></span></p>
                                        </div>
                                        <div>
                                        <input type="hidden" name="cart_id" value="<?php echo $row->cart_id; ?>"> </div>
                                        <div class="available">
                                            <p>Available Options :</p>
                                            <ul>
                                                

                                                <li>Quantity:
                                                    <select name="quantity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                       
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="share-desc">
                                            <div class="share">
                                                <p>Share Product :</p>
                                                <ul>
                                                    <li><a href="www.facebook.com"><img src="<?php echo base_url() ?>assets/images/images/dashboard/facebook.png" alt="" /></a></li>
                                                    <li><?php echo anchor("cart/deleteCart/{$row->cart_id}", 'Delete from Cart'); ?><img src="<?php echo base_url() ?>assets/images/images/images/error.png" /> </li>                        
                                                </ul>
                                            </div>
                                            <a>
                                            </a>
                                            <span class="button add-cart">
                                          

                                                    <button type="submit" id="button" class="btn btn-success btn-lg btn-block login-button">Update Cart
                                                    </button>

                                               
                                            </span>   
<!-- 
                                            <div class="clear"></div> -->
                                        </div>

                                    </div>

<!-- 
                                    <div class="clear"></div> -->
                                </div>
                                <div class="product_desc">  
                                    <div id="horizontalTab">
                                        <ul class="resp-tabs-list">
                                            <li>Product Details</li>

                                            <div class="clear"></div>
                                        </ul>
                                        <div class="resp-tabs-container">
                                            <div class="product-desc">
                                                <p>
                                                    <?php echo $row->item_desc; ?>     
                                                </p>       </div>

                                        </div>


                                    </div>
                                </div>
                                </form>
                                <?php
                            }
                            ?>  



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
                                    <a href="#"><img src="<?php echo base_url() ?>assets/images/images/upload/feature-pic1.jpg" alt=""></a>                 
                                    <div class="price" style="border:none">
                                        <div class="add-cart" style="float:none">                               
                                            <h4><a href="#">Add to Cart</a></h4>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="grid_1_of_4 images_1_of_4">
                                    <a href="#"><img src="<?php echo base_url() ?>assets/images/images/upload/feature-pic2.jpg" alt=""></a>
                                    <div class="price" style="border:none">
                                        <div class="add-cart" style="float:none">                               
                                            <h4><a href="#">Add to Cart</a></h4>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="grid_1_of_4 images_1_of_4">
                                    <a href="#"><img src="<?php echo base_url() ?>assets/images/images/upload/feature-pic3.jpg" alt=""></a>
                                    <div class="price" style="border:none">
                                        <div class="add-cart" style="float:none">                               
                                            <h4><a href="#">Add to Cart</a></h4>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="grid_1_of_4 images_1_of_4">
                                    <img src="<?php echo base_url() ?>assets/images/images/upload/feature-pic4.jpg" alt="">
                                    <div class="price" style="border:none">
                                        <div class="add-cart" style="float:none">                               
                                            <h4><a href="#">Add to Cart</a></h4>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="rightsidebar span_3_of_1">
                            <h2>CATEGORIES</h2>
                            <ul>
                                <li><a href="#">Dog Food</a></li>
                                <li><a href="#">Cat Food</a></li>
                                <li><a href="#">Bird Food</a></li>
                                <li><a href="#">Fish Food</a></li>
                                <li><a href="#">Accessories</a></li>
                        
                            </ul>
                            subscription futur work  <div class="subscribe">
                                <h2>Newsletters Signup</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.......</p>
                                <div class="signup">
                                    <form>
                                        <input type="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';"><input type="submit" value="Sign up">
                                    </form>
                                </div>
                            </div>
                        
                        </div> -->
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
