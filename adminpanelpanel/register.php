


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
							<?php
							$connection=mysqli_connect("localhost","root","","admindatabase");
							if($connection==true)
							{
							echo "con true";}
							else
							{
							echo "con false";
							}
							if(!empty($_POST['submit']))
							{
							if(!empty($_POST['firstname']))
							{
							$firstname=mysqli_real_escape_string($connection,$_POST['firstname']);
							}
							else
							{
							echo "enter your first name <br>";
							
							}
							
							if(!empty($_POST['lastname'])){
								$lastname=mysqli_real_escape_string($connection,$_POST['lastname']);
								}
								else
							{
							echo "enter your last name <br>";
							
							}
							if(!empty($_POST['email'])){
							$email=mysqli_real_escape_string($connection,$_POST['email']);
							}
							else{
									echo "enter email <br>";
								
							}
							
						$password=mysqli_real_escape_string($connection,$_POST['password']);
					   $repeat_password=mysqli_real_escape_string($connection,$_POST['repeatpassword']);
												
							if($password==$repeat_password&&!empty($_POST['firstname']&&!empty($_POST['lastname']&&!empty($_POST['email'])))){
								$password=md5($password);
								
							$query="insert into admintable(first_name,last_name,email,password) values('$firstname','$lastname','$email','$password')";
							$result=mysqli_query($connection,$query);
							if($result>0)
							{
							
							header("Location:login.php");
							}
							else
							{
							echo mysqli_error($connection);
							}
							}
							else{
								echo"<br>password didnot match";
							}
							
							}
							?>
                            <form class="user" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name" name="firstname">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name" name="lastname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" 
                                        placeholder="Email Address" name="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                           placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="repeatpassword">
                                    </div>
                                </div>
                                <input href="login.php" type="submit" value="Submit" name="submit" class="btn btn-primary btn-user btn-block">
                                  

								 
                                </input>
                               
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                           
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>