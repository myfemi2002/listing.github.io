<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Femi">
        <meta name="keywords" content="property for sale in ikeja, property for sale in lekki, property for sale in ajah, property for sale in surulere, property for sale in maryland, property for sale in yaba, property for sale in victoria island, property for sale in ojota, property for sale in mende, property for sale in ojodu, property for sale in ogudu, property for sale in anthony village, property for sale in lagos, house for sale in surulere, house for sale in lekki, house for sale in ikeja, house for sale in yaba, real estate agent in lagos, house for sale in ikoyi, house for sale in ojota, house for sale shomolu, house for sale in ketu, house for sale in lagos, real estate in nigeria, flat for sale in lagos, land for sale in lagos, duplex for sale in lagos, office space for sale in lagos, house for sale in berger, nigeria property website, duplex for sale in lagos, house for sale in banana island, real estate agents in lagos, house for sale in nigeria" />
        <meta name="description" content="NewInfo is a Nigerian real estate and property listing website with properties and houses in Nigeria available for rent and sale. We are your online destination for property sales and rentals in Nigeria, offering a wide range of properties including homes, houses, land, shops, offices, and other commercial properties to buy or rent." />
        <title>Login - NewInfo | Real Estate in Nigeria</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- End fonts -->
        <!-- core:css -->
        <link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/demo1/style.min.css') }}">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}">
    </head>
    <body>
        <div class="main-wrapper">
            <div class="page-wrapper full-page">
                <div class="page-content d-flex align-items-center justify-content-center">
                    <div class="row w-100 mx-0 auth-page">
                        <div class="col-md-8 col-xl-6 mx-auto">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-4 pe-md-0">
                                        <div class="auth-side-wrapper">
                                        </div>
                                    </div>
                                    <div class="col-md-8 ps-md-0">
                                        <div class="auth-form-wrapper px-4 py-5">
                                            <a href="#" class="noble-ui-logo d-block mb-2 text-center">Real<span> Estate</span></a>
                                            <h5 class="text-muted fw-normal mb-4 text-center">Welcome back! Log in to your account.</h5>
                                            <small class="form-control-feedback text-center">
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                </small>
                                                <small class="form-control-feedback">
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </small>
                                            <form method="POST" class="forms-sample" action="{{ route('login') }}">@csrf
                                                <div class="mb-3">
                                                    <label for="userEmail" class="form-label">Email address</label>
                                                    <input  name="email" type="email" class="form-control" id="userEmail" placeholder="Email" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="userPassword" class="form-label">Password</label>
                                                    <input name="password" type="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Password">
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="authCheck" name="remember">
                                                    <label class="form-check-label" for="authCheck">Remember me</label>
                                                 </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>

                                                </div>
                                                <a href="{{ route('register') }}" class="d-block mt-3 text-muted text-center">Not a user? Sign up</a>
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
        <!-- core:js -->
        <script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/template.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
    </body>
</html>
