@extends('layouts.admin')

@section('content')

<!-- Dashboard Content -->
<div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">

	<div class="alert alert-success">
		Congratulation! your listing has been approved. <a href="listing-detail.html" class="alert-link">Click Here </a> to View.
	</div>

	<!-- row -->
	<div class="row">

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="widget simple-widget">
				<div class="rwidget-caption info">
					<div class="row">
						<div class="col-4 pr-0">
							<i class="text-info icon ti-list"></i>
						</div>
						<div class="col-8 pl-0">
							<div class="widget-detail">
								<h3>372</h3>
								<span>Published</span>
							</div>
						</div>
						<div class="col-12">
							<div class="widget-line">
								<span style="width:80%;" class="bg-info widget-horigental-line"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="widget simple-widget">
				<div class="widget-caption danger">
					<div class="row">
						<div class="col-4 pr-0">
							<i class="text-danger icon ti-reload"></i>
						</div>
						<div class="col-8 pl-0">
							<div class="widget-detail">
								<h3>08</h3>
								<span>In review</span>
							</div>
						</div>
						<div class="col-12">
							<div class="widget-line">
								<span style="width:50%;" class="bg-danger widget-horigental-line"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="widget simple-widget">
				<div class="widget-caption warning">
					<div class="row">
						<div class="col-4 pr-0">
							<i class="text-success icon ti-stats-down"></i>
						</div>
						<div class="col-8 pl-0">
							<div class="widget-detail">
								<h3>18</h3>
								<span>Expired</span>
							</div>
						</div>
						<div class="col-12">
							<div class="widget-line">
								<span style="width:60%;" class="bg-success widget-horigental-line"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="widget simple-widget">
				<div class="widget-caption purple">
					<div class="row">
						<div class="col-4 pr-0">
							<i class="text-purple icon ti-money"></i>
						</div>
						<div class="col-8 pl-0">
							<div class="widget-detail">
								<h3>4770</h3>
								<span>Paid List</span>
							</div>
						</div>
						<div class="col-12">
							<div class="widget-line">
								<span style="width:40%;" class="bg-purple widget-horigental-line"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /row -->

	<!-- row -->
	<div class="row">

		<!-- Analytics Overview -->
		<div class="col-lg-8 col-md-8 col-sm-12 mb-4">
			<div class="card">
				<div class="card-header">
					<h4 class="mb-0"><i class="ti-bar-chart"></i>Analytics Overview</h4>
				</div>
				<div class="card-body">
					<div class="chart" id="line-chart" style="height:285px;"></div>
				</div>
			</div>
		</div>

		<!-- Browser Stats -->
		<div class="col-lg-4 col-md-4 col-sm-12 mb-4">
			<div class="card">
				<div class="card-header">
					<h4><i class="ti-world"></i>Browser Stats</h4>
				</div>
				<div class="ground-list todo-browser ground-list-hove">
					<div class="ground ground-single-list padd-0">
						<a class="todo todo-default" href="#">
						  <span class="ct-title">
							<img src="http://via.placeholder.com/80x80" class="img-responsive" alt="">Google Chrome
						  </span>
						  <span class="font-medium">92%</span>
						</a>
					</div>

					<div class="ground ground-single-list padd-0">
						<a class="todo todo-default" href="#">
						  <span class="ct-title">
							<img src="http://via.placeholder.com/80x80" class="img-responsive" alt="">Inter Explorer
						  </span>
						  <span class="font-medium">80%</span>
						</a>
					</div>

					<div class="ground ground-single-list padd-0">
						<a class="todo todo-default" href="#">
						  <span class="ct-title">
							<img src="http://via.placeholder.com/80x80" class="img-responsive" alt="">FireFox
						  </span>
						  <span class="font-medium">40%</span>
						</a>
					</div>

					<div class="ground ground-single-list padd-0">
						<a class="todo todo-default" href="#">
						  <span class="ct-title">
							<img src="http://via.placeholder.com/80x80" class="img-responsive" alt="">Safari
						  </span>
						  <span class="font-medium">52%</span>
						</a>
					</div>

					<div class="ground ground-single-list padd-0">
						<a class="todo todo-default" href="#">
						  <span class="ct-title">
							<img src="http://via.placeholder.com/80x80" class="img-responsive" alt="">Opera
						  </span>
						  <span class="font-medium">40%</span>
						</a>
					</div>
				</div>
			</div>
		</div>

	<!-- /row -->
	</div>

	<!-- row -->
	<div class="row">

		<!-- New Followers List -->
		<div class="col-lg-4 col-md-4 col-sm-12 mb-4">
			<div class="card">
				<div class="card-header">
					<h4><i class="ti-user"></i>New Followers</h4>
				</div>
				<div class="ground-list ground-list-hove">
					<div class="ground ground-single-list">
						<a href="#">
							<img class="ground-avatar" src="assets/img/team-1.png" alt="...">
							<span class="profile-status bg-online pull-right"></span>
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Co-Founder</small>
						</div>

						<div class="ground-right">
							<span class="small">Online</span>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<img class="ground-avatar" src="assets/img/team-2.png" alt="...">
							<span class="profile-status bg-offline pull-right"></span>
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Co-Founder</small>
						</div>

						<div class="ground-right">
							<span class="small">10 Min Ago</span>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<img class="ground-avatar" src="assets/img/team-3.png" alt="...">
							<span class="profile-status bg-working pull-right"></span>
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Co-Founder</small>
						</div>

						<div class="ground-right">
							<span class="small">20 Min Ago</span>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<img class="ground-avatar" src="assets/img/team-4.png" alt="...">
							<span class="profile-status bg-busy pull-right"></span>
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Co-Founder</small>
						</div>

						<div class="ground-right">
							<span class="small">18 Min Ago</span>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<img class="ground-avatar" src="assets/img/team-5.png" alt="...">
							<span class="profile-status bg-online pull-right"></span>
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Co-Founder</small>
						</div>

						<div class="ground-right">
							<span class="small">Online</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Notifications -->
		<div class="col-lg-4 col-md-4 col-sm-12 mb-4">
			<div class="card">
				<div class="card-header">
					<h4><i class="ti-bell"></i>New Notifications</h4>
				</div>
				<div class="ground-list ground-list-hove">
					<div class="ground ground-single-list">
						<a href="#">
							<div class="btn-circle-40 text-light bg-success"><i class="ti-calendar"></i></div>
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Check New Admin Dashb..</small>
							<span class="small">Just Now</span>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<div class="btn-circle-40 text-light bg-danger"><i class="ti-calendar"></i></div>
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">You can Customize..</small>
							<span class="small">02 Min Ago</span>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<div class="btn-circle-40 text-light bg-info"><i class="ti-calendar"></i></div>
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Need Responsive Business Tem...</small>
							<span class="small">10 Min Ago</span>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<div class="btn-circle-40 text-light bg-purple"><i class="ti-calendar"></i></div>
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">You can Change Your Pass..</small>
							<span class="small">18 Min Ago</span>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<div class="btn-circle-40 text-light bg-warning"><i class="ti-calendar"></i></div>
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Next Meeting on Tuesday..</small>
							<span class="small">15 Min Ago</span>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- New Messages -->
		<div class="col-lg-4 col-md-4 col-sm-12 mb-4">
			<div class="card">
				<div class="card-header">
					<h4><i class="ti-email"></i>Messages</h4>
				</div>
				<div class="ground-list ground-list-hove">
					<div class="ground ground-single-list">
						<a href="#">
							<img class="ground-avatar" src="assets/img/team-1.png" alt="...">
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Co-Founder</small>
						</div>

						<div class="ground-right">
							<a class="msg-btn" href="#"><i class="ti-email"></i></a>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<img class="ground-avatar" src="assets/img/team-2.png" alt="...">
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Co-Founder</small>
						</div>

						<div class="ground-right">
							<a class="msg-btn" href="#"><i class="ti-email"></i></a>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<img class="ground-avatar" src="assets/img/team-3.png" alt="...">
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Co-Founder</small>
						</div>

						<div class="ground-right">
							<a class="msg-btn" href="#"><i class="ti-email"></i></a>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<img class="ground-avatar" src="assets/img/team-4.png" alt="...">
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Co-Founder</small>
						</div>

						<div class="ground-right">
							<a class="msg-btn" href="#"><i class="ti-email"></i></a>
						</div>
					</div>

					<div class="ground ground-single-list">
						<a href="#">
							<img class="ground-avatar" src="assets/img/team-5.png" alt="...">
						</a>

						<div class="ground-content">
							<h6><a href="#">Maryam Amiri</a></h6>
							<small class="text-fade">Co-Founder</small>
						</div>

						<div class="ground-right">
							<a class="msg-btn" href="#"><i class="ti-email"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- /row -->
	</div>

