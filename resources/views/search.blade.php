@extends('layouts.main')

@section('content')

			<!-- ============================ Page Title  Start================================== -->
			<div class="page-title image-title" style="background-image:url(assets/img/banner-4.jpg);">
				<div class="finding-overlay op-70"></div>
				<div class="container">
					<div class="page-title-wrap">
					<h1>Find Your Dream..</h1>
					<p><a href="#" class="theme-cl">Home</a> <span class="current-page active">Recent Listings</span></p>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->

			<!-- =========================== Recent Listing Start ============================================ -->
			<section class="pt-0 overlay-top">
				<div class="container">

					<div class="row m-0 mb-4">
						<form class="filter-form over-frm">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control b-r" placeholder="What are you looking for...">
										<i class="ti-search"></i>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control b-r" placeholder="Where...">
										<i class="ti-target"></i>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="form-group">
										<select id="category" class="js-states form-control">
										  <option value="">&nbsp;</option>
										   <option value="1">Cafe & Restaurant</option>
											<option value="2">Businesses</option>
											<option value="3">Education</option>
											<option value="4">Sport & Gym</option>
											<option value="5">Hotel & Villa</option>
										</select>
									</div>
								</div>

							</div>
						</form>
					</div>

					<div class="row">

						<!-- Single Listing -->
						<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
							<div class="list-grid-layout classical-layout">
								<div class="grid-layout-header">
									<a href="listing-detail.html" class="list-thumb">
										<img src="assets/img/11.jpg" class="img-fluid mx-auto" alt="">
									</a>
									<div class="gl-top-head">
										<div class="pr-rate gl-card">$$$</div>
										<div class="gl-rating gl-card">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
									</div>
									<div class="grid-layout-info">
										<ul>
											<li><i class="ti-headphone"></i> 91 2354 658 458</li>
											<li><i class="ti-location-pin"></i>#514 Mount Sivalik, Agra</li>
										</ul>
									</div>
								</div>
								<div class="grid-layout-body">
									<div class="gl-list-author">
										<a href="author-detail.html"><img src="assets/img/team-1.png" alt=""></a>
										<span class="verified-badge"><i class="fa fa-check"></i></span>
									</div>
									<div class="gl-list-caption">
										<h4><a href="listing-detail.html" class="list-title">Hula Poke Food</a></h4>
										<p class="gl-tagline">Innovative cooking, paired with fine wines</p>
									</div>
								</div>
								<div class="grid-layout-footer">
									<a href="http://themezhub.com/">
										<div class="cat-icon-box rounded-circle cbg-1">
											<i class="fa fa-home"></i>
										</div>
										<div class="icon-box-text">Restaurants</div>
									</a>
									<div class="ft-loke">
										<a href="#"><i class="ti-heart"></i></a>
										<span class="list-status">Open</span>
									</div>
								</div>
							</div>
						</div>

						<!-- Single Listing -->
						<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
							<div class="list-grid-layout classical-layout">
								<div class="grid-layout-header">
									<a href="listing-detail.html" class="list-thumb">
										<img src="assets/img/2.jpg" class="img-fluid mx-auto" alt="">
									</a>
									<div class="gl-top-head">
										<div class="pr-rate gl-card">$$$</div>
										<div class="gl-rating gl-card">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
									</div>
									<div class="grid-layout-info">
										<ul>
											<li><i class="ti-headphone"></i> 828-219-7148</li>
											<li><i class="ti-location-pin"></i>4322 McVaney Road</li>
										</ul>
									</div>
								</div>
								<div class="grid-layout-body">
									<div class="gl-list-author">
										<a href="author-detail.html"><img src="assets/img/team-2.png" alt=""></a>
										<span class="verified-badge"><i class="fa fa-check"></i></span>
									</div>
									<div class="gl-list-caption">
										<h4><a href="listing-detail.html" class="list-title">Ispuka Resort hotel</a></h4>
										<p class="gl-tagline">Innovative cooking, paired with fine wines</p>
									</div>
								</div>
								<div class="grid-layout-footer">
									<a href="http://themezhub.com/">
										<div class="cat-icon-box rounded-circle cbg-2">
											<i class="fa fa-home"></i>
										</div>
										<div class="icon-box-text">Hotel</div>
									</a>
									<div class="ft-loke">
										<a href="#"><i class="ti-heart"></i></a>
										<span class="list-status">Open</span>
									</div>
								</div>
							</div>
						</div>

						<!-- Single Listing -->
						<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
							<div class="list-grid-layout classical-layout">
								<div class="grid-layout-header">
									<a href="listing-detail.html" class="list-thumb">
										<img src="assets/img/3.jpg" class="img-fluid mx-auto" alt="">
									</a>
									<div class="gl-top-head">
										<div class="pr-rate gl-card">$$$</div>
										<div class="gl-rating gl-card">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
									</div>
									<div class="grid-layout-info">
										<ul>
											<li><i class="ti-headphone"></i> 617-458-0645</li>
											<li><i class="ti-location-pin"></i>3674 Hinkle Lake Road</li>
										</ul>
									</div>
								</div>
								<div class="grid-layout-body">
									<div class="gl-list-author">
										<a href="author-detail.html"><img src="assets/img/team-3.png" alt=""></a>
										<span class="verified-badge"><i class="fa fa-check"></i></span>
									</div>
									<div class="gl-list-caption">
										<h4><a href="listing-detail.html" class="list-title">Slovilla Exx Bars</a></h4>
										<p class="gl-tagline">Innovative cooking, paired with fine wines</p>
									</div>
								</div>
								<div class="grid-layout-footer">
									<a href="http://themezhub.com/">
										<div class="cat-icon-box rounded-circle cbg-3">
											<i class="ti-filter"></i>
										</div>
										<div class="icon-box-text">Cafe & bar</div>
									</a>
									<div class="ft-loke">
										<a href="#"><i class="ti-heart"></i></a>
										<span class="list-status ls-close">Close</span>
									</div>
								</div>
							</div>
						</div>

						<!-- Single Listing -->
						<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
							<div class="list-grid-layout classical-layout">
								<div class="grid-layout-header">
									<a href="listing-detail.html" class="list-thumb">
										<img src="assets/img/4.jpg" class="img-fluid mx-auto" alt="">
									</a>
									<div class="gl-top-head">
										<div class="pr-rate gl-card">$$</div>
										<div class="gl-rating gl-card">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
									</div>
									<div class="grid-layout-info">
										<ul>
											<li><i class="ti-headphone"></i> 320-433-2469</li>
											<li><i class="ti-location-pin"></i>1253 Brighton Circle Road</li>
										</ul>
									</div>
								</div>
								<div class="grid-layout-body">
									<div class="gl-list-author">
										<a href="author-detail.html"><img src="assets/img/team-4.png" alt=""></a>
										<span class="verified-badge"><i class="fa fa-check"></i></span>
									</div>
									<div class="gl-list-caption">
										<h4><a href="listing-detail.html" class="list-title">Beauty Bed Villa</a></h4>
										<p class="gl-tagline">Innovative cooking, paired with fine wines</p>
									</div>
								</div>
								<div class="grid-layout-footer">
									<a href="http://themezhub.com/">
										<div class="cat-icon-box rounded-circle cbg-4">
											<i class="ti-map-alt"></i>
										</div>
										<div class="icon-box-text">Villa 7 Rental</div>
									</a>
									<div class="ft-loke">
										<a href="#"><i class="ti-heart"></i></a>
										<span class="list-status">Open</span>
									</div>
								</div>
							</div>
						</div>

						<!-- Single Listing -->
						<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
							<div class="list-grid-layout classical-layout">
								<div class="grid-layout-header">
									<a href="listing-detail.html" class="list-thumb">
										<img src="assets/img/8.jpg" class="img-fluid mx-auto" alt="">
									</a>
									<div class="gl-top-head">
										<div class="pr-rate gl-card">$$$</div>
										<div class="gl-rating gl-card">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
									</div>
									<div class="grid-layout-info">
										<ul>
											<li><i class="ti-headphone"></i> 401-615-4353</li>
											<li><i class="ti-location-pin"></i>3795 Winding Way</li>
										</ul>
									</div>
								</div>
								<div class="grid-layout-body">
									<div class="gl-list-author">
										<a href="author-detail.html"><img src="assets/img/team-5.png" alt=""></a>
										<span class="verified-badge"><i class="fa fa-check"></i></span>
									</div>
									<div class="gl-list-caption">
										<h4><a href="listing-detail.html" class="list-title">Hula Poke Food</a></h4>
										<p class="gl-tagline">Innovative cooking, paired with fine wines</p>
									</div>
								</div>
								<div class="grid-layout-footer">
									<a href="http://themezhub.com/">
										<div class="cat-icon-box rounded-circle cbg-5">
											<i class="fa fa-home"></i>
										</div>
										<div class="icon-box-text">Tourist beach</div>
									</a>
									<div class="ft-loke">
										<a href="#"><i class="ti-heart"></i></a>
										<span class="list-status ls-close">Closed</span>
									</div>
								</div>
							</div>
						</div>

						<!-- Single Listing -->
						<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
							<div class="list-grid-layout classical-layout">
								<div class="grid-layout-header">
									<a href="listing-detail.html" class="list-thumb">
										<img src="assets/img/6.jpg" class="img-fluid mx-auto" alt="">
									</a>
									<div class="gl-top-head">
										<div class="pr-rate gl-card">$$</div>
										<div class="gl-rating gl-card">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
									</div>
									<div class="grid-layout-info">
										<ul>
											<li><i class="ti-headphone"></i> 513-839-0301</li>
											<li><i class="ti-location-pin"></i>1698 Round Table Drive</li>
										</ul>
									</div>
								</div>
								<div class="grid-layout-body">
									<div class="gl-list-author">
										<a href="author-detail.html"><img src="assets/img/team-6.png" alt=""></a>
										<span class="verified-badge"><i class="fa fa-check"></i></span>
									</div>
									<div class="gl-list-caption">
										<h4><a href="listing-detail.html" class="list-title">Hula Poke Food</a></h4>
										<p class="gl-tagline">Innovative cooking, paired with fine wines</p>
									</div>
								</div>
								<div class="grid-layout-footer">
									<a href="http://themezhub.com/">
										<div class="cat-icon-box rounded-circle cbg-6">
											<i class="ti-palette"></i>
										</div>
										<div class="icon-box-text">Sport & Gym</div>
									</a>
									<div class="ft-loke">
										<a href="#"><i class="ti-heart"></i></a>
										<span class="list-status ls-close">Closed</span>
									</div>
								</div>
							</div>
						</div>

						<!-- Single Listing -->
						<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
							<div class="list-grid-layout classical-layout">
								<div class="grid-layout-header">
									<a href="listing-detail.html" class="list-thumb">
										<img src="assets/img/11.jpg" class="img-fluid mx-auto" alt="">
									</a>
									<div class="gl-top-head">
										<div class="pr-rate gl-card">$$$</div>
										<div class="gl-rating gl-card">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
									</div>
									<div class="grid-layout-info">
										<ul>
											<li><i class="ti-headphone"></i> 91 2354 658 458</li>
											<li><i class="ti-location-pin"></i>#514 Mount Sivalik, Agra</li>
										</ul>
									</div>
								</div>
								<div class="grid-layout-body">
									<div class="gl-list-author">
										<a href="author-detail.html"><img src="assets/img/team-1.png" alt=""></a>
										<span class="verified-badge"><i class="fa fa-check"></i></span>
									</div>
									<div class="gl-list-caption">
										<h4><a href="listing-detail.html" class="list-title">Hula Poke Food</a></h4>
										<p class="gl-tagline">Innovative cooking, paired with fine wines</p>
									</div>
								</div>
								<div class="grid-layout-footer">
									<a href="http://themezhub.com/">
										<div class="cat-icon-box rounded-circle cbg-7">
											<i class="fa fa-home"></i>
										</div>
										<div class="icon-box-text">Restaurants</div>
									</a>
									<div class="ft-loke">
										<a href="#"><i class="ti-heart"></i></a>
										<span class="list-status">Open</span>
									</div>
								</div>
							</div>
						</div>

						<!-- Single Listing -->
						<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
							<div class="list-grid-layout classical-layout">
								<div class="grid-layout-header">
									<a href="listing-detail.html" class="list-thumb">
										<img src="assets/img/2.jpg" class="img-fluid mx-auto" alt="">
									</a>
									<div class="gl-top-head">
										<div class="pr-rate gl-card">$$$</div>
										<div class="gl-rating gl-card">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
									</div>
									<div class="grid-layout-info">
										<ul>
											<li><i class="ti-headphone"></i> 828-219-7148</li>
											<li><i class="ti-location-pin"></i>4322 McVaney Road</li>
										</ul>
									</div>
								</div>
								<div class="grid-layout-body">
									<div class="gl-list-author">
										<a href="author-detail.html"><img src="assets/img/team-2.png" alt=""></a>
										<span class="verified-badge"><i class="fa fa-check"></i></span>
									</div>
									<div class="gl-list-caption">
										<h4><a href="listing-detail.html" class="list-title">Ispuka Resort hotel</a></h4>
										<p class="gl-tagline">Innovative cooking, paired with fine wines</p>
									</div>
								</div>
								<div class="grid-layout-footer">
									<a href="http://themezhub.com/">
										<div class="cat-icon-box rounded-circle cbg-1">
											<i class="fa fa-home"></i>
										</div>
										<div class="icon-box-text">Hotel</div>
									</a>
									<div class="ft-loke">
										<a href="#"><i class="ti-heart"></i></a>
										<span class="list-status">Open</span>
									</div>
								</div>
							</div>
						</div>

						<!-- Single Listing -->
						<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
							<div class="list-grid-layout classical-layout">
								<div class="grid-layout-header">
									<a href="listing-detail.html" class="list-thumb">
										<img src="assets/img/3.jpg" class="img-fluid mx-auto" alt="">
									</a>
									<div class="gl-top-head">
										<div class="pr-rate gl-card">$$$</div>
										<div class="gl-rating gl-card">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
									</div>
									<div class="grid-layout-info">
										<ul>
											<li><i class="ti-headphone"></i> 617-458-0645</li>
											<li><i class="ti-location-pin"></i>3674 Hinkle Lake Road</li>
										</ul>
									</div>
								</div>
								<div class="grid-layout-body">
									<div class="gl-list-author">
										<a href="author-detail.html"><img src="assets/img/team-3.png" alt=""></a>
										<span class="verified-badge"><i class="fa fa-check"></i></span>
									</div>
									<div class="gl-list-caption">
										<h4><a href="listing-detail.html" class="list-title">Slovilla Exx Bars</a></h4>
										<p class="gl-tagline">Innovative cooking, paired with fine wines</p>
									</div>
								</div>
								<div class="grid-layout-footer">
									<a href="http://themezhub.com/">
										<div class="cat-icon-box rounded-circle cbg-1">
											<i class="ti-filter"></i>
										</div>
										<div class="icon-box-text">Cafe & bar</div>
									</a>
									<div class="ft-loke">
										<a href="#"><i class="ti-heart"></i></a>
										<span class="list-status ls-close">Close</span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="row">
								<ul class="pagination">
									<li class="page-item">
									  <a class="page-link" href="#" aria-label="Previous">
										<span class="ti-arrow-left"></span>
										<span class="sr-only">Previous</span>
									  </a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item active"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item">
									  <a class="page-link" href="#" aria-label="Next">
										<span class="ti-arrow-right"></span>
										<span class="sr-only">Next</span>
									  </a>
									</li>
								</ul>
							</div>
						</div>

					</div>

				</div>
			</section>
			<!-- =========================== Recent Listing End ============================================ -->

			<!-- ============================ Sign up Start ================================== -->

@endsection
