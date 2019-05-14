<!DOCTYPE html>
<html lang="en">


<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GoThere</title>

        <!-- All Plugins Css -->
        <link href="assets/plugins/css/plugins.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
    </head>

    <body>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">

            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <div class="topbar" id="top">
                <div class="header light">
                    <div class="container po-relative">
                        <nav class="navbar navbar-expand-lg header-nav-bar">
                            <a href="/" class="navbar-brand"><strong>GO<span style="color:orange;">THERE</span></strong></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-align-right"></span></button>
                            <div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="navigation">
                                <ul class="navbar-nav ml-auto">

                                    <li class="nav-item"><a class="nav-link" href="blogs.html">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blogs.html">Help</a></li>
									<li class="nav-item"><a class="nav-link" href="blogs.html">Blogs</a></li>

								</ul>

								<!-- <div class="act-buttons">
									<a href="javascript:void(0)" class="login" data-toggle="modal" data-target="#signin"><i class="fa fa-sign-in pr-2"></i>Login</a>
									<a class="btn theme-btn font-14" href="add-listing.html"><i class="ti-plus pr-2"></i>Add Listing</a>
								</div> -->

							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->


			@yield('content')

			<div class="clearfix"></div>
			<!-- ============================ Sign up End ================================== -->

			<!-- ============================ Footer Start ================================== -->
			<footer class="image-bg light-footer" style="background:#ffffff url(assets/img/trans-banner-2.png) no-repeat">
				<div>
					<div class="container">
						<div class="row">

							<div class="col-lg-4 col-md-4">
								<div class="footer-widget">
									<aside id="media_image-2" class="widget widget_media_image">
										<a href="index.html">
											<strong>GO<span style="color:orange;">THERE</span></strong>
										</a>
									</aside>
									<aside id="text-2" class="mt-1 widget widget_text">
										<div class="textwidget"><p class="mg-bottom-0 disable-color">© 2019 GOTHERE. Designd By <a href="https://e3tech.com.ng/">E3 technologies</a><br> All Rights Reserved</p>
										</div>
									</aside>
								</div>
							</div>

							<div class="col-lg-8 col-md-8">
								<div class="row">

									<div class="col-lg-4 col-md-4">
										<div class="footer-widget">
											<h4 class="widget-title">Useful Category</h4>
											<ul class="footer-menu">
												<li><a href="#">Cafe & Restaurant</a></li>
												<li><a href="#">Business & Services</a></li>
												<li><a href="#">Medical</a></li>
												<li><a href="#">Education</a></li>
												<li><a href="error-page.html">Error page</a></li>
											</ul>
										</div>
									</div>

									<div class="col-lg-4 col-md-4">
										<div class="footer-widget">
											<h4 class="widget-title">Useful links</h4>
											<ul class="footer-menu">
												<li><a href="#">Digital Marketing</a></li>
												<li><a href="#">Business & Corporate</a></li>
												<li><a href="#">Landing Page</a></li>
												<li><a href="#">Hire & Dedicate</a></li>
												<li><a href="#">Software & App</a></li>
											</ul>
										</div>
									</div>

									<div class="col-lg-4 col-md-4">
										<div class="footer-widget">
											<h4 class="widget-title">Useful links</h4>
											<p>7744 North Park Place<br>
												San Francisco, CA 714258</p>
												<p>support@finding.com</p>
												<p>777-444-2222</p>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="container">
						<div class="row">

							<div class="col-lg-6 col-md-6">
								<ul class="footer-bottom-social">
									<li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
									<li><a href="#"><i class="fa fa-google-plus">Google+</i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i>Twiiter</a></li>
									<li><a href="#"><i class="fa fa-instagram"></i>Instagra</a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i>LinkedIn</a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->

			<!-- Sign Up Window Code -->
			<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
			<div class="modal-dialog">

				<div class="modal-content" id="myModalLabel1">
					<div class="modal-header">
						<h5 class="modal-title"><i class="ti-unlock"></i>Creat a Account</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <i class="ti-close"></i>
						</button>
					</div>
					<div class="modal-body">

						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
							<li class="nav-item active">
								<a class="nav-link" data-toggle="tab" href="#employer" role="tab">
								<i class="ti-user"></i> Sign In</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#candidate" role="tab">
								<i class="ti-user"></i> Sign Up</a>
							</li>
						</ul>
						<!-- Nav tabs -->

						<!-- Tab panels -->
						<div class="tab-content">

							<!-- SignIn-->
							<div class="tab-pane fade in show active" id="employer" role="tabpanel">
								<form>

									<div class="form-group">
										<label>User Name</label>
										<input type="text" class="form-control" placeholder="User Name">
									</div>

									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="*********">
									</div>

									<div class="form-group">
										<span class="c-box-checkbox">
											<input id="rmp-3" class="checkbox-custom" name="rmp-3" type="checkbox">
											<label for="rmp-3" class="checkbox-custom-label">Remember Me</label>
										</span>
										<a href="#" title="Forget" class="float-right">Forgot Password?</a>
									</div>
									<div class="form-group text-center">
										<button type="button" class="btn theme-btn full-width btn-m">LogIn </button>
									</div>

								</form>

							</div>
							<!--/.Panel 1-->

							<!-- SignUp Panel -->
							<div class="tab-pane fade" id="candidate" role="tabpanel">
								<form>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" class="form-control" placeholder="First Name">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" class="form-control" placeholder="Last Name">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<label>User Name</label>
										<input type="text" class="form-control" placeholder="User Name">
									</div>

									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="*********">
									</div>

									<div class="form-group text-center">
										<button type="button" class="btn theme-btn full-width btn-m">Register</button>
									</div>

								</form>

								<div class="log-option"><span>OR</span></div>

								<div class="row mrg-bot-20">
									<div class="col-md-6">
										<a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>SignUp With Facebook</a>
									</div>
									<div class="col-md-6">
										<a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>SignUp With Google+</a>
									</div>
								</div>

							</div>
							<!--/.Panel 2-->

						</div>
						<!-- Tab panels -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Sign Up Window -->


		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/plugins/js/jquery.min.js"></script>
		<script src="assets/plugins/js/jquery-ui.min.js"></script>
		<script src="assets/plugins/js/jquery.fancybox.min.js"></script>
		<script src="assets/plugins/js/aos.js"></script>
		<script src="assets/plugins/js/popper.min.js"></script>
		<script src="assets/plugins/js/bootstrap.min.js"></script>
		<script src="assets/plugins/js/owl.carousel.min.js"></script>
		<script src="assets/plugins/js/jquery-rating.js"></script>
		<script src="assets/plugins/js/slick.js"></script>
		<script src="assets/plugins/js/imagesloaded.js"></script>
		<script src="assets/plugins/js/isotope.min.js"></script>
		<script src="assets/plugins/js/select2.min.js"></script>
		<script src="assets/plugins/js/bootstrap-slider.js"></script>
		<script src="assets/plugins/js/datedropper.min.js"></script>
		<script src="assets/plugins/js/dropzone.js"></script>

		<script src="assets/plugins/js/placeholders.min.js"></script>
		<script src="assets/plugins/js/timedropper.js"></script>

		<script src="http://maps.google.com/maps/api/js?key="></script>
		<script src="assets/plugins/js/map_infobox.js"></script>
		<script src="assets/plugins/js/markerclusterer.js"></script>
		<script src="assets/js/custom-maps.js"></script>
		 <script src="assets/js/rotate.js" type="text/javascript"></script>

		<!-- Custom js -->
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>
</html>
