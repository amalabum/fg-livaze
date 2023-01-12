
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Plus Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="Views/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="Views/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="Views/admin/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="Views/admin/assets/vendors/jquery-bar-rating/css-stars.css" />
  <link rel="stylesheet" href="Views/admin/assets/vendors/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->

  <link rel="stylesheet" href="Views/admin/assets/css/demo_1/style.css" />
  <!-- End layout styles -->
  <link rel="shortcut icon" href="Views/admin/assets/images/favicon.png" />
</head><body style="padding-top:100px;">
  <div class="row justify-content-center br-40 mt-5" >
    <div class="col-md-4 grid-margin stretch-card ">
                <div class="card">
                  <div class="card-body">
<section class="" style="margin-top:10px;">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border" style="border-radius:10px;">
						<div class="box-body" >
                                     

							<h4 style="text-align:center;">
                            <img src="Views/admin/mydash/logo/lms.png" alt="profile" width="130px" /> <br> <br>
                            
                            Admin panel</h4>
                            
							<form method="post">
								<div class="form-group">
									<label>Email</label>
									<input type="mail" name="email" <?php if(isset($_POST['email'])){ $myvalue=$_POST['email'];?>value="<?php echo $myvalue ;} ?>" class="form-control" placeholder="moi@gmail.com">
								</div>
								<div class="form-group">
									<label class="fw">Password
										
									</label>
									<input type="password" name="password" class="form-control" placeholder="************************">
								</div>
								<div class="form-group text-right">
                                   <?php require "Views/admin/mydash/cores/auth.php" ?>
									<button name="connection" class="btn btn-primary btn-block">Se connecter</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted pull-right" style="font-size:13px;">Vous n'avez pas un compte ?</span> <br>
                                     <span class="text-muted pull-right" style="font-size:13px;"> Veuillez Contacter l'administrateur du systeme</span>
								</div>
					</form>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>
</div></div></div>
 <?php require "Views/admin/mydash/includes/js.php" ?>