</div>

<!-- Profile Content -->
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
	<form class="dash-profile-form">

		<!-- Basic Info -->
		<div class="tr-single-box">
			<div class="tr-single-header">
				<h4><i class="ti-share"></i> Basic Information</h4>
			</div>

			<div class="tr-single-body">
				<div class="form-group">
					<label>First Name</label>
					<input class="form-control" type="text">
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input class="form-control" type="text">
				</div>
				<div class="form-group">
					<label>Display Name</label>
					<input class="form-control" type="text">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="email">
				</div>
				<div class="form-group">
					<label>Designation</label>
					<input class="form-control" type="text">
				</div>
				<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="cover-image">
						<label class="custom-file-label" for="cover-image">Cover Image</label>
					</div>
				</div>
				<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="featured-image">
						<label class="custom-file-label" for="featured-image">Avatar Image</label>
					</div>
				</div>
				<div class="form-group">
					<label>Introduction</label>
					<textarea class="form-control"></textarea>
				</div>
			</div>

		</div>

		<!-- Contact Info -->
		<div class="tr-single-box">
			<div class="tr-single-header">
				<h4><i class="ti-headphone"></i> Contact Info</h4>
			</div>

			<div class="tr-single-body">
				<div class="form-group">
					<label>Full Name</label>
					<input class="form-control" type="text">
				</div>
				<div class="form-group">
					<label>Display Name</label>
					<input class="form-control" type="text">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="email">
				</div>
				<div class="form-group">
					<label>Landline</label>
					<input class="form-control" type="text">
				</div>
				<div class="form-group">
					<label>Mobile No.</label>
					<input class="form-control" type="text">
				</div>
			</div>

		</div>

		<!-- Social Info -->
		<div class="tr-single-box">
			<div class="tr-single-header">
				<h4><i class="ti-new-window"></i> Social Account</h4>
			</div>

			<div class="tr-single-body">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="form-group">
							<label class="social-nfo"><i class="lni-facebook"></i>Facebook URL</label>
							<input class="form-control" type="text">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="form-group">
							<label class="social-nfo"><i class="lni-google-plus"></i>Google+ URL</label>
							<input class="form-control" type="text">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="form-group">
							<label class="social-nfo"><i class="lni-linkedin"></i>LinkedIn URL</label>
							<input class="form-control" type="text">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="form-group">
							<label class="social-nfo"><i class="lni-twitter"></i>Twitter URL</label>
							<input class="form-control" type="text">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="form-group">
							<label class="social-nfo"><i class="lni-instagram"></i>Instagram URL</label>
							<input class="form-control" type="text">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="form-group">
							<label class="social-nfo"><i class="lni-facebook"></i>Tumbler URL</label>
							<input class="form-control" type="text">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="form-group">
							<label class="social-nfo"><i class="lni-pinterest"></i>Pinterest URL</label>
							<input class="form-control" type="text">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="form-group">
							<label class="social-nfo"><i class="lni-vimeo"></i>Vimeo URL</label>
							<input class="form-control" type="text">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="form-group">
							<label class="social-nfo"><i class="lni-envato"></i>Envato URL</label>
							<input class="form-control" type="text">
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Change Password -->
		<div class="tr-single-box">
			<div class="tr-single-header">
				<h4><i class="lni-lock"></i> Change Password</h4>
			</div>

			<div class="tr-single-body">
				<div class="form-group">
					<label>Current Password</label>
					<input class="form-control" type="password">
				</div>
				<div class="form-group">
					<label>New Password</label>
					<input class="form-control" type="password">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input class="form-control" type="password">
				</div>
			</div>

		</div>

		<button type="submit" class="btn btn-primary full-width mb-4">Save Changes</button>

	</form>
