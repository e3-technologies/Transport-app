@extends('layouts.main')

@section('content')
<!-- ============================ Hero Banner  Start================================== -->
<section class="single-banner" style="background-image:url(assets/img/banner-2.jpg);">
	<div class="finding-overlay op-60"></div>
	<div class="main-banner">
		<div class="container">

			<div class="row">
				<div class="col-sm-12">
					<div class="caption text-center text-white">
						<h2><strong>The Best Way to  <a href="" style="color: white;" class="typewrite run" data-period="2000" data-type='[ "Search for buses", "Compare price", "Book bus ticket" ]'>
		<span class="wrap" style="color: white;"></span>
			</a> </strong></h2>
						<!-- <h2>Discover Your Next Adventure</h2> -->
						<p>Expolore top rated tours, hotels and restaurants around the world</p>
					</div>
				</div>
			</div>

			<form>
				<fieldset class="home-form-1">
					<div class="row no-gutters justify-content-center seo-contact">

						<div class="col-lg-4 col-md-5">
							<div class="form-group">
								<input type="text" class="form-control b-r" placeholder="What are you looking for...">
								<i class="ti-search"></i>
							</div>
						</div>

						<div class="col-lg-3 col-md-4">
							<div class="form-group">
								<input type="text" class="form-control b-r" placeholder="Where...">
								<i class="ti-target"></i>
							</div>
						</div>

						<div class="col-lg-3 col-md-4">
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

						<div class="col-lg-2 col-md-3">
							<button type="submit" class="btn theme-btn seub-btn b-0">FIND JOB</button>
						</div>

					</div>
				</fieldset>
			</form>


		</div>
	</div>
</section>
<!-- ============================ Hero Banner End ================================== -->


<!-- ===========================  How It Works ============================================ -->
<section class="lst">
	<div class="container">

		<div class="row">
			<div class="col text-center">
				<div class="sec-heading mx-auto">
					<h2>How It Works</h2>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 mb-4">
				<div class="features-icon-center">
					<div class="features-icon-center-item">
						<div class="features-icon-center-box"><i class="ti-map-alt"></i></div>
						<div class="features-icon-center-content">
							<h4>Search Interesting Place</h4>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 mb-4">
				<div class="features-icon-center">
					<div class="features-icon-center-item">
						<div class="features-icon-center-box"><i class="ti-email"></i></div>
						<div class="features-icon-center-content">
							<h4>Contact a Few Authors</h4>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 mb-4">
				<div class="features-icon-center">
					<div class="features-icon-center-item">
						<div class="features-icon-center-box"><i class="ti-user"></i></div>
						<div class="features-icon-center-content">
							<h4>Make a Reservation</h4>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- =========================== features End ======================================-->

<!-- =========================== Most Visited Places Start ============================================ -->
<section class="gray">
	<div class="container">

		<div class="row">
			<div class="col text-center">
				<div class="sec-heading mx-auto">
					<h2>Most Travelled Routes</h2>
					<p>Explore curated lists of top restaurants, cafes & shopping around the world by categories.</p>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-lg-8 col-md-8 col-sm-6">
				<div class="city-list-box">
					<a href="search-listing.html" class="city-list" data-background-image="assets/img/city/Texas.jpg">
						<div class="list-overlay"></div>
						<div class="category-box-content">
							<div class="city-names">Lasgos</div>
							<span>70 listings</span>
						</div>
						<div class="category-box-bg" style="background-image: url(assets/img/city/Texas.jpg);"></div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="city-list-box">
					<a href="search-listing.html" class="city-list" data-background-image="assets/img/city/Florida.jpg">
						<div class="list-overlay"></div>
						<div class="category-box-content">
							<div class="city-names">Abuja</div>
							<span>112 listings</span>
						</div>
						<div class="category-box-bg" style="background-image: url(assets/img/city/Florida.jpg);"></div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="city-list-box">
					<a href="search-listing.html" class="city-list" data-background-image="assets/img/city/Hawaii.jpg">
						<div class="list-overlay"></div>
						<div class="category-box-content">
							<div class="city-names">Onisha</div>
							<span>12 listings</span>
						</div>
						<div class="category-box-bg" style="background-image: url(assets/img/city/Hawaii.jpg);"></div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="city-list-box">
					<a href="search-listing.html" class="city-list" data-background-image="assets/img/city/Illinois.jpg">
						<div class="list-overlay"></div>
						<div class="category-box-content">
							<div class="city-names">Jos</div>
							<span>210 listings</span>
						</div>
						<div class="category-box-bg" style="background-image: url(assets/img/city/Illinois.jpg);"></div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="city-list-box">
					<a href="search-listing.html" class="city-list" data-background-image="assets/img/city/Nevada.jpg">
						<div class="list-overlay"></div>
						<div class="category-box-content">
							<div class="city-names">Port-Harcourt</div>
							<span>98 listings</span>
						</div>
						<div class="category-box-bg" style="background-image: url(assets/img/city/Nevada.jpg);"></div>
					</a>
				</div>
			</div>

		</div>

	</div>
</section>
<!-- =========================== Most Visited Places End ============================================ -->


@endsection
