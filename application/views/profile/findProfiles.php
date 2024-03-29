<?php $this->load->view('templates/header');?>
	<!-- container -->
	<section class="showcase">
		<div class="container">
			<div class="pb-2 mt-4 mb-2 border-bottom">
				<h2></h2>
			</div>
			<form action="<?php print site_url();?>profile/actionFindProfiles" class="remember-login-frm" id="remember-login-frm" method="get" accept-charset="utf-8" enctype="multipart/form-data">
				<div class="row justify-content-center">
					<div class="col-12 col-md-8 col-lg-6 pb-5">
						<div class="row"><?php echo validation_errors('<div class="col-12 col-md-12 col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div></div>'); ?></div>
						<!--Form with header-->
						<div class="card border-info rounded-0">
							<div class="card-header p-0">
								<div class="bg-login-page text-white text-center py-2">
									<h3><i class="fa fa-user"></i>Поиск</h3>
								</div>
							</div>
							<div class="card-body p-3">
								<!--Body-->
								<div class="form-group">
									<div class="input-group mb-1">
										<input type="text" class="form-control" id="rfirst_name" name="first_name" placeholder="Имя">
									</div>
								</div>

								<div class="text-center">
									<button type="submit" id="contact-send-a" class="btn btn-info btn-block rounded-0 py-2">Поиск</button>
								</div>
								<br>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
<?php $this->load->view('templates/footer');?>