</div>

<!-- Listings Content -->
<div class="tab-pane fade" id="listings" role="tabpanel" aria-labelledby="v-pills-listings-tab">
	<!-- All Listing -->
	<div class="tr-single-box">

		<div class="tr-single-header">
			<h4><i class="ti-share"></i> Your Listings</h4>
			<div class="btn-group fl-right">
				<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="ti-more"></i>
				</button>
				<div class="dropdown-menu pull-right animated flipInX">
					<a href="#">Published (58)</a>
					<a href="#">In Review (02)</a>
					<a href="#">Expired (07)</a>
				</div>
			</div>
		</div>

		<div class="tr-single-body">
			<div class="card">
				<div class="table-responsive">
					<table class="table table-striped table-2 table-hover">
						<thead>
							<tr>
								<th>List Name</th>
								<th>Plan</th>
								<th>Rate</th>
								<th>View</th>
								<th>Share</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="ls-1" class="checkbox-custom" name="ls-1" type="checkbox">
										<label for="ls-1" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/2.jpg" class="avatar img-circle" alt="Avatar">Slovilla Exx Bars</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="8.3" data-tenmode="8.3">
										<div class="overall-rating">8.3</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>875</td>
								<td>254</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="ls-2" class="checkbox-custom" name="ls-2" type="checkbox">
										<label for="ls-2" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/2.jpg" class="avatar img-circle" alt="Avatar">Brighton Circle..</a>
								</td>
								<td>Standard</td>
								<td>
									<div class="all-rate-card" data-rated="7.2" data-tenmode="7.2">
										<div class="overall-rating">7.2</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>365</td>
								<td>320</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="ls-3" class="checkbox-custom" name="ls-3" type="checkbox">
										<label for="ls-3" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/3.jpg" class="avatar img-circle" alt="Avatar">Hula Poke Food</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="9.1" data-tenmode="9.1">
										<div class="overall-rating">9.1</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>522</td>
								<td>508</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="ls-4" class="checkbox-custom" name="ls-4" type="checkbox">
										<label for="ls-4" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/4.jpg" class="avatar img-circle" alt="Avatar">Susan D. White</a>
								</td>
								<td>Platinum</td>
								<td>
									<div class="all-rate-card" data-rated="5.2" data-tenmode="5.2">
										<div class="overall-rating">5.2</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>778</td>
								<td>458</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="ls-5" class="checkbox-custom" name="ls-5" type="checkbox">
										<label for="ls-5" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/5.jpg" class="avatar img-circle" alt="Avatar">Ispuka Resort hotel</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="7.7" data-tenmode="7.7">
										<div class="overall-rating">7.7</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>1,224</td>
								<td>54</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- Events Content -->
