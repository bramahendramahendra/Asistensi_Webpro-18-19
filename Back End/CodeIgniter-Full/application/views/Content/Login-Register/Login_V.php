<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material" action="<?php echo site_url('Welcome_C/Process_Login'); ?>" method="post">
						<div class="text-center">
							<img src="<?php echo base_url('assets/images/logo-blue.png'); ?>" alt="logo">
						</div>
						<h3 class="text-center txt-primary">
							Sign In to your account
						</h3>
						<div class="md-input-wrapper">
							<input type="email" class="md-form-control" name="email" />
							<label>Email</label>
						</div>
						<div class="md-input-wrapper">
							<input type="password" class="md-form-control" name="password"/>
							<label>Password</label>
						</div>
						<div class="row">
							<div class="col-sm-6 col-xs-12">
							<div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
								<label class="input-checkbox checkbox-primary">
									<input type="checkbox" id="checkbox">
									<span class="checkbox"></span>
								</label>
								<div class="captions">Remember Me</div>

							</div>
								</div>
							<div class="col-sm-6 col-xs-12 forgot-phone text-right">
								<a href="forgot-password.html" class="text-right f-w-600"> Forget Password?</a>
								</div>
						</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
							</div>
						</div>
						<!-- <div class="card-footer"> -->
						<div class="col-sm-12 col-xs-12 text-center">
							<span class="text-muted">Don't have an account?</span>
							<a href="<?php echo site_url('Welcome_C/Register'); ?>" class="f-w-600 p-l-5">Sign up Now</a>
						</div>

						<!-- </div> -->
					</form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>

