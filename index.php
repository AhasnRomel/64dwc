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
	
<!--////////////////////////////////////Container-->
<section id="container" class="index-page">
	<div class="wrap-container zerogrid">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row box-item"><!--Start Box-->
					<h2><?php echo $social_data['com_slo'];?></h2>
					<span><?php echo $social_data['com_title'];?></span>
				</div>
			</div>
		</section>
		<!-----------------content-box-2-------------------->
		<section class="content-box box-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2><?php echo $social_data['wel_not'];?></h2>
						<hr class="line">
						<span><?php echo $social_data['wel_text'];?></span>
					</div>
					<div class="row">

					
						<?php 
						$sql = "SELECT * FROM products_catagory LIMIT 8";
						$data = $conn -> query($sql);
						while ($new_catagory = $data -> fetch_assoc()): 
					 	?>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="box-item">
								<span class="ribbon">Sl No: <?php echo $new_catagory['product_id'];?><b></b></span>
								<img src="images/catagory/<?php echo $new_catagory['product_img'];?>" alt="">
							</br>
							</br>
								<h3 style="color: red; text-align: center;"><?php echo $new_catagory['product_cata'];?></h3>
								<p style="color: black; text-align: center;"><?php echo $new_catagory['product_discription'];?></p>
									<a href="#" class="button button-1">Click To View More</a>
								</div>
							</div>
						</div>
						<?php endwhile; ?>	
									
					</div>
				</div>
			</div>
		</section>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $social_data['cus_speech'];?></h4>
					<div class="row">
						<img src="images/a-1.jpg">
						<h5><?php echo $social_data['name_speech'];?></h5>
						<p><?php echo $social_data['detail_speech'];?></p>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $social_data['location_name'];?></h4>
					<div class="wrap-map"><iframe src="<?php echo $social_data['location_url'];?>" width="100%" height="200" frameborder="0" style="border:0"></iframe></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $social_data['service'];?></h4>
					<p><?php echo $social_data['serviice_time'];?></p>
					<p><span>Need help getting home?</span></br>
					We will call a cab for you!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
			Copyright 2015 - Designed by <a href="#">ZEROTHEME</a>
			<ul class="quick-link f-right">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
			</ul>
		</div>
	</div>
</footer>


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });
	});
	</script>
</div>
</body></html>