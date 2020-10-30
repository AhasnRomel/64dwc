
<?php require_once "app/autoload.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Pannel</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>



<?php
        if (isset($_POST['submit'])) {
            $eu = $_POST['ue'];
            $pass = $_POST['pass'];


            if (empty($eu) || empty($pass)) {
                $mass_two= errorMassege('All Fields Are Required');
            }else{
                $sql = "SELECT * FROM login_user WHERE cell='$eu' || email='$eu'";
                $data = $conn -> query($sql);
                $login_user_data = $data->fetch_assoc();
                
                $user_data = $data -> num_rows;

                if ($user_data > 0) {
                	if ($pass == $login_user_data['pass']) {
                		header("location:admin.php");
                	}else{

                		$mass_two= errorMassege('Wrong Password !');
                	}
                	
                }else{
                	$mass_two= errorMassege('Invalide User Name Or Password !');
                }
            }
        }
?>
	
	<div class="row">
		<div class="wrap">
			<div class="card shadow">
				<div class="card-body">
					<a class="btn btn-primary" href="index.php">Return Web Page</a>
				</div>
				<div class="card-body">
						<h4>Go To Admin Pannel</h4>
					<?php if(isset($mass_two)){
					    echo $mass_two;
                    }
                    ?>
				 		<form action="" method="POST">
		                	<div class="form-group">
		                   		<label class="" for="">Username / Email</label>
		                   		<input name="ue" class="form-control" type="text">
		                	</div>
		                	<div class="form-group">
		                   		<label class="" for="">Password</label>
		                   		<input name="pass" class="form-control" type="password">
		                	</div>
		                   	<input name="submit" class="btn btn-primary" type ="submit" value ="Login">
					</form>
			  	</div>
		  	</div>
	  </div>
	</div>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html> 