<section class="login common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">
				<div class="col-sm-12">
					<div class="login-card card-block bg-white">
						<form method="post" class="md-float-material" action="<?php echo base_url('Welcome_C/Process_Register'); ?>">
							<div class="text-center">
								<img src="<?php echo base_url('assets/images/logo-blue.png'); ?>" alt="logo">
							</div>
							<h3 class="text-center txt-primary">Create an account </h3>
							<div class="row">
								<div class="col-md-6">
										<div class="md-input-wrapper">
											<input type="text" class="md-form-control" name="first_name" required="">
											<label>First Name</label>
										</div>
								</div>
								<div class="col-md-6">
										<div class="md-input-wrapper">
											<input type="text" class="md-form-control" name="last_name" required="">
											<label>Last Name</label>
										</div>
								</div>
							</div>
								<div class="md-input-wrapper">
									<input type="email" class="md-form-control" name="email" required="">
									<label>Email Address</label>
								</div>
								<div class="md-input-wrapper">
									<input type="password" class="md-form-control" name="password" required="">
									<label>Password</label>
								</div>
								<div class="md-input-wrapper">
									<input type="password" class="md-form-control" name="confirm_password" required="">
									<label>Confirm Password</label>
								</div>

							<div class="rkmd-checkbox checkbox-rotate checkbox-ripple b-none m-b-20">
								<label class="input-checkbox checkbox-primary">
									<input type="checkbox" id="checkbox">
									<span class="checkbox"></span>
								</label>
								<div class="captions">Remember Me</div>
							</div>
							<div class="col-xs-10 offset-xs-1">
							<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light m-b-20">Sign up
							</button>
							</div>
								<div class="row">
									<div class="col-xs-12 text-center">
										<span class="text-muted">Already have an account?</span>
										<a href="login1.html" class="f-w-600 p-l-5"> Sign In Here</a>

									</div>
								</div>
						</form>
						<!-- end of form -->
					</div>
					<!-- end of login-card -->
				</div>
				<!-- end of col-sm-12 -->
			</div>
			<!-- end of row-->
		</div>
		<!-- end of container-fluid -->
</section>

