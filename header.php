<?php require_once "app/autoload.php" ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>64 District & World Cullection</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet" href="css/menu.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/all.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<?php 
		$sql = "SELECT * FROM social";
		$data = $conn -> query($sql);
		$social_data = $data -> fetch_assoc();
	 ?>
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p><?php echo $social_data['email'];?></p></li>
				<li class="phone"><p><?php echo $social_data['cell'];?></p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="<?php echo $social_data['twiter'];?>"><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?php echo $social_data['facebook'];?>"><i class="fa fa-facebook"></i></a></li>
				<li><a href="<?php echo $social_data['g_plas'];?>"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="<?php echo $social_data['linkedin'];?>"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="<?php echo $social_data['snapchat'];?>"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header> 
		<div class="zerogrid">
			<center><div class="logo"><img src="images/<?php echo $social_data['logo'];?>"></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center"><?php echo $social_data['top_heading'];?></h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>

    <nav class="cmn-tile-nav">
			<ul class="clearfix">
				<?php 
				$sql = "SELECT * FROM menu";
				$data = $conn -> query($sql);
				while ($new_data = $data -> fetch_assoc()): 
			 	?>
				<li class="<?php echo $new_data['class_name'];?>"><a href="<?php echo $new_data['url_name'];?>"><?php echo $new_data['menu_name'];?></a></li>
				<?php endwhile; ?>
			</ul>
	</nav>
	
	<div class="zerogrid">
		<div class="callbacks_container">
			<ul class="rslides" id="slider4">
				<?php 
						$sql = "SELECT * FROM slider";
						$data = $conn -> query($sql);
						while ($new = $data -> fetch_assoc()): 
					 	?>
				<li>
					<img src="images/slider/<?php echo $new['image'];?>" alt="">
					<div class="caption">
						<h2><?php echo $new['caption'];?></h2></br>
						<p><?php echo $new['disc'];?></p>
					</div>
				</li>
				<?php endwhile; ?>	
				
			</ul>
		</div>
	</div>