<div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="v-pills-events-tab">
	<!-- All Event -->
	<div class="tr-single-box">

		<div class="tr-single-header">
			<h4><i class="ti-share"></i> Your Event</h4>
			<div class="btn-group fl-right">
				<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="ti-more"></i>
				</button>
				<div class="dropdown-menu pull-right animated flipInX">
					<a href="#">Published (58)</a>
					<a href="#">In Review (02)</a>
					<a href="#">Expired (07)</a>
				</div>
			</div>
		</div>

		<div class="tr-single-body">
			<div class="card">
				<div class="table-responsive">
					<table class="table table-striped table-2 table-hover">
						<thead>
							<tr>
								<th>List Name</th>
								<th>Plan</th>
								<th>Rate</th>
								<th>View</th>
								<th>Share</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="es-1" class="checkbox-custom" name="es-1" type="checkbox">
										<label for="es-1" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/2.jpg" class="avatar img-circle" alt="Avatar">Slovilla Exx Bars</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="8.3" data-tenmode="8.3">
										<div class="overall-rating">8.3</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>875</td>
								<td>254</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="es-2" class="checkbox-custom" name="es-2" type="checkbox">
										<label for="es-2" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/2.jpg" class="avatar img-circle" alt="Avatar">Brighton Circle..</a>
								</td>
								<td>Standard</td>
								<td>
									<div class="all-rate-card" data-rated="7.2" data-tenmode="7.2">
										<div class="overall-rating">7.2</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>365</td>
								<td>320</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="es-3" class="checkbox-custom" name="es-3" type="checkbox">
										<label for="es-3" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/3.jpg" class="avatar img-circle" alt="Avatar">Hula Poke Food</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="9.1" data-tenmode="9.1">
										<div class="overall-rating">9.1</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>522</td>
								<td>508</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="es-4" class="checkbox-custom" name="es-4" type="checkbox">
										<label for="es-4" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/4.jpg" class="avatar img-circle" alt="Avatar">Susan D. White</a>
								</td>
								<td>Platinum</td>
								<td>
									<div class="all-rate-card" data-rated="5.2" data-tenmode="5.2">
										<div class="overall-rating">5.2</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>778</td>
								<td>458</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="es-5" class="checkbox-custom" name="es-5" type="checkbox">
										<label for="es-5" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/5.jpg" class="avatar img-circle" alt="Avatar">Ispuka Resort hotel</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="7.7" data-tenmode="7.7">
										<div class="overall-rating">7.7</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>1,224</td>
								<td>54</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- Property Content -->
<div class="tab-pane fade" id="property" role="tabpanel" aria-labelledby="v-pills-property-tab">
	<!-- All Property Info -->
	<div class="tr-single-box">

		<div class="tr-single-header">
			<h4><i class="ti-share"></i> Your Property</h4>
			<div class="btn-group fl-right">
				<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="ti-more"></i>
				</button>
				<div class="dropdown-menu pull-right animated flipInX">
					<a href="#">Published (58)</a>
					<a href="#">In Review (02)</a>
					<a href="#">Expired (07)</a>
				</div>
			</div>
		</div>

		<div class="tr-single-body">
			<div class="card">
				<div class="table-responsive">
					<table class="table table-striped table-2 table-hover">
						<thead>
							<tr>
								<th>List Name</th>
								<th>Plan</th>
								<th>Rate</th>
								<th>View</th>
								<th>Share</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="ps-1" class="checkbox-custom" name="ps-1" type="checkbox">
										<label for="ps-1" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/2.jpg" class="avatar img-circle" alt="Avatar">Slovilla Exx Bars</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="8.3" data-tenmode="8.3">
										<div class="overall-rating">8.3</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>875</td>
								<td>254</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="ps-2" class="checkbox-custom" name="ps-2" type="checkbox">
										<label for="ps-2" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/2.jpg" class="avatar img-circle" alt="Avatar">Brighton Circle..</a>
								</td>
								<td>Standard</td>
								<td>
									<div class="all-rate-card" data-rated="7.2" data-tenmode="7.2">
										<div class="overall-rating">7.2</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>365</td>
								<td>320</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="ps-3" class="checkbox-custom" name="ps-3" type="checkbox">
										<label for="ps-3" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/3.jpg" class="avatar img-circle" alt="Avatar">Hula Poke Food</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="9.1" data-tenmode="9.1">
										<div class="overall-rating">9.1</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>522</td>
								<td>508</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="ps-4" class="checkbox-custom" name="ps-4" type="checkbox">
										<label for="ps-4" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/4.jpg" class="avatar img-circle" alt="Avatar">Susan D. White</a>
								</td>
								<td>Platinum</td>
								<td>
									<div class="all-rate-card" data-rated="5.2" data-tenmode="5.2">
										<div class="overall-rating">5.2</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>778</td>
								<td>458</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="ps-5" class="checkbox-custom" name="ps-5" type="checkbox">
										<label for="ps-5" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/5.jpg" class="avatar img-circle" alt="Avatar">Ispuka Resort hotel</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="7.7" data-tenmode="7.7">
										<div class="overall-rating">7.7</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>1,224</td>
								<td>54</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- Notifications Content -->
