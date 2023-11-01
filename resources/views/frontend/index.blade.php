@extends('frontend.master_home')
@section('home_content')
@include('frontend.body.slider')
@section('title', 'Home')

			<!-- ============================ Step How To Use Start ================================== -->
			<section>
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>How It Works?</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="middle-icon-features-item">
								<div class="icon-features-wrap"><div class="middle-icon-large-features-box f-light-success"><i class="ti-receipt text-success"></i></div></div>
								<div class="middle-icon-features-content">
									<h4>Evaluate Property</h4>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="middle-icon-features-item">
								<div class="icon-features-wrap"><div class="middle-icon-large-features-box f-light-warning"><i class="ti-user text-warning"></i></div></div>
								<div class="middle-icon-features-content">
									<h4>Meet Your Agent</h4>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="middle-icon-features-item remove">
								<div class="icon-features-wrap"><div class="middle-icon-large-features-box f-light-blue"><i class="ti-shield text-blue"></i></div></div>
								<div class="middle-icon-features-content">
									<h4>Close The Deal</h4>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Step How To Use End ====================== -->

			<!-- ================= Explore Property ================= -->
			<section class="bg-light">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Explore Good places</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>

					<div class="row">

						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">

								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-1.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-9.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-10.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
										</div>
									</div>
								</div>

								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Banyon Tree Realty</a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">$7,000</h6>
										</div>
									</div>
								</div>

								<div class="price-features-wrapper">
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bed.svg') }}" width="13" alt=""></div>3 Beds
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bathtub.svg') }}" width="13" alt=""></div>1 Bath
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/move.svg') }}" width="13" alt=""></div>800 sqft
										</div>
									</div>
								</div>

								<div class="listing-detail-footer">
									<div class="footer-first">
										<div class="foot-location"><img src="{{ asset('frontend/assets/img/pin.svg') }}" width="18" alt="">210 Zirak Road, Canada</div>
									</div>
									<div class="footer-flex">
										<a href="property-detail.html" class="prt-view">View</a>
									</div>
								</div>

							</div>
						</div>
						<!-- End Single Property -->

						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">

								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-2.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-11.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-12.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
										</div>
									</div>
								</div>

								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Blue Reef Properties</a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">$8,400</h6>
										</div>
									</div>
								</div>

								<div class="price-features-wrapper">
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bed.svg') }}" width="13" alt=""></div>3 Beds
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bathtub.svg') }}" width="13" alt=""></div>1 Bath
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/move.svg') }}" width="13" alt=""></div>800 sqft
										</div>
									</div>
								</div>

								<div class="listing-detail-footer">
									<div class="footer-first">
										<div class="foot-location"><img src="{{ asset('frontend/assets/img/pin.svg') }}" width="18" alt="">210 Zirak Road, Canada</div>
									</div>
									<div class="footer-flex">
										<a href="property-detail.html" class="prt-view">View</a>
									</div>
								</div>

							</div>
						</div>
						<!-- End Single Property -->

						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">

								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-3.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-13.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-14.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
										</div>
									</div>
								</div>

								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Beacon Homes LLC</a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">$9,200</h6>
										</div>
									</div>
								</div>

								<div class="price-features-wrapper">
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bed.svg') }}" width="13" alt=""></div>3 Beds
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bathtub.svg') }}" width="13" alt=""></div>1 Bath
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/move.svg') }}" width="13" alt=""></div>800 sqft
										</div>
									</div>
								</div>

								<div class="listing-detail-footer">
									<div class="footer-first">
										<div class="foot-location"><img src="{{ asset('frontend/assets/img/pin.svg') }}" width="18" alt="">210 Zirak Road, Canada</div>
									</div>
									<div class="footer-flex">
										<a href="property-detail.html" class="prt-view">View</a>
									</div>
								</div>

							</div>
						</div>
						<!-- End Single Property -->

						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">

								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-4.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-15.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-16.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
										</div>
									</div>
								</div>

								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Bluebell Real Estate</a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">$6,500</h6>
										</div>
									</div>
								</div>

								<div class="price-features-wrapper">
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bed.svg') }}" width="13" alt=""></div>3 Beds
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bathtub.svg') }}" width="13" alt=""></div>1 Bath
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/move.svg') }}" width="13" alt=""></div>800 sqft
										</div>
									</div>
								</div>

								<div class="listing-detail-footer">
									<div class="footer-first">
										<div class="foot-location"><img src="{{ asset('frontend/assets/img/pin.svg') }}" width="18" alt="">210 Zirak Road, Canada</div>
									</div>
									<div class="footer-flex">
										<a href="property-detail.html" class="prt-view">View</a>
									</div>
								</div>

							</div>
						</div>
						<!-- End Single Property -->

						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">

								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-5.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-16.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-17.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
										</div>
									</div>
								</div>

								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Found Property Group</a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">$2,850</h6>
										</div>
									</div>
								</div>

								<div class="price-features-wrapper">
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bed.svg') }}" width="13" alt=""></div>3 Beds
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bathtub.svg') }}" width="13" alt=""></div>1 Bath
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/move.svg') }}" width="13" alt=""></div>800 sqft
										</div>
									</div>
								</div>

								<div class="listing-detail-footer">
									<div class="footer-first">
										<div class="foot-location"><img src="{{ asset('frontend/assets/img/pin.svg') }}" width="18" alt="">210 Zirak Road, Canada</div>
									</div>
									<div class="footer-flex">
										<a href="property-detail.html" class="prt-view">View</a>
									</div>
								</div>

							</div>
						</div>
						<!-- End Single Property -->

						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">

								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-6.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-12.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-25.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
										</div>
									</div>
								</div>

								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Strive Partners Realty</a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">$8,100</h6>
										</div>
									</div>
								</div>

								<div class="price-features-wrapper">
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bed.svg') }}" width="13" alt=""></div>3 Beds
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bathtub.svg') }}" width="13" alt=""></div>1 Bath
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/move.svg') }}" width="13" alt=""></div>800 sqft
										</div>
									</div>
								</div>

								<div class="listing-detail-footer">
									<div class="footer-first">
										<div class="foot-location"><img src="{{ asset('frontend/assets/img/pin.svg') }}" width="18" alt="">210 Zirak Road, Canada</div>
									</div>
									<div class="footer-flex">
										<a href="property-detail.html" class="prt-view">View</a>
									</div>
								</div>

							</div>
						</div>
						<!-- End Single Property -->

					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="listings-list-with-sidebar.html" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
						</div>
					</div>

				</div>
			</section>
			<!-- ================================= Explore Property =============================== -->

			<!-- ============================ Property Location Start ================================== -->
			<section>
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Find By Locations</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>

					<div class="row">

						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('frontend/assets/img/c-1.png') }}" class="img-fluid" alt=""></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">San Francisco, California</h4>
										<span>12 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('frontend/assets/img/c-2.png') }}" class="img-fluid" alt=""></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">Dunao, California</h4>
										<span>142 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('frontend/assets/img/c-3.png') }}" class="img-fluid" alt=""></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">Liverpool, London</h4>
										<span>17 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('frontend/assets/img/c-4.png') }}" class="img-fluid" alt=""></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">San Francisco, New York</h4>
										<span>72 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('frontend/assets/img/c-5.png') }}" class="img-fluid" alt=""></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">New Orleans, Louisiana</h4>
										<span>102 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('frontend/assets/img/c-6.pn') }}g" class="img-fluid" alt=""></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">Los Angeles</h4>
										<span>95 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="listings-list-with-sidebar.html" class="btn btn-theme-light-2 rounded">Browse More Locations</a>
						</div>
					</div>

				</div>
			</section>
			<!-- ============================ Property Location End ================================== -->

			<!-- ============================ Smart Testimonials ================================== -->
			<section class="bg-orange">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Good Reviews by Customers</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">

						<div class="col-lg-12 col-md-12">

							<div class="smart-textimonials smart-center" id="smart-textimonials">

								<!-- Single Item -->
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-blue"><i class="ti-quote-right"></i></div>
													<img src="{{ asset('frontend/assets/img/user-3.jpg') }}" class="img-fluid" alt="">
												</div>
											</div>
										</div>

										<div class="smart-tes-content">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
										</div>

										<div class="st-author-info">
											<h4 class="st-author-title">Adam Williams</h4>
											<span class="st-author-subtitle">CEO Of Microwoft</span>
										</div>
									</div>
								</div>

								<!-- Single Item -->
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-inverse"><i class="ti-quote-right"></i></div>
													<img src="{{ asset('frontend/assets/img/user-8.jpg') }}" class="img-fluid" alt="">
												</div>
											</div>
										</div>

										<div class="smart-tes-content">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
										</div>

										<div class="st-author-info">
											<h4 class="st-author-title">Retha Deowalim</h4>
											<span class="st-author-subtitle">CEO Of Apple</span>
										</div>
									</div>
								</div>

								<!-- Single Item -->
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-purple"><i class="ti-quote-right"></i></div>
													<img src="{{ asset('frontend/assets/img/user-4.jpg') }}" class="img-fluid" alt="">
												</div>
											</div>
										</div>

										<div class="smart-tes-content">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
										</div>

										<div class="st-author-info">
											<h4 class="st-author-title">Sam J. Wasim</h4>
											<span class="st-author-subtitle">Pio Founder</span>
										</div>
									</div>
								</div>

								<!-- Single Item -->
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-primary"><i class="ti-quote-right"></i></div>
													<img src="{{ asset('frontend/assets/img/user-5.jpg') }}" class="img-fluid" alt="">
												</div>
											</div>
										</div>

										<div class="smart-tes-content">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
										</div>

										<div class="st-author-info">
											<h4 class="st-author-title">Usan Gulwarm</h4>
											<span class="st-author-subtitle">CEO Of Facewarm</span>
										</div>
									</div>
								</div>

								<!-- Single Item -->
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-success"><i class="ti-quote-right"></i></div>
													<img src="{{ asset('frontend/assets/img/user-6.jpg') }}" class="img-fluid" alt="">
												</div>
											</div>
										</div>

										<div class="smart-tes-content">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
										</div>

										<div class="st-author-info">
											<h4 class="st-author-title">Shilpa Shethy</h4>
											<span class="st-author-subtitle">CEO Of Zapple</span>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- ============================ Smart Testimonials End ================================== -->

			<!-- ============================ Price Table Start ================================== -->
			<section>
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>See our packages</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>

					<div class="row">

						<!-- Single Package -->
						<div class="col-lg-4 col-md-4">
							<div class="pricing-wrap basic-pr">

								<div class="pricing-header">
									<h4 class="pr-value"><sup>$</sup>49</h4>
									<h4 class="pr-title">Basic Package</h4>
								</div>
								<div class="pricing-body">
									<ul>
										<li class="available">5+ Listings</li>
										<li class="available">Contact With Agent</li>
										<li class="available">3 Month Validity</li>
										<li>7x24 Fully Support</li>
										<li>50GB Space</li>
									</ul>
								</div>
								<div class="pricing-bottom">
									<a href="#" class="btn-pricing">Choose Plan</a>
								</div>

							</div>
						</div>

						<!-- Single Package -->
						<div class="col-lg-4 col-md-4">
							<div class="pricing-wrap platinum-pr recommended">

								<div class="pricing-header">
									<h4 class="pr-value"><sup>$</sup>99</h4>
									<h4 class="pr-title">Platinum Package</h4>
								</div>
								<div class="pricing-body">
									<ul>
										<li class="available">5+ Listings</li>
										<li class="available">Contact With Agent</li>
										<li class="available">3 Month Validity</li>
										<li class="available">7x24 Fully Support</li>
										<li>50GB Space</li>
									</ul>
								</div>
								<div class="pricing-bottom">
									<a href="#" class="btn-pricing">Choose Plan</a>
								</div>

							</div>
						</div>

						<!-- Single Package -->
						<div class="col-lg-4 col-md-4">
							<div class="pricing-wrap standard-pr">

								<div class="pricing-header">
									<h4 class="pr-value"><sup>$</sup>199</h4>
									<h4 class="pr-title">Standard Package</h4>
								</div>
								<div class="pricing-body">
									<ul>
										<li class="available">5+ Listings</li>
										<li class="available">Contact With Agent</li>
										<li class="available">3 Month Validity</li>
										<li class="available">7x24 Fully Support</li>
										<li class="available">50GB Space</li>
									</ul>
								</div>
								<div class="pricing-bottom">
									<a href="#" class="btn-pricing">Choose Plan</a>
								</div>

							</div>
						</div>

					</div>

				</div>
			</section>
			<!-- ============================ Price Table End ================================== -->

			<!-- ============================ Call To Action ================================== -->
			<section class="theme-bg call-to-act-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">

							<div class="call-to-act">
								<div class="call-to-act-head">
									<h3>Want to Become a Real Estate Agent?</h3>
									<span>We'll help you to grow your career and growth.</span>
								</div>
								{{-- <a href="#" class="btn btn-call-to-act">SignUp Today</a> --}}
								<a href="JavaScript:Void(0);"  class="btn btn-call-to-act" data-bs-toggle="modal" data-bs-target="#signup">SignUp Today</a>

							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->

@endsection
