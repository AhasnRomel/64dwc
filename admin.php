<?php require_once "app/autoload.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Admin</title>
</head>
<body>


				
	
<div class="container">
<?php 
	if (isset($_GET['id']) AND $_GET['id'] == 'ok'){
		header('location:login.php');
	}

 ?>	
		<div class="row">
			<div class="card-body">
				<a class="btn btn-danger" href="?id=ok">Log Out</a>
			</div>
		</div>
<div class="row">

<?php 
	if (isset($_POST['add_2'])) {
		$menu = $_POST['menu'];
		$url = $_POST['url_name'];
		$menu_name = $_POST['menu_name'];

		if (empty($menu) || empty($url) || empty($menu_name)) {
			$mass_two= errorMassege('All Fields Are Required');
		}else{
			$sql = "INSERT INTO menu (class_name, url_name, menu_name) VALUES ('$menu','$url','$menu_name')";
			$conn -> query($sql);
			$mass_two= errorMassege('Success', 'success');
	    }
	}

 ?>


		
			<div class="col-6">
				<div class="card-body shadow">
					<form method="POST" action="" >
						<h2 class="text-center text-danger">Add A Menu</h2>
						<?php if (isset($mass_two)){
							echo $mass_two;
						} ?>
						<div class="form-group">
                            <label for="">Class Name</label>
                          	<select name="menu" class="form-control">
	                            <option value="">--Select--</option>
	                            <option value="colour-1">First Menu</option>
	                            <option value="colour-2">Second Menu</option>
	                            <option value="colour-3">Third Menu</option>
	                            <option value="colour-4">Forth Menu</option>
	                            <option value="colour-5">Fifth Menu</option>
	                            <option value="colour-6">Sixth Menu</option>
	                            <option value="colour-7">Seventh Menue</option>
	                            <option value="colour-8">Eight Menu</option>
                        	</select>
                        </div>
                        <div class="form-group">
                            <label for="">URL Name</label>
                            <input name="url_name" class="form-control" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Menu Name</label>
                            <input name="menu_name" class="form-control" type="text" value="">
                        </div>
                        <input class="btn btn-danger" name="add_2"  type="submit" value="Add Menu">
					</form>
				</div>
			</div>
		<?php 
			if (isset($_POST['add_product'])) {
				$product_id = $_POST['product_id'];
				$product_cata = $_POST['product_cata'];
				$product_discription = $_POST['product_discription'];

				$img = $_FILES['product_img']['name'];
				$img_tmp =$_FILES['product_img']['tmp_name'];

				$unic_name = md5(rand().time()) . $img;


				if (empty($product_id) || empty($product_cata) || empty($product_discription)) {
					$mass_four= errorMassege('All Fields Are Required');
				}else{
					$sql = "INSERT INTO products_catagory (product_id, product_cata, product_img, product_discription) VALUES ('$product_id', '$product_cata', '$unic_name', '$product_discription')";
					$conn -> query($sql);
					move_uploaded_file($img_tmp, 'images/catagory/'. $unic_name);
					$mass_four= errorMassege('Success', 'success');
			    }
			}

 ?>
			<div class="col-6">
				<div class="card-body shadow">

					<form method="POST" action="" enctype="multipart/form-data">
						<h3 class="text-center text-danger">Add Product By Catagory</h3>
						<a class="btn btn-danger" href="all.php">All Products</a>
						<?php if (isset($mass_four)){
							echo $mass_four;
						} ?>
						 <div class="form-group">
                            <label for="">Product ID</label>
                            <input name="product_id" class="form-control" type="text" value="">
                        </div>
						<div class="form-group">
                            <label for="">Class Name</label>
                          	<select name="product_cata" class="form-control">
	                            <option value="">--Select--</option>
	                            <option value="Dress">Dress</option>
	                            <option value="Shoos">Shoos</option>
	                            <option value="Computer">Computer</option>
	                            <option value="Electronix">Electronix</option>
	                            <option value="Food">Food</option>
	                            <option value="Cosmetice">Cosmetice</option>
	                            <option value="Gift">Gift</option>
	                            <option value="Others">Others</option>
                        	</select>
                        </div>
                       
                        <div class="form-group">
                            <label for="">Product Images</label>
                            <input name="product_img" class="form-control" type="file" value="">
                        </div>
                         <div class="form-group">
                            <label for="">Product Discription</label>
                            <input name="product_discription" class="form-control" type="text" value="">
                        </div>
                        <input class="btn btn-danger" name="add_product"  type="submit" value="Add Product">
					</form>
				</div>
			</div>


	<?php 
			if (isset($_POST['add'])) {
				$caption = $_POST['caption'];
				$disc = $_POST['disc'];

				$img = $_FILES['image']['name'];
				$img_tmp =$_FILES['image']['tmp_name'];

				$unic_name = md5(rand().time()) . $img;
				
				if (empty($caption) || empty($disc)) {
					$mass_three= errorMassege('All Fields Are Required');
				}else{
					$sql = "INSERT INTO slider (caption, disc, image) VALUES ('$caption', '$disc', '$unic_name')";
					$conn -> query($sql);
					move_uploaded_file($img_tmp, 'images/slider/'. $unic_name);
					$mass_three= errorMassege('Success', 'success');
			    }
	}

 ?>
	
		
			<div class="col-6">
				<div class="card-body shadow">
					<form method="POST" action="" enctype="multipart/form-data">
						<h2 class="text-center text-danger">Add A Slider</h2>
						<?php if (isset($mass_three)) {
							echo $mass_three;
						} ?>
						<div class="form-group">
                        <input name="image" class="form-control" type="file" value="">  
                        </div>
                        <div class="form-group">
                            <label for="">Caption</label>
                            <input name="caption" class="form-control" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Discription</label>
                            <input name="disc" class="form-control" type="text" value="">
                        </div>
                        <input class="btn btn-danger" name="add"  type="submit" value="Add a slider">
					</form>
				</div>
			</div>
	
