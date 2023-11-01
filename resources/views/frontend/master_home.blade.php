<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Resido - Residence & Real Estate HTML Template</title>
        <!-- Custom CSS -->
        <link href="{{ asset('frontend/assets/css/styles.css') }}" rel="stylesheet">
        <!-- Toaster Option -->
        <link href=" {{ asset('frontend/assets/toaster/toastr.css') }}" rel="stylesheet" />
        <!-- Custom Color Option -->
        <link href="{{ asset('frontend/assets/css/colors.css') }}" rel="stylesheet">
    </head>
    <body class="blue-skin">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader">
            <div class="preloader"><span></span><span></span></div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
            @include('frontend.body.header')
            <!-- End Navigation -->
            <div class="clearfix"></div>
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- ============================ Hero Banner  Start================================== -->
            {{-- slider --}}
            <!-- ============================ Hero Banner End ================================== -->
            @yield('home_content')
            <!-- ============================ Footer Start ================================== -->
            @include('frontend.body.footer')
            <!-- ============================ Footer End ================================== -->
            <!-- Log In Modal -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                    <div class="modal-content" id="registermodal">
                        <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                        <div class="modal-body">
                            <h4 class="modal-header-title">Log In</h4>
                            <div class="login-form">
                                <form method="POST" action="{{ route('login') }}">@csrf
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-with-icon">
                                            <input  name="email" type="email" class="form-control" id="userEmail" placeholder="Email" required="">
                                            <i class="ti-email"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-with-icon">
                                            <input name="password" type="password" class="form-control" id="userPassword" autocomplete="current-password"  placeholder="*******" required="">
                                            <i class="ti-unlock"></i>
                                        </div>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="authCheck" name="remember">
                                        <label class="form-check-label" for="authCheck">Remember me</label>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Login</button>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="text-center">
								<p class="mt-5"><i class="ti-user mr-1"></i>Don't Have An Account? <a href="{{ route('register') }}" class="link">Sign Up Here</a></p>
							</div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
            <!-- Sign Up Modal -->
            <div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                    <div class="modal-content" id="sign-up">
                        <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                        <div class="modal-body">
                            <h4 class="modal-header-title">Sign Up</h4>

                                <small class="form-control-feedback">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </small>

                                <small class="form-control-feedback">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </small>

                                <small class="form-control-feedback">
                                    @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </small>

                                <small class="form-control-feedback">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </small>

                                <small class="form-control-feedback">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </small>

                                <small class="form-control-feedback">
                                    @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </small>

                                <small class="form-control-feedback">
                                    @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </small>
                                <small class="form-control-feedback">
                                    @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </small>

                            <div class="login-form">
                                <form method="POST" action="{{ route('register') }}">@csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-with-icon">
                                                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-with-icon">
                                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                                    <i class="ti-email"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-with-icon">
                                                    <input type="tel" name="phone_number"  class="form-control" placeholder="123 546 5847">
                                                    <i class="lni-phone-handset"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-with-icon">
                                                    <select class="form-control" name="gender">
                                                        <option disabled selected value="">-- Select --</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="nonbinary">Non-Binary</option>
                                                    </select>
                                                    <i class="ti-target"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-with-icon">
                                                    <select class="form-control" name="role">
                                                        <option disabled selected value="">-- Select --</option>
                                                        <option value="user">As a Customer</option>
                                                        <option value="agent">As a Agent</option>
                                                    </select>
                                                    <i class="ti-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-with-icon">
                                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-with-icon">
                                                    <input type="password" name="password" class="form-control" placeholder="*******">
                                                    <i class="ti-unlock"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-with-icon">
                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="*******">
                                                    <i class="ti-unlock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="res-box text-left">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember_me">
                                        <label for="remember_me">I've read and accept terms &amp; conditions</label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded" id="submit-btn" disabled>Sign Up</button>
                                    </div>
                                </form>
                            </div>

                            <div class="text-center">
                                <p class="mt-5"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" class="link">Go For LogIn</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                // Function to check if all fields are filled
                function checkFields() {
                    var fullName = $('input[placeholder="Full Name"]').val();
                    var email = $('input[placeholder="Email"]').val();
                    var username = $('input[placeholder="Username"]').val();
                    var password = $('input[placeholder="*******"]').val();
                    var phoneNumber = $('input[placeholder="123 546 5847"]').val();
                    var remember = $('#remember_me').is(':checked');
                    var selectField = $('select.form-control').val();

                    // Enable or disable the submit button based on field values
                    if (fullName !== '' && email !== '' && username !== '' && password !== '' && phoneNumber !== '' && remember && selectField !== '') {
                        $('#submit-btn').prop('disabled', false);
                    } else {
                        $('#submit-btn').prop('disabled', true);
                    }
                }

                // When any input field, select field, or the "agree" checkbox is changed
                $('input[placeholder="Full Name"], input[placeholder="Email"], input[placeholder="Username"], input[placeholder="*******"], input[placeholder="123 546 5847"], #remember_me, select.form-control').on('change keyup', function() {
                    checkFields();
                });
            </script>
            <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/rangeslider.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/select2.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/slider-bg.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/lightbox.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/imagesloaded.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->

    <script>
    // Disable right-click context menu on the select element
    document.getElementById('role').addEventListener('contextmenu', function (event) {
        event.preventDefault();
    });

    // Disable keyboard events (arrow keys and typing) on the select element
    document.getElementById('role').addEventListener('keydown', function (event) {
        event.preventDefault();
    });
</script>

        {{-- sweetalert2 --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('frontend/assets/sweetalert-code/code.js') }}"></script>

        {{-- toaster --}}
        <script  type="text/javascript" src="{{ asset('frontend/assets/toaster/toastr.min.js') }}"></script>
        <script>
            @if (Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch (type) {
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
            }
            @endif
        </script>
    </body>
</html>
