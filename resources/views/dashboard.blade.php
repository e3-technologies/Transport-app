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



<!-- Add New Terminal -->
@include('admin.terminal')

<!-- Add New Route -->
@include('admin.routes')

<!-- Add New Route -->
@include('admin.company')


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