<?php 

		$sql = "SELECT * FROM social";
		$data = $conn -> query($sql);
		$new_data = $data -> fetch_assoc();
	
		if (isset($_POST['add_w'])){ 
				$email = $_POST['email'];
				$cell = $_POST['cell'];
				$top_head = $_POST['top_head'];
				$twiter = $_POST['twiter'];
				$facebook = $_POST['facebook'];
				$g_plus = $_POST['g_plus'];
				$link_in = $_POST['link_in'];
				$ins_grum = $_POST['ins_grum'];
				$com_slo = $_POST['com_slo'];
				$com_title = $_POST['com_title'];
				$wel_not = $_POST['wel_not'];
				$wel_text = $_POST['wel_text'];
				$cus_speech = $_POST['cus_speech'];
				$name_speech = $_POST['name_speech'];
				$detail_speech = $_POST['detail_speech'];
				$location_name = $_POST['location_name'];
				$location_url = $_POST['location_url'];
				$service = $_POST['service'];
				$serviice_time = $_POST['serviice_time'];

			if (empty($email) || empty($cell) || empty($top_head) || empty($twiter) || empty($facebook) || empty($g_plus) || empty($link_in) || empty($ins_grum) || empty($com_slo) || empty($com_title) || empty($wel_not) || empty($wel_text) || empty($cus_speech) || empty($name_speech) || empty($detail_speech) || empty($location_name) || empty($location_url) || empty($service) || empty($serviice_time)):
				$mass_one= errorMassege('All Fields Are Required');
			else:
				$sql="UPDATE social SET email='$email', cell='$cell', top_heading='$top_head', twiter='$twiter', facebook='$facebook', g_plas='$g_plus', linkedin='$link_in', snapchat='$ins_grum', com_slo= '$com_slo', com_title= '$com_title', wel_not='$wel_not', wel_text='$wel_text', cus_speech='$cus_speech', name_speech='$name_speech', detail_speech='$detail_speech', location_name='$location_name', location_url='$location_url', service='$service', serviice_time='$serviice_time' WHERE id=1";
				$conn -> query($sql);
				$mass_one= errorMassege('Success', 'success');
		    
			endif;
		}
 	?>
		
			<div class="col-6">
				<div class="card-body shadow">

					
					<form method="POST" action="" enctype="multipart/form-data">
						<h3 class="text-center text-danger">Edit Top Heading & Social </h3>
							<?php if (isset($mass_one)) {
								echo $mass_one;
							} 
							
							?>
						<div class="form-group">
                        	<label for="">Email</label>
                            <input name="email" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['email'];}?>"> 
                        </div>
                        <div class="form-group">
                            <label for="">Mobile No.</label>
                            <input name="cell" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['cell'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Logo</label>
                            <input name="logo" class="form-control" type="file" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Top Heading</label>
                            <input name="top_head" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['top_heading'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Twitter Address</label>
                            <input name="twiter" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['twiter'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Facebook Address</label>
                            <input name="facebook" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['facebook'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Google Plus Address</label>
                            <input name="g_plus" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['g_plas'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Linkedin Address</label>
                            <input name="link_in" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['linkedin'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Instragrum Address</label>
                            <input name="ins_grum" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['snapchat'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Companey Slogan</label>
                            <input name="com_slo" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['com_slo'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Companey Title</label>
                            <input name="com_title" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['com_title'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Welcome Note</label>
                            <input name="wel_not" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['wel_not'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Welcome Text</label>
                            <input name="wel_text" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['wel_text'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">For Customer Speach</label>
                            <input name="cus_speech" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['cus_speech'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Name Of Speaker</label>
                            <input name="name_speech" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['name_speech'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Speach Detailes</label>
                            <input name="detail_speech" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['detail_speech'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Location Name</label>
                            <input name="location_name" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['location_name'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Location Address</label>
                            <input name="location_url" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['location_url'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Servie Day</label>
                            <input name="service" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['service'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="">Servie Time</label>
                            <input name="serviice_time" class="form-control" type="text" value="<?php if(isset($_POST['edit'])){ echo $new_data['serviice_time'];}?>">
                        </div>
                    
                        <input class="btn btn-danger" name="add_w"  type="submit" value="Update Top">
                        <input class="btn btn-danger" name="edit"  type="submit" value="Edit">
					</form>
				</div>
			</div>



</div>
</div> 



	<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>