<div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">
	<!-- Notification Info -->
	<div class="tr-single-box">

		<div class="tr-single-header">
			<h4><i class="ti-bell"></i> Notification</h4>
		</div>

		<div class="tr-single-body">
			No Any Notification yet
		</div>

	</div>
</div>

<!-- Messages Content -->
<div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
	<!-- chat-wappers-->
	<div class="chat-wappers">
		<div class="app">
			<div class="row app-one">
				<div class="col-md-4 side">

					<!-- ========= Side One =========== -->
					<div class="side-one">
						<div class="row heading main-bg">
							<div class="col-sm-9 col-9 heading-avatar">
								<div class="heading-avatar-icon">
								  <img src="http://via.placeholder.com/180x180" alt="">
								</div>
							  </div>

							<div class="col-sm-3 col-3 heading-compose text-right">
								<i class="fa fa-comments-o text-light fa-2x" aria-hidden="true"></i>
							</div>
						</div>

						<div class="row searchBox">
							<div class="col-sm-12 searchBox-inner bg-white">
								<div class="form-group has-feedback">
								  <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
								  <span class="glyphicon glyphicon-search form-control-feedback"></span>
								</div>
							</div>
						</div>

						<div class="row sideBar">

							<div class="box sideBar-body">
								<div class="ground-list ground-list-hove bb-1">
									<div class="media media-single">
										<a href="#">
											<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
										</a>

										<div class="media-body">
											<h6><a href="#">Hossein Shams</a> <span class="time-meta pull-right">18:18</span></h6>
											<small class="text-success">Online</small>
										</div>
									</div>
								</div>
							</div>

							<div class="box sideBar-body">
								<div class="ground-list ground-list-hove bb-1">
									<div class="media media-single">
										<a href="#">
											<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
										</a>

										<div class="media-body">
											<h6><a href="#">Alisha L. Burchell</a> <span class="time-meta pull-right">10:18</span></h6>
											<small class="text-success">Online</small>
										</div>
									</div>
								</div>
							</div>

							<div class="box sideBar-body">
								<div class="ground-list ground-list-hove bb-1">
									<div class="media media-single">
										<a href="#">
											<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
										</a>

										<div class="media-body">
											<h6><a href="#">Daniel N. Anderson</a> <span class="time-meta pull-right">20:18</span></h6>
											<small class="text-warning">Busy</small>
										</div>
									</div>
								</div>
							</div>

							<div class="box sideBar-body">
								<div class="ground-list ground-list-hove bb-1">
									<div class="media media-single">
										<a href="#">
											<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
										</a>

										<div class="media-body">
											<h6><a href="#">Kristina R. Noto</a> <span class="time-meta pull-right">18:18</span></h6>
											<small class="text-success">Online</small>
										</div>
									</div>
								</div>
							</div>

							<div class="box sideBar-body">
								<div class="ground-list ground-list-hove bb-1">
									<div class="media media-single">
										<a href="#">
											<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
										</a>

										<div class="media-body">
											<h6><a href="#">Larry C. Cramer</a> <span class="time-meta pull-right">18:18</span></h6>
											<small class="text-primary">Away</small>
										</div>
									</div>
								</div>
							</div>

							<div class="box sideBar-body">
								<div class="ground-list ground-list-hove bb-1">
									<div class="media media-single">
										<a href="#">
											<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
										</a>

										<div class="media-body">
											<h6><a href="#">Sharon C. Mason</a> <span class="time-meta pull-right">20:20</span></h6>
											<small class="text-warning">Busy</small>
										</div>
									</div>
								</div>
							</div>

							<div class="box sideBar-body">
								<div class="ground-list ground-list-hove bb-1">
									<div class="media media-single">
										<a href="#">
											<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
										</a>

										<div class="media-body">
											<h6><a href="#">Michael P. Fowler</a> <span class="time-meta pull-right">07:10</span></h6>
											<small class="text-danger">Offline</small>
										</div>
									</div>
								</div>
							</div>

							<div class="box sideBar-body">
								<div class="ground-list ground-list-hove bb-1">
									<div class="media media-single">
										<a href="#">
											<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
										</a>

										<div class="media-body">
											<h6><a href="#">Nancy T. Clayton</a> <span class="time-meta pull-right">17:12</span></h6>
											<small class="text-success">Online</small>
										</div>
									</div>
								</div>
							</div>

							<div class="box sideBar-body">
								<div class="ground-list ground-list-hove bb-1">
									<div class="media media-single">
										<a href="#">
											<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
										</a>

										<div class="media-body">
											<h6><a href="#">Hossein Shams</a> <span class="time-meta pull-right">12:10</span></h6>
											<small class="text-success">Online</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ========= End Side One =========== -->

					<div class="side-two">

						<div class="row newMessage-heading main-bg">
							 <div class="row newMessage-main">
								<div class="col-sm-2 col-2 newMessage-back">
								  <i class="fa fa-arrow-left" aria-hidden="true"></i>
								</div>
								<div class="col-sm-10 col-10 newMessage-title">
								  New Chat
								</div>
							</div>
						</div>

						<div class="row composeBox">
						  <div class="col-sm-12 composeBox-inner">
							<div class="form-group has-feedback">
							  <input id="composeText" type="text" class="form-control" name="searchText" placeholder="Search People">
							  <span class="glyphicon glyphicon-search form-control-feedback"></span>
							</div>
						  </div>
						</div>

						<div class="row compose-sideBar">
							<div class="row sideBar-body">
								<div class="box sideBar-body">
									<div class="ground-list ground-list-hove bb-1">
										<div class="media media-single">
											<a href="#">
												<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
											</a>

											<div class="media-body">
												<h6><a href="#">Hossein Shams</a> <span class="time-meta pull-right">18:18</span></h6>
												<small class="text-success">Online</small>
											</div>
										</div>
									</div>
								  </div>

								  <div class="box sideBar-body">
									<div class="ground-list ground-list-hove bb-1">
										<div class="media media-single">
											<a href="#">
												<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
											</a>

											<div class="media-body">
												<h6><a href="#">Alisha L. Burchell</a> <span class="time-meta pull-right">10:18</span></h6>
												<small class="text-success">Online</small>
											</div>
										</div>
									</div>
								  </div>

								  <div class="box sideBar-body">
									<div class="ground-list ground-list-hove bb-1">
										<div class="media media-single">
											<a href="#">
												<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
											</a>

											<div class="media-body">
												<h6><a href="#">Daniel N. Anderson</a> <span class="time-meta pull-right">20:18</span></h6>
												<small class="text-warning">Busy</small>
											</div>
										</div>
									</div>
								  </div>

								  <div class="box sideBar-body">
									<div class="ground-list ground-list-hove bb-1">
										<div class="media media-single">
											<a href="#">
												<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
											</a>

											<div class="media-body">
												<h6><a href="#">Kristina R. Noto</a> <span class="time-meta pull-right">18:18</span></h6>
												<small class="text-success">Online</small>
											</div>
										</div>
									</div>
								  </div>

								<div class="box sideBar-body">
									<div class="ground-list ground-list-hove bb-1">
										<div class="media media-single">
											<a href="#">
												<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
											</a>

											<div class="media-body">
												<h6><a href="#">Larry C. Cramer</a> <span class="time-meta pull-right">18:18</span></h6>
												<small class="text-primary">Away</small>
											</div>
										</div>
									</div>
								</div>

								<div class="box sideBar-body">
									<div class="ground-list ground-list-hove bb-1">
										<div class="media media-single">
											<a href="#">
												<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
											</a>

											<div class="media-body">
												<h6><a href="#">Sharon C. Mason</a> <span class="time-meta pull-right">20:20</span></h6>
												<small class="text-warning">Busy</small>
											</div>
										</div>
									</div>
								</div>

								<div class="box sideBar-body">
									<div class="ground-list ground-list-hove bb-1">
										<div class="media media-single">
											<a href="#">
												<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
											</a>

											<div class="media-body">
												<h6><a href="#">Michael P. Fowler</a> <span class="time-meta pull-right">07:10</span></h6>
												<small class="text-danger">Offline</small>
											</div>
										</div>
									</div>
								</div>

								<div class="box sideBar-body">
									<div class="ground-list ground-list-hove bb-1">
										<div class="media media-single">
											<a href="#">
												<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
											</a>

											<div class="media-body">
												<h6><a href="#">Nancy T. Clayton</a> <span class="time-meta pull-right">17:12</span></h6>
												<small class="text-success">Online</small>
											</div>
										</div>
									</div>
								</div>

								<div class="box sideBar-body">
									<div class="ground-list ground-list-hove bb-1">
										<div class="media media-single">
											<a href="#">
												<img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
											</a>

											<div class="media-body">
												<h6><a href="#">Hossein Shams</a> <span class="time-meta pull-right">12:10</span></h6>
												<small class="text-success">Online</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- Col-md-4 -->

				<div class="col-md-8 conversation b-l">

					<div class="row heading bg-light">

						<div class="col-sm-2 col-md-1 col-3 heading-avatar">
						  <div class="heading-avatar-icon">
							<img src="http://via.placeholder.com/180x180" alt="">
						  </div>
						</div>

						<div class="col-sm-10 col-10 heading-name">
						  <a class="heading-name-meta">John Doe
						  </a>
						  <span class="heading-online text-success">Online</span>
						</div>

					</div>

					<div class="row message" id="conversation">
						<ul class="chat-list padd-20">
							<!--chat Row -->
							<li>
								<div class="chat-img"><img src="http://via.placeholder.com/180x180" alt="user"></div>
								<div class="chat-content">
									<h5 class="mrg-bot-5">James Anderson</h5>
									<div class="chating-box bg-light">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
								</div>
								<div class="time-meta">10:56 am</div>
							</li>
							<!--chat Row -->

							<li>
								<div class="chat-img"><img src="http://via.placeholder.com/180x180" alt="user"></div>
								<div class="chat-content">
									<h5 class="mrg-bot-5">Bianca Doe</h5>
									<div class="chating-box bg-light">It’s Great opportunity to work.</div>
								</div>
								<div class="time-meta">10:57 am</div>
							</li>
							<!--chat Row -->

							<li class="reverse">
								<div class="chat-time">10:57 am</div>
								<div class="chat-content">
									<h5 class="mrg-bot-5">Steave Doe</h5>
									<div class="chating-box text-light bg-primary">It’s Great opportunity to work.</div>
								</div>
								<div class="chat-img"><img src="http://via.placeholder.com/180x180" alt="user"></div>
							</li>
							<!--chat Row -->

							<li class="reverse">
								<div class="time-meta">10:57 am</div>
								<div class="chat-content">
									<h5 class="mrg-bot-5">Steave Doe</h5>
									<div class="chating-box text-light bg-primary">It’s Great opportunity to work.</div>
								</div>
								<div class="chat-img"><img src="http://via.placeholder.com/180x180" alt="user"></div>
							</li>
							<!--chat Row -->

							<li>
								<div class="chat-img"><img src="http://via.placeholder.com/180x180" alt="user"></div>
								<div class="chat-content">
									<h5 class="mrg-bot-5">Angelina Rhodes</h5>
									<div class="chating-box bg-light bg-primary">Well we have good budget for the project</div>
								</div>
								<div class="time-meta">11:00 am</div>
							</li>
							<!--chat Row -->

						</ul>
					</div>

					<div class="row reply bg-light">

						<div class="col-sm-1 col-xs-1 reply-emojis">
						  <i class="fa fa-smile-o fa-2x"></i>
						</div>

						<div class="col-sm-9 col-xs-9 reply-main">
						  <textarea class="form-control" rows="1" id="comment" placeholder="Reply Comments"></textarea>
						</div>

						<div class="col-sm-1 col-xs-1 reply-recording">
						  <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
						</div>

						<div class="col-sm-1 col-xs-1 reply-send">
						  <i class="fa fa-send fa-2x" aria-hidden="true"></i>
						</div>

					</div>
				</div>
				<!-- col-md-8 -->

			</div>
		</div>
	</div>
