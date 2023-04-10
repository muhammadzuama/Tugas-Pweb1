<?php
require_once "function.php";
if(isset($_POST["submit"])){

    if(daftar($_POST)>0){
        echo "<script> alert('User berhasil ditambhakan')</script>";
        header("Location: login.php");
        exit;
    }else {
        echo "<script> alert('User gagal ditambhakan')</script>";
        // echo mysqli_error($connection);
        header("Location: upload.php");
        exit;
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Upload gambar</title>
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
						<form class="signin-form" method="POST" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label class="label" for="name">Upload Foto</label>
                                <input type="file" class="form-control" placeholder="Upload Disini" name="foto" required>
                            </div>			      		
                           
                            <div class="form-group mb-3">
                                <label class="label" for="name">nama</label>
                                <input type="text" class="form-control" placeholder="nama" name="nama" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="alamat">alamat</label>
                            <input type="text" class="form-control" placeholder="alamat" name="alamat" required>
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
