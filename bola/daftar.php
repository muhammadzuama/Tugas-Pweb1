<?php
require_once "function.php";
if(isset($_POST["submit"])){
    if(register($_POST)>0){
        echo "<script> alert('User berhasil ditambhakan')</script>";
        header("Location: login.php");
        exit;
    }else {
        echo mysqli_error($connection);
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login.css">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(gambar.svg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Register</h3>
			      		</div>
			      	</div>
						<form class="signin-form" method="POST">
                            <div class="form-group mb-3">
                                <label class="label" for="name">Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="username" required>
                            </div>			      		
                            <div class="form-group mb-3">
                                <div class="option">
                                    <label for="country">Pilih </label>
                                    <select name="country" id="country" required>
                                            <option>None</option>
                                            <?php 
                                            $query=mysqli_query($connection,"SELECT * FROM country") or die(mysqli_error($connection));
                                            while($data_negara=mysqli_fetch_array($query)){
                                                echo "<option value =$data_negara[Country_id]>$data_negara[Country_name]</option>";
                                            }
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="name">Email</label>
                                <input type="text" class="form-control" placeholder="Username" name="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password2" required>
                            </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="submit">Register</button>
                        </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
