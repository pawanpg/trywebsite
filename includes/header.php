<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<!--
	ucorpora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	https://www.freshdesignweb.com/ucorpora/
-->
<head>
	<!-- Basic Meta Tags -->
  <meta charset="utf-8">
  <title>Ucorpora Demo</title>
	<meta name="description" content="ucorpora demo - Free Business Corporate HTML Template">
	<meta name="keywords" content="ucorpora, ucorpora demo, free, template, corporate, clean, modern, bootstrap, creative, design">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <![endif]--> 

  <!-- Favicon -->
  <link href="<?php echo UURL;?>img/favicon.ico" rel="icon" type="image/png">

  <!-- Styles -->
  <link href="<?php echo UURL;?>css/styles.css" rel="stylesheet">
  <link href="<?php echo UURL;?>css/bootstrap-override.css" rel="stylesheet">

  <!-- Font Avesome Styles -->
  <link href="<?php echo UURL;?>css/font-awesome/font-awesome.css" rel="stylesheet">
	<!--[if IE 7]>
		<link href="<?php echo UURL;?>css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->

  <!-- FlexSlider Style -->
  <link rel="stylesheet" href="<?php echo UURL;?>css/flexslider.css" type="text/css" media="screen">

	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="<?php echo UURL;?>http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]--> 
  
  <?php if($pagetitle == 'Solutions') { ?>

  <link rel="stylesheet" href="<?php echo UURL;?>css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo UURL;?>css/style.css" type="text/css" />
    
    
	<link rel="stylesheet" media="screen" href="<?php echo UURL;?>css/responsive-leyouts.css" type="text/css" />
  <?php } ?> 
</head>       
<body>
<!-- Header -->
  <header id="header">
    <div class="container">
      <div class="row t-container">
      <!-- Logo -->
        <div class="span3">
          <div class="logo">
            <div class="two_one">
              <!-- <a href="home"><img src="<?php echo UURL;?>img/logo.png" ></a> -->
            </div>
          </div>        
        </div>

        <div class="span9">
          <div class="row space60"></div>
            <nav id="nav" role="navigation">
              <a href="#nav" title="Show navigation">Show navigation</a>
	            <a href="#" title="Hide navigation">Hide navigation</a>
	            <ul class="clearfix">
                <li class="active"><a href="<?php echo URL;?>home" title="">Home</a></li>
                <li><a href="<?php echo URL;?>service" title="">Services</a></li>  
                <li><a href="<?php echo URL;?>solutions" title="">Solution</a></li>           
                
                <li><a href="<?php echo URL;?>blog" title="">Blog</a></li>
                <li><a href="<?php echo URL;?>gallery" title=""><span>Features</span></a>
                  <ul> <!-- Submenu -->
                          <li><a href="<?php echo URL;?>gallery" title="">Gallery</a></li>  
                          <li><a href="<?php echo URL;?>aboutus" title="">About Us</a></li>  
                          <li><a href="<?php echo URL;?>contact" title="">Contact</a></li>
                  </ul> <!-- End Submenu -->      
                </li>
              </ul>
            </nav>
          </div> 
        </div> 
      <?php if($pagetitle == "Home") { ?>
        <div class="row space40"></div>
          <div class="slider1 flexslider">  <!--  Slider -->
            <ul class="slides">
              <li>
    	    	    <img src="<?php echo UURL;?>img/slider/1.jpg" alt="">
    	    		</li>
    	    		<li>
    	    	    <img src="<?php echo UURL;?>img/slider/2.jpg" alt="">
    	    		</li>
    	    		<li>
    	    	    <img src="<?php echo UURL;?>img/slider/3.jpg" alt="">
    	    		</li>
                    <li>
    	    	    <img src="<?php echo UURL;?>img/slider/4.jpg" alt="">
    	    		</li>
            </ul>
      </div> <?php  } ?><!--  Slider End -->
  </div> 
</header>
  <!-- Header End -->

  <!-- Titlebar
================================================== -->
<?php if($pagetitle != "Home") { ?>
<section id="titlebar">
<!--	 Container -->
	<div class="container">
	
		 <div class="eight columns">
			<h3 class="left"><?php echo $pagetitle;?></h3>
		</div>
		
		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><?php echo $breadcrumb;?></li> 
				</ul>
			</nav>
		</div>

	</div>
	<!--	 Container / End -->
      </section> <?php } ?>

  <!-- Content -->
  <div id="content">
    <div class="container">