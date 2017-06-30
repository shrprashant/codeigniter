<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Add Item</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style1.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/Ajquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ddaccordion.js"></script>
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
                togglehtml: ["suffix", "<img src='<?php echo base_url(); ?>assets/images/images/images/plus.gif' class='statusicon' />", "<img src='<?php echo base_url(); ?>assets/images/images/images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
                animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
                oninit: function (headers, expandedindices) { //custom code to run when headers have initalized
                    //do nothing
                },
                onopenclose: function (header, index, state, isuseractivated) { //custom code to run whenever a header is opened or closed
                    //do nothing
                }
            })
        </script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.jclock-1.2.0.js" type="text/javascript"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jconfirmaction.jquery.js"></script>
        <script type="text/javascript">

                $(document).ready(function () {
                    $('.ask').jConfirmAction();
                });

        </script>
        <script type="text/javascript">
            $(function ($) {
                $('.jclock').jclock();
            });
        </script>

        <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/niceforms.js"></script>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/css/niceforms-default.css" />

    </head>
    <body>
        <div id="main_container">

            <div class="header">
                <div class="logo"><a href="#"><img src="<?php echo base_url(); ?>assets/images/images/images/logo.gif" alt="" title="" border="0" /></a></div>

                <div class="right_header">Welcome Admin, <a href="#">Visit site</a> | <a href="#" class="messages"> UserGuide</a> | <a href="<?php echo site_url('Home/index') ?>" class="logout">Logout</a></div>
                <div class="jclock"></div>
            </div>

            <div class="main_content">

                <div class="menu">
                    <ul>
                        <li><a class="current" href="">Admin Home</a></li>
                        <li><a href="l">Manage Categories</a>
                            <ul>
                                <li><a href="<?php echo site_url('Home/addCategory'); ?>" title="">Add Category</a></li>
                                <!--     <li><a href="" title="">Update Category</a></li>
                                    <li><a href="" title="">Delete Category</a></li> -->
                            </ul>

                        </li>
                        <li><a href="">Manage Product</a>

                            <ul>
                                <li><a href="<?php echo site_url('Admin/selectCategory'); ?>" title="">Add Product</a></li>
                                <!-- <li><a href="" title="">Update Category</a></li>
                                <li><a href="" title="">Delete Category</a></li>
                                -->
                            </ul>
                        </li>


                        <li><a href="">Manage Users</a>

                            <ul>
                                <li><a href="<?php echo site_url('User/selectUser'); ?>" title="">View User Info</a></li>

                                <li><a href="<?php echo site_url('User/selectUser'); ?>" title="">Delete User Info</a></li>    
                            </ul>
                        </li>


                        <li><a href="login.html">Manage Orders</a>
                            <ul>
                                <li><a href="<?php echo site_url('Admin/selectOrder'); ?>" title="">View User order</a></li>
                            </ul>

                        </li>
                        <li><a href="login.html">Manage Service</a>
                            <ul>

                                <li><a href="<?php echo site_url('Admin/selectBooking'); ?>" title="">View booked Services</a></li>
                            </ul>
                            <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                        </li>

                    </ul>
                </div> 




                <div class="center_content">  



                    <div class="left_content">

                        <div class="sidebar_search">
                            <form>
                                <input type="text" name="" class="search_input" value="search keyword" onclick="this.value = ''" />
                                <input type="image" class="search_submit" src="<?php echo base_url(); ?>assets/images/images/images/search.png" />
                            </form>            
                        </div>

                        <div class="sidebarmenu">
                            <a class="menuitem submenuheader" href="">Items</a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="<?php echo site_url('Admin/selectCategory') ?>">Add Items</li>
                                    <li><a href="<?php echo site_url('Admin/selectProduct') ?>">Update Items</li>
                                    <li><a href="<?php echo site_url('Admin/selectProduct') ?>">Delete Items</a></li>
                                </ul>
                            </div>
                            <a class="menuitem submenuheader" href="" >Category</a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="<?php echo site_url('Home/addCategory'); ?>">Add Category</a></li>

                                </ul>
                            </div>
                            <a class="menuitem submenuheader" href="">Registered Users</a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="<?php echo site_url('User/selectUser') ?>">View Users</a></li>
                                    <li><a href="<?php echo site_url('User/selectUser') ?>">Delete Users</a></li>

                                </ul>
                            </div>
                            <a class="menuitem" href="<?php echo site_url('Admin/selectOrder'); ?>">Items Booked</a>

                            <a class="menuitem_green" href="<?php echo site_url('Admin/selectBooking'); ?>">Services Booking</a>

                            <a class="menuitem_red" href="<?php echo site_url('Admin/selectPetDetails'); ?>">Registered Pets</a>

                        </div>


                        <div class="sidebar_box">
                            <div class="sidebar_box_top"></div>
                            <div class="sidebar_box_content">
                                <h3>User help desk</h3>
                                <img src="<?php echo base_url(); ?>assets/images/images/images/info.png" alt="" title="" class="sidebar_icon_right" />
                                <p>call user 9849234324 to provide support services</p>                
                            </div>
                            <div class="sidebar_box_bottom"></div>
                        </div>

                        <div class="sidebar_box">
                            <div class="sidebar_box_top"></div>
                            <div class="sidebar_box_content">
                                <h4>Important notice</h4>
                                <img src="<?php echo base_url(); ?>assets/images/images/images/notice.png" alt="" title="" class="sidebar_icon_right" />
                                <p> Update page for service booking!!</p>                
                            </div>
                            <div class="sidebar_box_bottom"></div>
                        </div>

                        <div class="sidebar_box">
                            <div class="sidebar_box_top"></div>
                            <div class="sidebar_box_content">
                                <h5>Download photos</h5>
                                <img src="<?php echo base_url(); ?>assets/images/images/images/photo.png" alt="" title="" class="sidebar_icon_right" />
                                <p>The photos for pet food should be downlaoded and edited</p>                
                            </div>
                            <div class="sidebar_box_bottom"></div>
                        </div>  

                        <div class="sidebar_box">
                            <div class="sidebar_box_top"></div>
                            <div class="sidebar_box_content">
                                <h3>To do List</h3>
                                <img src="<?php echo base_url(); ?>assets/images/images/images/info.png" alt="" title="" class="sidebar_icon_right" />
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

    
        
    <h2><strong>Booking'</strong>s Details</h2> 
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Booking ID</th>
            <th scope="col" class="rounded">Pet Name</th>
            <th scope="col" class="rounded">Service</th>
            <th scope="col" class="rounded">Day</th>
            <th scope="col" class="rounded">Date
            <th scope="col" class="rounded">Time</th>
           <th scope="col" class="rounded">Session NO
            <th scope="col" class="rounded">Cost</th>
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
            <td><?php echo $row->bookingid;?></td>
            <td><?php  echo $row->petname;?></td>
            <td><?php  echo $row->service;?></td>
            <td><?php  echo $row->day;?></td>
            <td><?php echo $row->date;?></td>
            <td><?php  echo $row->time;?></td>
            <td><?php  echo $row->sessionno;?></td>
            <td><?php  echo $row->cost;?></td>
            <td> <a href="<?php echo base_url().'Admin/deleteBooking/' . $row->bookingid; ?>"class="ask"> <img src="<?php echo base_url();?>assets/images/images/images/trash.png" alt="delete" title="" border="0" /></a></td>
  
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
        
     
     <h2>&nbsp;</h2>
     <div class="form">
       <form action="" method="post" class="niceform">
       <fieldset>
                     
                     
                    
          </fieldset>
                
       </form>
      </div>  
      
     
     </div>
            
                    
  </div>   
     
     <h2>ADMIN PANEL <a href="https://www.facebook.com/citypetservice">City Pet Service</a></h2>
    </div>
    </div>
    </div>
    <div class="footer">
      <div class="right_footer"><img src="images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
  </div>

</div>		
</body>
</html>