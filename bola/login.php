<?php
session_start();
require_once "config.php";
$connection=getconnection();
if(isset($_POST["login"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
	$admin=[
		"username"=>"admin",
		"password"=>"admin"
	];
	

    $result= mysqli_query($connection,"SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($result)===1){
        $row= mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["user_id"];

            if(isset($_POST["remember"])){
                setcookie('id',$row['user_id'],time() + 60);
                setcookie('key',hash('sha256',$row['username']));
            }
            header("Location: dashboard.php");
            exit;
        }
		
    }
	elseif($username==$admin["username"]){
		if($password==$admin["password"]){
			$_SESSION["login"]=true;
			header("Location: dashboardadmin.php");
			exit;
		}
	}
    $error= true;?>
	<script>alert("password atau username salah");</script>
	<?php
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login Form</title>
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
			      			<h3 class="mb-4">Login</h3>
			      		</div>
							<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="https://www.instagram.com/m_zuama/" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
										<a href="https://www.facebook.com/zuam.zuam.52" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
									</p>
							</div>
			      	</div>
					<form action="" class="signin-form" method="POST">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" placeholder="Username" name="username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="Password" name="password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" name="login">Sign In</button>
		            </div>
		          </form>
		          <p class="text-center">Belum Daftar? <a data-toggle="tab" href="daftar.php">Sign Up</a></p>
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