</div>

<!-- Billing Content -->
<div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="v-pills-billing-tab">
	<!-- Notification Info -->
	<div class="tr-single-box">

		<div class="tr-single-header">
			<h4><i class="ti-bell"></i> Billing</h4>
		</div>

		<div class="tr-single-body">
			No Any Notification yet
		</div>

	</div>
</div>

<!-- Bookmark Content -->
<div class="tab-pane fade" id="bookmark" role="tabpanel" aria-labelledby="v-pills-bookmark-tab">
	<!-- All Bookmark -->
	<div class="tr-single-box">

		<div class="tr-single-header">
			<h4><i class="ti-share"></i> Your Event</h4>
			<div class="btn-group fl-right">
				<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="ti-more"></i>
				</button>
				<div class="dropdown-menu pull-right animated flipInX">
					<a href="#">Published (58)</a>
					<a href="#">In Review (02)</a>
					<a href="#">Expired (07)</a>
				</div>
			</div>
		</div>

		<div class="tr-single-body">
			<div class="card">
				<div class="table-responsive">
					<table class="table table-striped table-2 table-hover">
						<thead>
							<tr>
								<th>List Name</th>
								<th>Plan</th>
								<th>Rate</th>
								<th>View</th>
								<th>Share</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="bs-1" class="checkbox-custom" name="bs-1" type="checkbox">
										<label for="bs-1" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/2.jpg" class="avatar img-circle" alt="Avatar">Slovilla Exx Bars</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="8.3" data-tenmode="8.3">
										<div class="overall-rating">8.3</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>875</td>
								<td>254</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="bs-2" class="checkbox-custom" name="bs-2" type="checkbox">
										<label for="bs-2" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/2.jpg" class="avatar img-circle" alt="Avatar">Brighton Circle..</a>
								</td>
								<td>Standard</td>
								<td>
									<div class="all-rate-card" data-rated="7.2" data-tenmode="7.2">
										<div class="overall-rating">7.2</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>365</td>
								<td>320</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="bs-3" class="checkbox-custom" name="bs-3" type="checkbox">
										<label for="bs-3" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/3.jpg" class="avatar img-circle" alt="Avatar">Hula Poke Food</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="9.1" data-tenmode="9.1">
										<div class="overall-rating">9.1</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>522</td>
								<td>508</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="bs-4" class="checkbox-custom" name="bs-4" type="checkbox">
										<label for="bs-4" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/4.jpg" class="avatar img-circle" alt="Avatar">Susan D. White</a>
								</td>
								<td>Platinum</td>
								<td>
									<div class="all-rate-card" data-rated="5.2" data-tenmode="5.2">
										<div class="overall-rating">5.2</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>778</td>
								<td>458</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<span class="c-box-checkbox">
										<input id="bs-5" class="checkbox-custom" name="bs-5" type="checkbox">
										<label for="bs-5" class="checkbox-custom-label"></label>
									</span>
									<a href="#"><img src="assets/img/5.jpg" class="avatar img-circle" alt="Avatar">Ispuka Resort hotel</a>
								</td>
								<td>Popular</td>
								<td>
									<div class="all-rate-card" data-rated="7.7" data-tenmode="7.7">
										<div class="overall-rating">7.7</div>
										<div class="rating-wrap">
											<div class="max-rating">10</div>
											<div class="rateOverview">Average</div>
										</div>
									</div>
								</td>
								<td>1,224</td>
								<td>54</td>
								<td>
									<div class="btn-group fl-right">
										<button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-more"></i>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
											<a href="#">View</a>
										</div>
									</div>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- Woner Wallete Content -->
