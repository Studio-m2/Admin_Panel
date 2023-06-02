<?php
session_start();
	$connection=mysqli_connect("localhost","root","","admindatabase");
						



?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
         <?php include'sidebar.php' ; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
				
				
				
				
                <?php 
			
				include'topbar.php' ;?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Student</h1>
					
<div class="container rounded bg-white mt-5">
<?php
	$connection=mysqli_connect("localhost","root","","admindatabase");
					if(!empty($_GET['edit'])){
						
						$edit=$_GET['edit'];
						$queryy="select* FROM addstudent WHERE id='$edit'";
					$res=mysqli_query($connection,$queryy);
					while($row=mysqli_fetch_assoc($res))
					{
						$first_name=$row['first_name'];
						$last_name=$row['last_name'];
						$email=$row['email'];
						$phone=$row['phone'];
						$degree=$row['degree'];
						$fee=$row['fee'];
					}
						
					}
					
					?>



<?php
							$connection=mysqli_connect("localhost","root","","admindatabase");
							
							if(!empty($_POST['submit']))
							{
							
							$firstname=mysqli_real_escape_string($connection,$_POST['firstname']);
							$lastname=mysqli_real_escape_string($connection,$_POST['lastname']);
							$email=mysqli_real_escape_string($connection,$_POST['email']);
							$phone=mysqli_real_escape_string($connection,$_POST['phone']);
					        $degree=mysqli_real_escape_string($connection,$_POST['degree']);
							$fee=mysqli_real_escape_string($connection,$_POST['fee']);	
						
								
							$quer="update addstudent set first_name='$firstname',last_name='$lastname',email='$email',phone='$phone',degree='$degree',fee='$fee' where id=".$_GET['edit'];
							//echo $quer;
							$result=mysqli_query($connection,$quer);
						
							if($result)
							{
							
							echo "<br>  successfully updated";
							}
							else
							{
							echo mysqli_error($connection);
							}
							}
							
							?>











<form method="post">
        <div class="row">
           
            <div class="col-md-8">
                <div class="p-3 py-5">
                   
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="first name" name="firstname" value="<?php echo $first_name;?>"></div>
                        <div class="col-md-6"><input type="text" class="form-control"  placeholder="last name"  name="lastname" value="<?php echo $last_name;?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="email"  name="email" value="<?php echo $email;?>"></div>
                        <div class="col-md-6"><input type="text" class="form-control"  placeholder="phone no." name="phone" value="<?php echo $phone;?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="degree" name="degree" value="<?php echo $degree;?>"></div>
                        <div class="col-md-6"><input type="text" class="form-control"  placeholder="fee" name="fee" value="<?php echo $fee;?>"></div>
                    </div>
                   
                    <div class="mt-5 text-right"><input class="btn btn-primary profile-button" type="submit" value="Save Profile" name="submit"></div>
                </div>
            </div>
        </div>
		</form>
    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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