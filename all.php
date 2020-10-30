<?php include_once "header.php" ?>
<!-- Favicon -->
        
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Show All Products</h4>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table class="datatable table table-stripped">
											<thead>
												<tr>
													<th>Id</th>
													<th>Catagory</th>
													<th>Detailes</th>
													<th>Upload Time</th>
													<th>Status</th>
													<th>Images</th>
													
												</tr>
											</thead>
											<tbody>
													<?php 
													$sql = "SELECT * FROM products_catagory";
													$data = $conn -> query($sql);
													$i=1;
													while ($new_catagory = $data -> fetch_assoc()): 
												 	?>					
												<tr>
													<td><?php echo $i; $i++;?></td>
													<td><?php echo $new_catagory['product_cata'];?></td>
													<td><?php echo $new_catagory['product_discription'];?></td>
													<td><?php echo $new_catagory['created_at'];?></td>
													<td>$000</td>
													<td><img style="width: 50px; height: 50px;" src="images/catagory/<?php echo $new_catagory['product_img'];?>" alt=""></td>
													
												</tr>

												<?php endwhile; ?>

												
											</tbody>
										</table>
										<a class="btn btn-primary" href="admin.php">Add Products</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			
				
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
			Copyright 2015 - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
			<ul class="quick-link f-right">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
			</ul>
		</div>
	</div>
</footer>


	<!-- js -->
	<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
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
</body>
</html>