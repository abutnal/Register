<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register Form</title>
	<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?= base_url()?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		<?php require_once('jscript.php'); ?>
	</script>
	<style>
	.title{
		font-size:16px;
		margin-left: 10px;
	}
	.badge{
		font-size: 18px;
		border-radius: 50%;
		width:25px;
		height: 25px;
		margin-top: -4px;
		background: #2196f3 !important;
		color:#fff !important;
	}
	body{
		background: #ccc;
	}
</style>
</head>
<body>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div id="message"></div>
				<form action="<?php echo base_url('agent/create');?>" id="registerForm" method="post">
					<!-- Personal Info -->
					<div class="panel panel-default">
						<div class="panel-heading"><span class="badge">1</span> <span class="title">Personal Info</span></div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group"><label for="">First Name</label><input type="text" id="input-fname" name="fname" placeholder="Enter first name" class="form-control">
										<div class="error"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group"><label for="">Last Name</label><input type="text" id="input-lname" name="lname" placeholder="Enter last name" class="form-control">
										<div class="error"></div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group"><label for="">Phone</label><input type="text" id="input-phone" name="phone" placeholder="Enter phone number" class="form-control">
										<div class="error"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group"><label for="">Email</label><input type="text" id="input-email" id="input-" " name="email" placeholder="Enter email id" class="form-control">
										<div class="error"></div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- End Personal Info -->

					<!-- Company Details -->
					<div class="panel panel-default">
						<div class="panel-heading"><span class="badge">2</span> <span class="title">Company Details</span></div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group"><label for="">Company Name</label><input type="text" id="input-company_name" name="company_name" placeholder="Enter company name" class="form-control">
										<div class="error" class="error"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group"><label for="">PAN Number</label><input type="text" id="input-pan_number" name="pan_number" placeholder="Enter PAN number" class="form-control">
										<div class="error"></div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group"><label for="">PAN Card Holder Name</label><input type="text" id="input-pan_holder_name" name="pan_holder_name" placeholder="Enter PAN holder name" class="form-control">
										<div class="error"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group"><label for="">GST Number</label><input type="text" id="input-gst_number" name="gst_number" placeholder="Enter GST Number" class="form-control"><div class="error"></div></div>
								</div>

								<div class="col-md-6">
									<div class="form-group"><label for="">Address</label><input type="text" id="input-address" name="address" placeholder="Enter address" class="form-control"><div class="error"></div></div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Country</label>
										<div id="country_list"></div>
										<div class="error"></div></div>
									</div>

									<div class="col-md-6">
										<div class="form-group"><label for="">City</label>
											<div id="city_list">
												<select name="city" class="form-control">
													<option value="">Select City</option>
												</select>
											</div>
											<div class="error"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group"><label for="">PIN</label><input type="text" id="input-pin" name="pin" placeholder="Enter PIN Number" class="form-control"><div class="error"></div></div>
									</div>

									<div class="col-md-6">
										<div class="form-group"><label for="">Office Phone</label><input type="text" id="input-office_phone" name="office_phone" placeholder="Enter Office Phone number" class="form-control"><div class="error"></div></div>
									</div>
									<div class="col-md-6">
										<div class="form-group"><label for="">Upload Image</label><input type="file" id="input-photo" name="photo"  class="form-control"><div class="error"></div></div>
									</div>

								</div>
							</div>
						</div>
						<!-- End company Details -->
						<!-- Login Info -->
						<div class="panel panel-default">
							<div class="panel-heading"><span class="badge">3</span> <span class="title">Login Info</span></div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-4 ">
										<div class="form-group"><label for="">User Name</label><input type="text" id="input-username" name="username" placeholder="Enter username" class="form-control"><div class="error"></div></div>
									</div>

									<div class="col-md-4 ">
										<div class="form-group"><label for="">Password</label><input type="text" id="input-password" name="password" placeholder="Enter last name" class="form-control"><div class="error"></div></div>
									</div>

									<div class="col-md-4">
										<div class="form-group"><label for="">Confirm Password</label><input type="text" id="input-confirmpass" name="confirmpass" placeholder="Enter phone number" class="form-control"><div class="error"></div></div>
									</div>
									<?php 
									$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
									$date = $date->format('d-m-Y h:i:s');
									?>
									<input type="hidden" name="created_date" value="<?php echo $date; ?>">
								</div>
							</div>
						</div>
						<!-- End Login Info -->



						<div class="col-md-6 form-horizontal">
							<div class="form-group">
								<label for="input-tandc"><input type="checkbox" name="tandc" id="input-tandc" > I accept the agency terms and conditinos</label><div class="error"></div>
							</div>
						</div>
						<div class="col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-lg pull-right"></div>	
					</form>

				</div>
			</div>
		</div>
		
		<br>
		<br>
	</body>
	</html>