<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Log In / Sign Up </title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
	<link rel="stylesheet" href="dist/style.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">

											<?php
											require("connection/config.php");
											session_start();
											
											if(isset($_SESSION["users_name"]))
											{
											   header("location:muziq/index.php");
											}
											
											if(isset($_POST['submit']))
											{
											
												$name = $_POST['uname'];
												$urid = $_POST['pwd'];
											
												$queryy = "SELECT * FROM `users` WHERE users_name = '$name' AND users_password = '$urid'";
												$run = mysqli_query($conn, $queryy);
												$row = mysqli_fetch_assoc($run);
												if(mysqli_num_rows($run)>0)
												{ 
												  if($row["users_role_id"] ==1 )
												  {
													 $_SESSION["users_id"] = $row["users_id"];
													 $_SESSION["users_name"] = $row["users_name"];
													 $_SESSION["users_email"] = $row["users_email"];
													 $_SESSION["users_password"] = $row["users_role_id"];
													 $_SESSION["user_image"] = $row["user_image"];
													//  header("location:../muziq/index.php");
													echo "<script>alert('Admin Login Successfully'); window.location.href = 'index.php'</script>";
											
												  }
													 else
												  {
													$_SESSION["users_id"] = $row["users_id"];
													$_SESSION["users_name"] = $row["users_name"];
													$_SESSION["users_email"] = $row["users_email"];
													$_SESSION["users_password"] = $row["users_role_id"];
													$_SESSION["user_image"] = $row["user_image"];
													// header("location:../muziq/index.php");
													echo "<script>alert('User Login Successfully'); window.location.href = 'index.php'</script>";
											
												  } 
												}
												else
												{
													echo "<p class='text-danger text-center fs-1 mt-3 fw-bold'> Login Denied! </p>";
												}
											}
											?>

											<h4 class="mb-4 pb-3">Log In</h4>
											<form method="post">
												<div class="form-group">
													<input type="text" class="form-style" placeholder="Your Username"
														id="logename" name="uname" autocomplete="off">
													<i class="input-icon uil uil-user"></i>
												</div>
												<div class="form-group mt-2">
													<input type="password" class="form-style"
														placeholder="Your Password" name="pwd" id="logpass"
														autocomplete="off">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<input type="submit" value="submit" name="submit" class="btn mt-4">
												<p class="mb-0 mt-4 text-center"><a href="404.php" class="link">Forgot your
														password?</a></p>

										</div>
									</div>
								</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<?php
 									            require("connection/config.php");

                                                if (isset($_POST['log_submit'])) {
													$log_user = $_POST['logname'];
													$log_mail = $_POST['logemail'];
													$log_pass = $_POST['logpass'];

                                                $check_query = "SELECT * FROM `users` WHERE `users_email` = '$log_mail'";
                                                $check_result = mysqli_query($conn, $check_query);
                                            
                                                if (mysqli_num_rows($check_result) > 0) {
                                                    echo "<script>alert('Email already exists. Please use a different email address.');</script>";
                                                } else {
                                                    $log_queryy = "INSERT INTO `users`(`users_name`, `users_email`, `users_password`, `users_role_id`) 
                                                                   VALUES ('$log_user','$log_mail','$log_pass','4')";

                                                    $log_result = mysqli_query($conn, $log_queryy);
 
                                                    if ($log_result) {
														echo "<script>alert('User Has Been Registered!'); window.location.href = 'form.php'</script>";
													} else {
														echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
													}
												}
											}

?>

											<div class="form-group">
												<input type="text" name="logname" class="form-style"
													placeholder="Your Full Name" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>
											<div class="form-group mt-2">
												<input type="email" name="logemail" class="form-style"
													placeholder="Your Email" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" name="logpass" class="form-style"
													placeholder="Your Password" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>

											<button type="submit" name="log_submit" class="btn mt-4">Submit</button>
											</form>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- partial -->
	<script src="dist/script.js"></script>

</body>

</html>