<div class="tab-pane fade" id="wwallete" role="tabpanel" aria-labelledby="v-pills-wwallete-tab">
	<div class="alert alert-success">
		You have withdraw $458
	</div>
	<div class="row">

		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="widget simple-widget">
				<div class="rwidget-caption info">
					<div class="row">
						<div class="col-4 padd-r-0">
							<i class="text-info icon ti-wallet"></i>
						</div>
						<div class="col-8">
							<div class="widget-detail">
								<h3>$372</h3>
								<span>withdraw</span>
							</div>
						</div>
						<div class="col-12">
							<div class="widget-line">
								<span style="width:80%;" class="bg-info widget-horigental-line"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="widget simple-widget">
				<div class="widget-caption danger">
					<div class="row">
						<div class="col-4 padd-r-0">
							<i class="text-danger icon ti-shopping-cart-full"></i>
						</div>
						<div class="col-8">
							<div class="widget-detail">
								<h3>$2412</h3>
								<span>Your balance</span>
							</div>
						</div>
						<div class="col-12">
							<div class="widget-line">
								<span style="width:50%;" class="bg-danger widget-horigental-line"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="widget simple-widget">
				<div class="widget-caption success">
					<div class="row">
						<div class="col-4 padd-r-0">
							<i class="text-success icon ti-briefcase"></i>
						</div>
						<div class="col-8">
							<div class="widget-detail">
								<h3>$3720</h3>
								<span>before taxes:</span>
							</div>
						</div>
						<div class="col-12">
							<div class="widget-line">
								<span style="width:40%;" class="bg-success widget-horigental-line"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="row m-3">
		<div class="tr-single-box">
			<div class="tr-single-header">
				<h4><i class="ti-headphone"></i> Set Your Payment Methode</h4>
			</div>

			<div class="tr-single-body">
				<div class="row">
					<div class="payment-opt-tab">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="credit-tab" data-toggle="tab" href="#credit" role="tab" aria-controls="credit" aria-selected="true" aria-expanded="true">
									<img src="assets/img/vm-card.png" alt="">
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="skrill-tab" data-toggle="tab" href="#skrill" role="tab" aria-controls="skrill" aria-selected="false" aria-expanded="false">
									<img src="assets/img/skrill.png" alt="">
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false" aria-expanded="false">
									<img src="assets/img/paypal.png" alt="">
								</a>
							</li>
						</ul>
					</div>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade active show" id="credit" role="tabpanel" aria-labelledby="credit-tab" aria-expanded="true">
							<form>
								<div class="row">

									<div class="col-sm-12 form-group">
										<input type="text" class="form-control" name="card_holder" placeholder="Full name on card">
										<i class="ti-credit-card form-control-feedback"></i>
									</div>

									<div class="col-sm-12 form-group">
										<input type="text" class="form-control input-default" name="card-number" placeholder="Valid Account Number">
										<i class="fa fa-credit-card-alt fa-lg fa-fix form-control-feedback"></i>
									</div>

									<div class="col-sm-12 form-group">
										<button class="btn btn-payment" type="submit">Done</button>
									</div>

								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="skrill" role="tabpanel" aria-labelledby="skrill-tab" aria-expanded="false">
							<form>
								<div class="row">

									<div class="col-sm-12 form-group">
										<input type="text" class="form-control" name="skrill_full_name" placeholder="Full name on skrill">
										<i class="ti-credit-card form-control-feedback"></i>
									</div>

									<div class="col-sm-8 form-group">
										<input type="text" class="form-control" name="skrill_mail" placeholder="Email address on skrill">
										<i class="ti-email form-control-feedback"></i>
									</div>

									<div class="col-sm-4 form-group input-group">
										<span class="input-group-addon"><i class="fa fa-usd"></i></span>
										<input type="number" name="amount" class="form-control input-default" placeholder="Payment Amount">
									</div>

									<div class="col-sm-12 form-group">
										<button class="btn btn-payment" type="submit">Done</button>
									</div>

								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab" aria-expanded="false">
							<form>
								<div class="row">

									<div class="col-sm-12 form-group">
										<input type="text" class="form-control" name="paypal_full_name" placeholder="Paypal Email Address">
										<i class="ti-credit-card form-control-feedback"></i>
									</div>

									<div class="col-sm-12 form-group">
										<button class="btn btn-payment" type="submit">Done</button>
									</div>

								</div>
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
</section>
<!-- =========================== Dashboard End ============================================ -->

@endsection
