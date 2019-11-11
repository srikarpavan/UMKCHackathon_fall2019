<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1 style="height=100px width=150px"><a href="index.php"><img src="Images/icon1.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>

        <div>

          <div class="h_btm_bg">
<div class="wrap">
<div class="h_btm">
	<div class="header-para">
		<h4>Making Healthy Food Available to All</h4>		
		<p>Since 1992, The Food Trust has been working to ensure that everyone has access to affordable, nutritious food and information to make healthy decisions.</p>

               <p>The Food Trust's comprehensive approach includes improving food environments and teaching nutrition education in schools; 
                working with corner store owners to increase healthy offerings and helping customers make healthier choices;  
                managing farmers markets in communities that lack access to affordable produce; and encouraging grocery store development in underserved communities.</p>
	</div>  
	
	<div class="clear"></div>
</div>
</div>
</div>
<div class="s_bg">
<div class="wrap">
<div class="main_cont">
 <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
  	    		<li>
  	    	    <img src="Images/S1.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/S2.png" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/S3.jpg"/>
  	    		</li>
  	    		<li>
  	    	    <img src="Images/S4.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/S5.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/S6.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/S7.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/S8.jpg" />
  	    		</li>
          </ul>
        </div>
      </section>
	<div class="ribben">
	   <div class="l-triangle-top"></div>
	   <div class="l-triangle-bottom"></div>
		   <div class="rectangle"></div>
	      <div class="r-triangle-top"></div>
	   <div class="r-triangle-bottom"></div>
	   <div class="clear"></div>
	</div>
<div class="main">
	<div class="content">		
			<h4 class="bold">Food bank:</h4>
			<p>We welcome you to in our WebSite. If you are a donor , We appreciate you <a href="index1.php">signing up</a> online as a Donor.  These programs represent a proven, economically sustainable solution that is bringing fresh food closer to families, providing both job and business ownership opportunities for people of color and promoting equity in the neighborhoods and areas they serve.
Together, we can ensure that all families have equitable access to healthy and affordable foods, curb the epidemic of diet-related disease disproportionately affecting our nation’s most vulnerable citizens and drive economic development in the communities and areas that need it most.
We request donors to update contact details regularly.</p>
	</div>
	<div class="sidebar">
			<h2>Latest News</h2>
			<div class="blog_posts">

    <marquee direction="up" scrolldelay="300"><table >
<tr><td>
                         <div class="blog_desc">
						<div class="blog_heading">
							<span style="font-weight:bold"><b>Support your neighbor with donations to the Greater Lansing Food Bank</b>
<p>I’m consistently amazed by how the Greater Lansing community cares for itself. Whether it’s helping families through tragedy, finding answers to chronic problems or providing basic needs for our neighbors, we always answer the call.</p></span>
							
						 </div>	
                         <br />
	<span style="font-weight:bold"><b>Minot food pantry receives large turkey donation</b>
<p>MINOT, N.D. - A special delivery arrived at The Lord's Cupboard food pantry in Minot Wednesday morning: a truckload filled with hundreds of turkey dinners and all the trimmings.</p></span>
					  </div>
                        </td></tr>
                   
                </table></marquee>  
				 
					 <div class="clear"></div>	
				</div>	
			
			
	</div>
	<div class="clear"></div>
	</div>
</div>
</div>
</div>

        </div>
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved| Design by Team PVM | </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>