<?php $this->load->view('templates/header');?>
<style>
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		max-width: 300px;
		margin: auto;
		text-align: center;
		font-family: arial;
	}
	.title {
		color: grey;
		font-size: 18px;
	}
	.button {
		border: none;
		outline: 0;
		display: inline-block;
		padding: 8px;
		color: white;
		background-color: #3498DB;
		text-align: center;
		cursor: pointer;
		width: 100%;
		font-size: 18px;
	}
	button:hover, a:hover {
		opacity: 0.9;
	}
</style>
<!-- container -->
<section class="showcase">
	<div class="container">
		<div class="pb-2 mt-4 mb-2 border-bottom">
			<h2></h2>
		</div>
		<span id="success-msg"></span>
		<form action="<?php print site_url();?>auth/doLogin" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<div class="card">
				<img src="<?php print HTTP_IMAGE_PATH;?>blank-profile.png" alt="John" style="height:120px; width:100%">
				<br>
				<h3><?php print $title; ?></h3>
				<?php if($user_not_found == 0) { ?>
					<p class="title"><?php print $first_name; ?></p>
					<p class="title"><?php print $last_name; ?></p>
					<p class="title"><?php print $address; ?></p>
					<p class="title"><?php print $dob; ?></p>
					<p><?php print $email; ?></p>
				<?php } ?>
				<div style="margin: 10px 0;">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-linkedin"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</form>
	</div>
</section>
<?php $this->load->view('templates/footer');?>
