<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City Pet Service</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style1.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/Ajquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='<?php echo base_url();?>assets/images/images/images/plus.gif' class='statusicon' />", "<img src='<?php echo base_url();?>assets/images/images/images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
<script src="<?php echo base_url();?>assets/js/jquery.jclock-1.2.0.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script type="text/javascript">
$(function($) {
    $('.jclock').jclock();
});
</script>

<script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="<?php echo base_url();?>assets/images/images/images/logo.gif" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome Admin, <a href="#">Visit site</a> | <a href="#" class="messages">(3) Messages</a> | <a href="#" class="logout">Logout</a></div>
    <div class="jclock"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    <li><a class="current" href="">Admin Home</a></li>
                    <li><a href="l">Manage Categories<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="" title="">Add Category</a></li>
                        <li><a href="" title="">Update Category</a></li>
                        <li><a href="" title="">Delete Category</a></li>
                       
                      </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="">Manage Users<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="" title="">Add User Info</a></li>
                        <li><a href="" title="">Update User Info</a></li>
                        <li><a href="" title="">Delete User Info</a></li>
                       
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="login.html">Manage Orders<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="" title="">View User order</a></li>
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    
                    </li>
                    <li><a href="login.html">Manage Service<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="" title="">Add Services</a></li>
                        <li><a href="" title="">Update Services</a></li>
                        <li><a href="" title="">View Services</a></li>
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                 
                    </ul>
                    </div> 
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
    		<div class="sidebar_search">
            <form>
            <input type="text" name="" class="search_input" value="search keyword" onclick="this.value=''" />
            <input type="image" class="search_submit" src="<?php echo base_url();?>assets/images/images/images/search.png" />
            </form>            
            </div>
    
            <div class="sidebarmenu">
              <a class="menuitem submenuheader" href="">Items</a>
              <div class="submenu">
                  <ul>
                    <li><a href="">Add Items</li>
                    <li><a href="">Update Items</li>
                    <li><a href="">Delete Items</a></li>
                </ul>
              </div>
                <a class="menuitem submenuheader" href="" >Category</a>
                <div class="submenu">
                    <ul>
                    <li><a href="">Add Category</a></li>
                    <li><a href="">Update Category</a></li>
                    </ul>
                </div>
                <a class="menuitem submenuheader" href="">Add new products</a>
             <!--   <div class="submenu">
                    <ul>
                    <li><a href="">Sidebar submenu</a></li>
                    <li><a href="">Sidebar submenu</a></li>
                    <li><a href="">Sidebar submenu</a></li>
                    <li><a href="">Sidebar submenu</a></li>
                    <li><a href="">Sidebar submenu</a></li>
                    </ul>
                </div>-->
                <a class="menuitem" href="">Items Booked</a>
                
                <a class="menuitem_green" href="">Services Booking</a>
                
                <a class="menuitem_red" href="">Registered Pets</a>
                    
        </div>
            
            
            <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                <div class="sidebar_box_content">
                <h3>User help desk</h3>
                <img src="<?php echo base_url();?>assets/images/images/images/info.png" alt="" title="" class="sidebar_icon_right" />
                <p>call user 9849234324 to provice support services</p>                
                </div>
                <div class="sidebar_box_bottom"></div>
            </div>
            
            <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                <div class="sidebar_box_content">
                <h4>Important notice</h4>
                <img src="<?php echo base_url();?>assets/images/images/images/notice.png" alt="" title="" class="sidebar_icon_right" />
                <p> Update page for service booking!!
</p>                
                </div>
                <div class="sidebar_box_bottom"></div>
            </div>
            
            <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                <div class="sidebar_box_content">
                <h5>Download photos</h5>
                <img src="<?php echo base_url();?>assets/images/images/images/photo.png" alt="" title="" class="sidebar_icon_right" />
                <p>The photos for pet food should be downlaoded and edited</p>                
                </div>
                <div class="sidebar_box_bottom"></div>
            </div>  
            
            <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                <div class="sidebar_box_content">
                <h3>To do List</h3>
                <img src="<?php echo base_url();?>assets/images/images/images/info.png" alt="" title="" class="sidebar_icon_right" />
                <ul>
                <li>Deliver product to baghbazar for prashant</li>
                 <li>Deliver pet assocceries for aman to bhaktapur at Durbar square.</li>
                  <li>Delete deleveried items form the list</li>
                   <li>Add new category for fish foods.</li>
                </ul>                
                </div>
                <div class="sidebar_box_bottom"></div>
            </div>
              
    
    </div>  
    
    <div class="right_content">            
     
     
 
     
     
           
     <h2>Add New Category</h2>
     
         <div class="form">
         <form action="<?php echo base_url();?>Home/addCategory" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="Category">Add Category:</label></dt>
                        <dd><input type="text" name="" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt>&nbsp;</dt>
                    </dl>
                    
                    
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer"> ADMIN PANEL <a href="https://www.facebook.com/citypetservice">City Pet Service</a></div>
    	<div class="right_footer"><img src="images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		
</body>
</html>