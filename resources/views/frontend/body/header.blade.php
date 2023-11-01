@php
    if (auth()->check()) {
        $id = auth()->user()->id;
        $userData = App\Models\User::find($id);
    }
@endphp

<div class="top-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6">
                <div class="cn-info">
                    <ul>
                        <li><i class="lni-phone-handset"></i>+2348035543036</li>
                        <li><i class="ti-email"></i>info@newinfo.com.ng</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul class="top-social">
                    <li><a href="#"><i class="lni-facebook"></i></a></li>
                    <li><a href="#"><i class="lni-linkedin"></i></a></li>
                    <li><a href="#"><i class="lni-instagram"></i></a></li>
                    <li><a href="#"><i class="lni-twitter"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
</div>


<div class="header header-light">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="#">
                    <img src="{{ asset('frontend/assets/img/logo.png') }}" class="logo" alt="">
                </a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">


                    <li class="{{ (request()->is('/')) ? 'active' : '' }}"> <a href="/"> Home </a></li>
                    <li class="{{ (request()->is('listing')) ? 'active' : '' }}"> <a href="listing"> Listings </a></li>

                    {{-- <li class="active"><a href="#">Agent<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a class="active" href="#">Become An Agent</a></li>
                            <li><a href="#">Home Layout 2</a></li>
                        </ul>
                    </li> --}}

                    <li class="{{ (request()->is('pricing')) ? 'active' : '' }}"> <a href="pricing"> Pricing </a></li>
                    <li class="{{ (request()->is('blog')) ? 'active' : '' }}"> <a href="blog"> Blog </a></li>
                    <li class="{{ (request()->is('contact-us')) ? 'active' : '' }}"> <a href="contact-us"> Contact </a></li>


                    <li><a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#signup">Sign Up</a></li>

                </ul>
                <ul class="nav-menu nav-menu-social align-to-right">
                    <li>
                        @auth
                        <a href="#" class="text-success">
                            <i class="fas fa-user-circle mr-2"></i> {{ $userData->name }}
                        </a>
                        @else
                        <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="text-success">
                            <i class="fas fa-user-circle mr-2"></i> Sign In
                        </a>
                        @endauth
                    </li>
                    <li class="add-listing theme-bg">
                        <a href="submit-property.html">Add Property</a>
                    </li>
                </ul>



            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
