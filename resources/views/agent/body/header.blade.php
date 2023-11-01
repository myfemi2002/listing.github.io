@php
$user = Auth::user();
$status = $user->status;
@endphp
<!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light head-shadow">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="{{ asset('agent/assets/img/logo.png') }}" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">


							<ul class="nav-menu nav-menu-social align-to-right">
								<li>
									<div class="btn-group account-drop">
										<button type="button" class="btn btn-order-by-filt dropdown-toggle" id="showbutton">
											<img src="assets/img/user-5.jpg" class="avater-img" alt="">Hi, {{ $user->name }}
										</button>
										<div class="dropdown-menu pull-right animated flipInX" id="showing">
											<a href="#"><i class="ti-user"></i>My Profile</a>
											<a href="#"><i class="ti-layers"></i>Property List</a>
											<a href="#"><i class="ti-bookmark"></i>Bookmarked Listings</a>
											<a class="active" href="#"><i class="ti-unlock"></i>Change Password</a>
                                            <a class="{{ (request()->is('contact-us')) ? 'active' : '' }}" href="contact-us"><i class="ti-unlock"></i> Change Password </a>
                                            <a href="{{ route('agent.logout') }}"><img src="{{ asset('agent/assets/img/off.svg') }}" class="mr-2" width="17" alt="" />Sign Out</a>
										</div>
									</div>
								</li>
							</ul>

						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
