<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>@yield('title') :: Residence & Real Estate </title>
        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/assets/img/favicons/apple-touch-icon-2.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/assets/img/favicons/favicon-32x32-2.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/img/favicons/favicon-16x16-2.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicons/favicon-2.ico')}}">
        <link rel="manifest" href="{{ asset('backend/assets/img/favicons/manifest-2.json')}}">
        <meta name="msapplication-TileImage" content="{{ asset('backend/assets/img/favicons/mstile-150x150.png')}}">
        <meta name="theme-color" content="#ffffff">
        <script src="{{ asset('backend/assets/vendors/imagesloaded/imagesloaded.pkgd.min-1.js')}}"></script>
        <script src="{{ asset('backend/assets/vendors/simplebar/simplebar.min-2.js')}}"></script>
        <script src="{{ asset('backend/assets/js/config-1.js')}}"></script>
        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->

        <link href="{{ asset('backend/assets/vendors/prism/prism-okaidia.css')}}" type="text/css" rel="stylesheet" >
        <link href="{{ asset('backend/assets/vendors/choices/choices.min-2.css')}}" type="text/css" rel="stylesheet" >

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="../../css2-2.css?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link href="{{ asset('backend/assets/vendors/simplebar/simplebar.min-2.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="../../release/v4.0.0/css/line-2.css">
        <link href="{{ asset('backend/assets/css/theme-rtl.min-2.css')}}" type="text/css" rel="stylesheet" id="style-rtl">
        <link href="{{ asset('backend/assets/css/theme.min-2.css')}}" type="text/css" rel="stylesheet" id="style-default">
        <link href="{{ asset('backend/assets/css/user-rtl.min-2.css')}}" type="text/css" rel="stylesheet" id="user-style-rtl">
        <link href="{{ asset('backend/assets/css/user.min-2.css')}}" type="text/css" rel="stylesheet" id="user-style-default">
        <link href=" {{ asset('backend/assets/toaster/toastr.css') }}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
        <script>
            var phoenixIsRTL = window.config.config.phoenixIsRTL;
            if (phoenixIsRTL) {
              var linkDefault = document.getElementById('style-default');
              var userLinkDefault = document.getElementById('user-style-default');
              linkDefault.setAttribute('disabled', true);
              userLinkDefault.setAttribute('disabled', true);
              document.querySelector('html').setAttribute('dir', 'rtl');
            } else {
              var linkRTL = document.getElementById('style-rtl');
              var userLinkRTL = document.getElementById('user-style-rtl');
              linkRTL.setAttribute('disabled', true);
              userLinkRTL.setAttribute('disabled', true);
            }
        </script>
    </head>
    <body>
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <div class="container-fluid px-0" data-layout="container">

                {{-- sidebar starts here --}}
                <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
                    @include('admin.body.sidebar')
                </nav>
                {{-- sidebar ends here --}}

                {{-- narbar-top starts here --}}
                <nav class="navbar navbar-top navbar-expand" id="navbarDefault" style="display:none;">
                    @include('admin.body.topbar')
                </nav>
                {{-- narbar-top ends here --}}


                <nav class="navbar navbar-top navbar-slim navbar-expand" id="topNavSlim" style="display:none;">
                    {{-- <div class="collapse navbar-collapse justify-content-between">
                        <div class="navbar-logo">
                            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                            <a class="navbar-brand navbar-brand" href="index-1.html">phoenix <span class="text-1000 d-none d-sm-inline">slim</span></a>
                        </div>
                        <ul class="navbar-nav navbar-nav-icons flex-row">
                            <li class="nav-item">
                                <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span class="fs--1 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span class="fs--1 fw-bold">Light</span></label></div>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:12px;width:12px;"></span></a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span data-feather="bell" style="height:12px;width:12px;"></span></a>
                                <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                    <div class="card position-relative border-0">
                                        <div class="card-header p-2">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="text-black mb-0">Notificatons1</h5>
                                                <button class="btn btn-link p-0 fs--1 fw-normal" type="button">Jola Mark all as read</button>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="scrollbar-overlay" style="height: 27rem;">
                                                <div class="border-300">
                                                    <div class="p-3 border-300 notification-card position-relative read border-bottom">
                                                        <div class="d-flex align-items-center justify-content-between position-relative">
                                                            <div class="d-flex">
                                                                <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/30-2.webp') }}" alt=""></div>
                                                                <div class="me-3 flex-1">
                                                                    <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                                                                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="font-sans-serif d-none d-sm-block">
                                                                <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                        <div class="d-flex align-items-center justify-content-between position-relative">
                                                            <div class="d-flex">
                                                                <div class="avatar avatar-m status-online me-3">
                                                                    <div class="avatar-name rounded-circle"><span>J</span></div>
                                                                </div>
                                                                <div class="me-3 flex-1">
                                                                    <h4 class="fs--1 text-black">Jane Foster</h4>
                                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="font-sans-serif d-none d-sm-block">
                                                                <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                        <div class="d-flex align-items-center justify-content-between position-relative">
                                                            <div class="d-flex">
                                                                <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="{{ asset('backend/assets/img/team/40x40/avatar-2.webp') }}" alt=""></div>
                                                                <div class="me-3 flex-1">
                                                                    <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                                                                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="font-sans-serif d-none d-sm-block">
                                                                <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-300">
                                                    <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                        <div class="d-flex align-items-center justify-content-between position-relative">
                                                            <div class="d-flex">
                                                                <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/57-2.webp') }}" alt=""></div>
                                                                <div class="me-3 flex-1">
                                                                    <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="font-sans-serif d-none d-sm-block">
                                                                <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                        <div class="d-flex align-items-center justify-content-between position-relative">
                                                            <div class="d-flex">
                                                                <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/59-2.webp') }}" alt=""></div>
                                                                <div class="me-3 flex-1">
                                                                    <h4 class="fs--1 text-black">Herman Carter</h4>
                                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="font-sans-serif d-none d-sm-block">
                                                                <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-300 notification-card position-relative read ">
                                                        <div class="d-flex align-items-center justify-content-between position-relative">
                                                            <div class="d-flex">
                                                                <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/58-2.webp') }}" alt=""></div>
                                                                <div class="me-3 flex-1">
                                                                    <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="font-sans-serif d-none d-sm-block">
                                                                <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0 border-top border-0">
                                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="pages/notifications.html">Notification history</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
                                    <svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                        <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                        <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                        <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                        <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                        <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                        <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                        <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                        <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                                    <div class="card bg-white position-relative border-0">
                                        <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                            <div class="row text-center align-items-center gx-0 gy-0">
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/behance-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance1</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/google-cloud-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/slack-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/gitlab-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/bitbucket-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/google-drive-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/trello-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/figma-2.webp') }}" alt="" width="20">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/twitter-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/pinterest-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/ln-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/google-maps-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/google-photos-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                        <img src="{{ asset('backend/assets/img/nav-icons/spotify-2.webp') }}" alt="" width="30">
                                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs--2"></span></a>
                                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                                    <div class="card position-relative border-0">
                                        <div class="card-body p-0">
                                            <div class="text-center pt-4 pb-3">
                                                <div class="avatar avatar-xl ">
                                                    <img class="rounded-circle " src="{{ asset('backend/assets/img/team/72x72/57-2.webp') }}" alt="">
                                                </div>
                                                <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                            </div>
                                            <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status"></div>
                                        </div>
                                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                                                <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                                            </ul>
                                        </div>
                                        <div class="card-footer p-0 border-top">
                                            <ul class="nav d-flex flex-column my-3">
                                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                            </ul>
                                            <hr>
                                            <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> --}}
                </nav>
                {{-- display --}}
                <nav class="navbar navbar-top navbar-expand-lg" id="navbarTop" style="display:none;">
                    {{-- <div class="navbar-logo">
                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                        <a class="navbar-brand me-1 me-sm-3" href="index-1.html">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('backend/assets/img/icons/logo-1.png') }}" alt="phoenix" width="27">
                                    <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
                        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hovar="data-dropdown-on-hovar">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item active" href="index-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard/project-management-5.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard/crm-2.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/social/feed-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-cube"></span>Apps</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/add-product-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/products-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/customers-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/customer-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/orders-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/order-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/refund-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/homepage-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/products-filter-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/cart-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/checkout-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/shipping-info-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/profile-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/favourite-stores-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/wishlist-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/order-tracking-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/invoice-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/leads-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/lead-details-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/reports-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/add-contact-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/create-new-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-list-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-card-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-board-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/todo-list-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-details-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/chat.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/email/inbox.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/email/email-detail-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/email/compose-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/events/create-an-event-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/events/event-detail.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/social/profile.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/social/settings-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/calendar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item" href="pages/starter-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/faq.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="help-circle"></span>Faq</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/landing/default-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/landing/alternate-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/pricing/pricing-column.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/pricing/pricing-grid-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/notifications.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/members-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/timeline-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/errors/404-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/errors/500-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-in-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-in.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-in-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="demo/vertical-sidenav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/dark-mode-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/sidenav-collapse-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/darknav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/topnav-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/navbar-top-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/navbar-top-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/horizontal-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/combo-nav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/combo-nav-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
                                <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                                    <div class="border-0 scrollbar" style="max-height: 60vh;">
                                        <div class="px-3 pt-4 pb-3 img-dropdown">
                                            <div class="row gx-4 gy-5">
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Components</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/components/accordion-1.html">Accordion</a><a class="dropdown-link" href="modules/components/avatar-1.html">Avatar</a><a class="dropdown-link" href="modules/components/alerts-1.html">Alerts</a><a class="dropdown-link" href="modules/components/badge-1.html">Badge</a><a class="dropdown-link" href="modules/components/breadcrumb-1.html">Breadcrumb</a><a class="dropdown-link" href="modules/components/button-1.html">Buttons</a><a class="dropdown-link" href="modules/components/calendar-1.html">Calendar</a><a class="dropdown-link" href="modules/components/card-1.html">Card</a><a class="dropdown-link" href="modules/components/carousel/bootstrap-1.html">Bootstrap</a><a class="dropdown-link" href="modules/components/carousel/swiper-1.html">Swiper</a><a class="dropdown-link" href="modules/components/collapse-1.html">Collapse</a><a class="dropdown-link" href="modules/components/dropdown-1.html">Dropdown</a><a class="dropdown-link" href="modules/components/list-group-1.html">List group</a><a class="dropdown-link" href="modules/components/modal-1.html">Modals</a><a class="dropdown-link" href="modules/components/navs-and-tabs/navs-1.html">Navs</a><a class="dropdown-link" href="modules/components/navs-and-tabs/navbar-1.html">Navbar</a><a class="dropdown-link" href="modules/components/navs-and-tabs/tabs-1.html">Tabs</a><a class="dropdown-link" href="modules/components/offcanvas-1.html">Offcanvas</a><a class="dropdown-link" href="modules/components/progress-bar-1.html">Progress bar</a><a class="dropdown-link" href="modules/components/placeholder-1.html">Placeholder</a><a class="dropdown-link" href="modules/components/pagination-1.html">Pagination</a><a class="dropdown-link" href="modules/components/popovers-1.html">Popovers</a><a class="dropdown-link" href="modules/components/scrollspy-1.html">Scrollspy</a><a class="dropdown-link" href="modules/components/spinners-1.html">Spinners</a><a class="dropdown-link" href="modules/components/toast-1.html">Toast</a><a class="dropdown-link" href="modules/components/tooltips-1.html">Tooltips</a>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Forms</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/forms/basic/form-control-1.html">Form control</a><a class="dropdown-link" href="modules/forms/basic/input-group-1.html">Input group</a><a class="dropdown-link" href="modules/forms/basic/select-1.html">Select</a><a class="dropdown-link" href="modules/forms/basic/checks-1.html">Checks</a><a class="dropdown-link" href="modules/forms/basic/range-1.html">Range</a><a class="dropdown-link" href="modules/forms/basic/floating-labels-1.html">Floating labels</a><a class="dropdown-link" href="modules/forms/basic/layout-1.html">Layout</a><a class="dropdown-link" href="modules/forms/advance/advance-select-1.html">Advance select</a><a class="dropdown-link" href="modules/forms/advance/date-picker-1.html">Date picker</a><a class="dropdown-link" href="modules/forms/advance/editor-1.html">Editor</a><a class="dropdown-link" href="modules/forms/advance/file-uploader-1.html">File uploader</a><a class="dropdown-link" href="modules/forms/advance/rating-1.html">Rating</a><a class="dropdown-link" href="modules/forms/validation-1.html">Validation</a><a class="dropdown-link" href="modules/forms/wizard-1.html">Wizard</a>
                                                    <div class="dropdown-item-group mt-5">
                                                        <span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Icons</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/icons/feather-1.html">Feather</a><a class="dropdown-link" href="modules/icons/font-awesome-1.html">Font awesome</a><a class="dropdown-link" href="modules/icons/unicons-1.html">Unicons</a>
                                                    <div class="dropdown-item-group mt-5">
                                                        <span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Tables</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/tables/basic-tables-1.html">Basic tables</a><a class="dropdown-link" href="modules/tables/advance-tables-1.html">Advance tables</a><a class="dropdown-link" href="modules/tables/bulk-select-1.html">Bulk Select</a>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Utilities</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/utilities/background-1.html">Background</a><a class="dropdown-link" href="modules/utilities/borders-1.html">Borders</a><a class="dropdown-link" href="modules/utilities/colors-1.html">Colors</a><a class="dropdown-link" href="modules/utilities/display-1.html">Display</a><a class="dropdown-link" href="modules/utilities/flex-1.html">Flex</a><a class="dropdown-link" href="modules/utilities/float-1.html">Float</a><a class="dropdown-link" href="modules/utilities/interactions-1.html">Interactions</a><a class="dropdown-link" href="modules/utilities/opacity-1.html">Opacity</a><a class="dropdown-link" href="modules/utilities/overflow-1.html">Overflow</a><a class="dropdown-link" href="modules/utilities/position-1.html">Position</a><a class="dropdown-link" href="modules/utilities/shadows-1.html">Shadows</a><a class="dropdown-link" href="modules/utilities/sizing-1.html">Sizing</a><a class="dropdown-link" href="modules/utilities/spacing-1.html">Spacing</a><a class="dropdown-link" href="modules/utilities/typography-1.html">Typography</a><a class="dropdown-link" href="modules/utilities/vertical-align-1.html">Vertical align</a><a class="dropdown-link" href="modules/utilities/visibility-1.html">Visibility</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item" href="documentation/getting-started.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-inside">
                                        <a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="documentation/customization/styling-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/customization/plugin-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-inside">
                                        <a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/vertical-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/horizontal-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/combo-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="documentation/gulp-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp fs-0 ms-1 me-1"></span>Gulp</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="documentation/design-file-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="changelog.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="showcase-2.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons flex-row">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell" style="height:20px;width:20px;"></span></a>
                            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                <div class="card position-relative border-0">
                                    <div class="card-header p-2">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-black mb-0">Notificatons2</h5>
                                            <button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="scrollbar-overlay" style="height: 27rem;">
                                            <div class="border-300">
                                                <div class="p-3 border-300 notification-card position-relative read border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/30-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3">
                                                                <div class="avatar-name rounded-circle"><span>J</span></div>
                                                            </div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="{{ asset('backend/assets/img/team/40x40/avatar-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-300">
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/57-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/59-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative read ">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/58-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0 border-top border-0">
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="pages/notifications.html">Notification history</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                                <div class="card bg-white position-relative border-0">
                                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                        <div class="row text-center align-items-center gx-0 gy-0">
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/behance-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance2</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-cloud-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/slack-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/gitlab-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/bitbucket-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-drive-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/trello-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/figma-2.webp') }}" alt="" width="20">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/twitter-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/pinterest-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/ln-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-maps-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-photos-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/spotify-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-l ">
                                    <img class="rounded-circle " src="{{ asset('backend/assets/img/team/40x40/57-2.webp') }}" alt="">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">
                                    <div class="card-body p-0">
                                        <div class="text-center pt-4 pb-3">
                                            <div class="avatar avatar-xl ">
                                                <img class="rounded-circle " src="{{ asset('backend/assets/img/team/72x72/57-2.webp') }}" alt="">
                                            </div>
                                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                        </div>
                                        <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status"></div>
                                    </div>
                                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                                        <ul class="nav d-flex flex-column mb-2 pb-1">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-0 border-top">
                                        <ul class="nav d-flex flex-column my-3">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                        </ul>
                                        <hr>
                                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul> --}}
                </nav>
                {{-- display --}}
                <nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarTopSlim" style="display:none;">
                    {{-- <div class="navbar-logo">
                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                        <a class="navbar-brand navbar-brand" href="index-1.html">phoenix <span class="text-1000 d-none d-sm-inline">slim</span></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
                        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hovar="data-dropdown-on-hovar">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item active" href="index-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard/project-management-5.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard/crm-2.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/social/feed-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-cube"></span>Apps</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/add-product-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/products-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/customers-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/customer-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/orders-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/order-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/refund-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/homepage-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/products-filter-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/cart-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/checkout-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/shipping-info-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/profile-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/favourite-stores-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/wishlist-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/order-tracking-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/invoice-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/leads-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/lead-details-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/reports-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/add-contact-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/create-new-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-list-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-card-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-board-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/todo-list-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-details-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/chat.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/email/inbox.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/email/email-detail-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/email/compose-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/events/create-an-event-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/events/event-detail.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/social/profile.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/social/settings-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/calendar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item" href="pages/starter-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/faq.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="help-circle"></span>Faq</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/landing/default-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/landing/alternate-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/pricing/pricing-column.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/pricing/pricing-grid-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/notifications.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/members-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/timeline-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/errors/404-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/errors/500-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-in-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-in.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-in-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="demo/vertical-sidenav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/dark-mode-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/sidenav-collapse-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/darknav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/topnav-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/navbar-top-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/navbar-top-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/horizontal-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/combo-nav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/combo-nav-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
                                <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                                    <div class="border-0 scrollbar" style="max-height: 60vh;">
                                        <div class="px-3 pt-4 pb-3 img-dropdown">
                                            <div class="row gx-4 gy-5">
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Components</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/components/accordion-1.html">Accordion</a><a class="dropdown-link" href="modules/components/avatar-1.html">Avatar</a><a class="dropdown-link" href="modules/components/alerts-1.html">Alerts</a><a class="dropdown-link" href="modules/components/badge-1.html">Badge</a><a class="dropdown-link" href="modules/components/breadcrumb-1.html">Breadcrumb</a><a class="dropdown-link" href="modules/components/button-1.html">Buttons</a><a class="dropdown-link" href="modules/components/calendar-1.html">Calendar</a><a class="dropdown-link" href="modules/components/card-1.html">Card</a><a class="dropdown-link" href="modules/components/carousel/bootstrap-1.html">Bootstrap</a><a class="dropdown-link" href="modules/components/carousel/swiper-1.html">Swiper</a><a class="dropdown-link" href="modules/components/collapse-1.html">Collapse</a><a class="dropdown-link" href="modules/components/dropdown-1.html">Dropdown</a><a class="dropdown-link" href="modules/components/list-group-1.html">List group</a><a class="dropdown-link" href="modules/components/modal-1.html">Modals</a><a class="dropdown-link" href="modules/components/navs-and-tabs/navs-1.html">Navs</a><a class="dropdown-link" href="modules/components/navs-and-tabs/navbar-1.html">Navbar</a><a class="dropdown-link" href="modules/components/navs-and-tabs/tabs-1.html">Tabs</a><a class="dropdown-link" href="modules/components/offcanvas-1.html">Offcanvas</a><a class="dropdown-link" href="modules/components/progress-bar-1.html">Progress bar</a><a class="dropdown-link" href="modules/components/placeholder-1.html">Placeholder</a><a class="dropdown-link" href="modules/components/pagination-1.html">Pagination</a><a class="dropdown-link" href="modules/components/popovers-1.html">Popovers</a><a class="dropdown-link" href="modules/components/scrollspy-1.html">Scrollspy</a><a class="dropdown-link" href="modules/components/spinners-1.html">Spinners</a><a class="dropdown-link" href="modules/components/toast-1.html">Toast</a><a class="dropdown-link" href="modules/components/tooltips-1.html">Tooltips</a>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Forms</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/forms/basic/form-control-1.html">Form control</a><a class="dropdown-link" href="modules/forms/basic/input-group-1.html">Input group</a><a class="dropdown-link" href="modules/forms/basic/select-1.html">Select</a><a class="dropdown-link" href="modules/forms/basic/checks-1.html">Checks</a><a class="dropdown-link" href="modules/forms/basic/range-1.html">Range</a><a class="dropdown-link" href="modules/forms/basic/floating-labels-1.html">Floating labels</a><a class="dropdown-link" href="modules/forms/basic/layout-1.html">Layout</a><a class="dropdown-link" href="modules/forms/advance/advance-select-1.html">Advance select</a><a class="dropdown-link" href="modules/forms/advance/date-picker-1.html">Date picker</a><a class="dropdown-link" href="modules/forms/advance/editor-1.html">Editor</a><a class="dropdown-link" href="modules/forms/advance/file-uploader-1.html">File uploader</a><a class="dropdown-link" href="modules/forms/advance/rating-1.html">Rating</a><a class="dropdown-link" href="modules/forms/validation-1.html">Validation</a><a class="dropdown-link" href="modules/forms/wizard-1.html">Wizard</a>
                                                    <div class="dropdown-item-group mt-5">
                                                        <span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Icons</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/icons/feather-1.html">Feather</a><a class="dropdown-link" href="modules/icons/font-awesome-1.html">Font awesome</a><a class="dropdown-link" href="modules/icons/unicons-1.html">Unicons</a>
                                                    <div class="dropdown-item-group mt-5">
                                                        <span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Tables</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/tables/basic-tables-1.html">Basic tables</a><a class="dropdown-link" href="modules/tables/advance-tables-1.html">Advance tables</a><a class="dropdown-link" href="modules/tables/bulk-select-1.html">Bulk Select</a>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Utilities</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/utilities/background-1.html">Background</a><a class="dropdown-link" href="modules/utilities/borders-1.html">Borders</a><a class="dropdown-link" href="modules/utilities/colors-1.html">Colors</a><a class="dropdown-link" href="modules/utilities/display-1.html">Display</a><a class="dropdown-link" href="modules/utilities/flex-1.html">Flex</a><a class="dropdown-link" href="modules/utilities/float-1.html">Float</a><a class="dropdown-link" href="modules/utilities/interactions-1.html">Interactions</a><a class="dropdown-link" href="modules/utilities/opacity-1.html">Opacity</a><a class="dropdown-link" href="modules/utilities/overflow-1.html">Overflow</a><a class="dropdown-link" href="modules/utilities/position-1.html">Position</a><a class="dropdown-link" href="modules/utilities/shadows-1.html">Shadows</a><a class="dropdown-link" href="modules/utilities/sizing-1.html">Sizing</a><a class="dropdown-link" href="modules/utilities/spacing-1.html">Spacing</a><a class="dropdown-link" href="modules/utilities/typography-1.html">Typography</a><a class="dropdown-link" href="modules/utilities/vertical-align-1.html">Vertical align</a><a class="dropdown-link" href="modules/utilities/visibility-1.html">Visibility</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item" href="documentation/getting-started.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-inside">
                                        <a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="documentation/customization/styling-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/customization/plugin-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-inside">
                                        <a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/vertical-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/horizontal-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/combo-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="documentation/gulp-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp fs-0 ms-1 me-1"></span>Gulp</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="documentation/design-file-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="changelog.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="showcase-2.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons flex-row">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span class="fs--1 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span class="fs--1 fw-bold">Light</span></label></div>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:12px;width:12px;"></span></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span data-feather="bell" style="height:12px;width:12px;"></span></a>
                            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                <div class="card position-relative border-0">
                                    <div class="card-header p-2">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-black mb-0">Notificatons3</h5>
                                            <button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="scrollbar-overlay" style="height: 27rem;">
                                            <div class="border-300">
                                                <div class="p-3 border-300 notification-card position-relative read border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/30-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3">
                                                                <div class="avatar-name rounded-circle"><span>J</span></div>
                                                            </div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="assets/img/team/40x40/avatar-2.webp" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-300">
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/57-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/59-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative read ">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/58-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0 border-top border-0">
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="pages/notifications.html">Notification history</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
                                <svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                                <div class="card bg-white position-relative border-0">
                                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                        <div class="row text-center align-items-center gx-0 gy-0">
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/behance-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance3</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-cloud-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/slack-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/gitlab-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/bitbucket-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-drive-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/trello-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/figma-2.webp') }}" alt="" width="20">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/twitter-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/pinterest-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/ln-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-maps-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-photos-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/spotify-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs--2"></span></a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">
                                    <div class="card-body p-0">
                                        <div class="text-center pt-4 pb-3">
                                            <div class="avatar avatar-xl ">
                                                <img class="rounded-circle " src="{{ asset('backend/assets/img/team/72x72/57-2.webp') }}" alt="">
                                            </div>
                                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                        </div>
                                        <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status"></div>
                                    </div>
                                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                                        <ul class="nav d-flex flex-column mb-2 pb-1">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-0 border-top">
                                        <ul class="nav d-flex flex-column my-3">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                        </ul>
                                        <hr>
                                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul> --}}
                </nav>
                {{-- display --}}
                <nav class="navbar navbar-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
                    {{-- <div class="navbar-logo">
                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                        <a class="navbar-brand me-1 me-sm-3" href="index-1.html">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('backend/assets/img/icons/logo-1.png') }}" alt="phoenix" width="27">
                                    <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
                        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hovar="data-dropdown-on-hovar">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item active" href="index-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard/project-management-5.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard/crm-2.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/social/feed-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-cube"></span>Apps</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/add-product-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/products-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/customers-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/customer-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/orders-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/order-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/refund-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/homepage-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/products-filter-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/cart-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/checkout-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/shipping-info-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/profile-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/favourite-stores-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/wishlist-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/order-tracking-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/invoice-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/leads-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/lead-details-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/reports-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/add-contact-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/create-new-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-list-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-card-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-board-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/todo-list-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-details-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/chat.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/email/inbox.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/email/email-detail-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/email/compose-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/events/create-an-event-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/events/event-detail.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/social/profile.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/social/settings-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/calendar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item" href="pages/starter-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/faq.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="help-circle"></span>Faq</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/landing/default-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/landing/alternate-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/pricing/pricing-column.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/pricing/pricing-grid-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/notifications.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/members-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/timeline-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/errors/404-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/errors/500-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-in-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-in.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-in-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="demo/vertical-sidenav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/dark-mode-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/sidenav-collapse-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/darknav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/topnav-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/navbar-top-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/navbar-top-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/horizontal-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/combo-nav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/combo-nav-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
                                <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                                    <div class="border-0 scrollbar" style="max-height: 60vh;">
                                        <div class="px-3 pt-4 pb-3 img-dropdown">
                                            <div class="row gx-4 gy-5">
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Components</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/components/accordion-1.html">Accordion</a><a class="dropdown-link" href="modules/components/avatar-1.html">Avatar</a><a class="dropdown-link" href="modules/components/alerts-1.html">Alerts</a><a class="dropdown-link" href="modules/components/badge-1.html">Badge</a><a class="dropdown-link" href="modules/components/breadcrumb-1.html">Breadcrumb</a><a class="dropdown-link" href="modules/components/button-1.html">Buttons</a><a class="dropdown-link" href="modules/components/calendar-1.html">Calendar</a><a class="dropdown-link" href="modules/components/card-1.html">Card</a><a class="dropdown-link" href="modules/components/carousel/bootstrap-1.html">Bootstrap</a><a class="dropdown-link" href="modules/components/carousel/swiper-1.html">Swiper</a><a class="dropdown-link" href="modules/components/collapse-1.html">Collapse</a><a class="dropdown-link" href="modules/components/dropdown-1.html">Dropdown</a><a class="dropdown-link" href="modules/components/list-group-1.html">List group</a><a class="dropdown-link" href="modules/components/modal-1.html">Modals</a><a class="dropdown-link" href="modules/components/navs-and-tabs/navs-1.html">Navs</a><a class="dropdown-link" href="modules/components/navs-and-tabs/navbar-1.html">Navbar</a><a class="dropdown-link" href="modules/components/navs-and-tabs/tabs-1.html">Tabs</a><a class="dropdown-link" href="modules/components/offcanvas-1.html">Offcanvas</a><a class="dropdown-link" href="modules/components/progress-bar-1.html">Progress bar</a><a class="dropdown-link" href="modules/components/placeholder-1.html">Placeholder</a><a class="dropdown-link" href="modules/components/pagination-1.html">Pagination</a><a class="dropdown-link" href="modules/components/popovers-1.html">Popovers</a><a class="dropdown-link" href="modules/components/scrollspy-1.html">Scrollspy</a><a class="dropdown-link" href="modules/components/spinners-1.html">Spinners</a><a class="dropdown-link" href="modules/components/toast-1.html">Toast</a><a class="dropdown-link" href="modules/components/tooltips-1.html">Tooltips</a>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Forms</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/forms/basic/form-control-1.html">Form control</a><a class="dropdown-link" href="modules/forms/basic/input-group-1.html">Input group</a><a class="dropdown-link" href="modules/forms/basic/select-1.html">Select</a><a class="dropdown-link" href="modules/forms/basic/checks-1.html">Checks</a><a class="dropdown-link" href="modules/forms/basic/range-1.html">Range</a><a class="dropdown-link" href="modules/forms/basic/floating-labels-1.html">Floating labels</a><a class="dropdown-link" href="modules/forms/basic/layout-1.html">Layout</a><a class="dropdown-link" href="modules/forms/advance/advance-select-1.html">Advance select</a><a class="dropdown-link" href="modules/forms/advance/date-picker-1.html">Date picker</a><a class="dropdown-link" href="modules/forms/advance/editor-1.html">Editor</a><a class="dropdown-link" href="modules/forms/advance/file-uploader-1.html">File uploader</a><a class="dropdown-link" href="modules/forms/advance/rating-1.html">Rating</a><a class="dropdown-link" href="modules/forms/validation-1.html">Validation</a><a class="dropdown-link" href="modules/forms/wizard-1.html">Wizard</a>
                                                    <div class="dropdown-item-group mt-5">
                                                        <span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Icons</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/icons/feather-1.html">Feather</a><a class="dropdown-link" href="modules/icons/font-awesome-1.html">Font awesome</a><a class="dropdown-link" href="modules/icons/unicons-1.html">Unicons</a>
                                                    <div class="dropdown-item-group mt-5">
                                                        <span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Tables</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/tables/basic-tables-1.html">Basic tables</a><a class="dropdown-link" href="modules/tables/advance-tables-1.html">Advance tables</a><a class="dropdown-link" href="modules/tables/bulk-select-1.html">Bulk Select</a>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Utilities</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/utilities/background-1.html">Background</a><a class="dropdown-link" href="modules/utilities/borders-1.html">Borders</a><a class="dropdown-link" href="modules/utilities/colors-1.html">Colors</a><a class="dropdown-link" href="modules/utilities/display-1.html">Display</a><a class="dropdown-link" href="modules/utilities/flex-1.html">Flex</a><a class="dropdown-link" href="modules/utilities/float-1.html">Float</a><a class="dropdown-link" href="modules/utilities/interactions-1.html">Interactions</a><a class="dropdown-link" href="modules/utilities/opacity-1.html">Opacity</a><a class="dropdown-link" href="modules/utilities/overflow-1.html">Overflow</a><a class="dropdown-link" href="modules/utilities/position-1.html">Position</a><a class="dropdown-link" href="modules/utilities/shadows-1.html">Shadows</a><a class="dropdown-link" href="modules/utilities/sizing-1.html">Sizing</a><a class="dropdown-link" href="modules/utilities/spacing-1.html">Spacing</a><a class="dropdown-link" href="modules/utilities/typography-1.html">Typography</a><a class="dropdown-link" href="modules/utilities/vertical-align-1.html">Vertical align</a><a class="dropdown-link" href="modules/utilities/visibility-1.html">Visibility</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item" href="documentation/getting-started.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-inside">
                                        <a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="documentation/customization/styling-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/customization/plugin-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-inside">
                                        <a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/vertical-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/horizontal-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/combo-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="documentation/gulp-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp fs-0 ms-1 me-1"></span>Gulp</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="documentation/design-file-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="changelog.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="showcase-2.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons flex-row">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell" style="height:20px;width:20px;"></span></a>
                            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                <div class="card position-relative border-0">
                                    <div class="card-header p-2">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-black mb-0">Notificatons4</h5>
                                            <button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="scrollbar-overlay" style="height: 27rem;">
                                            <div class="border-300">
                                                <div class="p-3 border-300 notification-card position-relative read border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/30-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3">
                                                                <div class="avatar-name rounded-circle"><span>J</span></div>
                                                            </div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="{{ asset('backend/assets/img/team/40x40/avatar-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-300">
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/57-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/59-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative read ">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/58-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0 border-top border-0">
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="pages/notifications.html">Notification history</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                                <div class="card bg-white position-relative border-0">
                                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                        <div class="row text-center align-items-center gx-0 gy-0">
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/behance-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance4</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-cloud-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/slack-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/gitlab-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/bitbucket-2.web')}}p" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-drive-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/trello-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/figma-2.webp')}}" alt="" width="20">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/twitter-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/pinterest-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/ln-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-maps-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-photos-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/spotify-2.webp')}}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-l ">
                                    <img class="rounded-circle " src="{{ asset('backend/assets/img/team/40x40/57-2.webp') }}" alt="">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">
                                    <div class="card-body p-0">
                                        <div class="text-center pt-4 pb-3">
                                            <div class="avatar avatar-xl ">
                                                <img class="rounded-circle " src="{{ asset('backend/assets/img/team/72x72/57-2.webp')}}" alt="">
                                            </div>
                                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                        </div>
                                        <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status"></div>
                                    </div>
                                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                                        <ul class="nav d-flex flex-column mb-2 pb-1">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-0 border-top">
                                        <ul class="nav d-flex flex-column my-3">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                        </ul>
                                        <hr>
                                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul> --}}
                </nav>
                {{-- display --}}
                <nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarComboSlim" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
                    {{-- <div class="navbar-logo">
                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                        <a class="navbar-brand navbar-brand" href="index-1.html">phoenix <span class="text-1000 d-none d-sm-inline">slim</span></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
                        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hovar="data-dropdown-on-hovar">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item active" href="index-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard/project-management-5.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard/crm-2.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/social/feed-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-cube"></span>Apps</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/add-product-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/products-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/customers-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/customer-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/orders-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/order-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/admin/refund-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/homepage-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/products-filter-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/cart-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/checkout-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/shipping-info-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/profile-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/favourite-stores-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/wishlist-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/order-tracking-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="apps/e-commerce/landing/invoice-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/leads-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/lead-details-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/reports-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/crm/add-contact-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/create-new-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-list-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-card-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-board-view-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/todo-list-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/project-management/project-details-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/chat.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/email/inbox.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/email/email-detail-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/email/compose-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/events/create-an-event-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/events/event-detail.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="apps/social/profile.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps/social/settings-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="apps/calendar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item" href="pages/starter-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/faq.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="help-circle"></span>Faq</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/landing/default-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/landing/alternate-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/pricing/pricing-column.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/pricing/pricing-grid-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/notifications.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/members-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/timeline-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pages/errors/404-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages/errors/500-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-in-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/simple/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-in.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/split/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-in-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-up-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/sign-out-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/forgot-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/reset-password-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="pages/authentication/card/lock-screen-1.html">
                                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="demo/vertical-sidenav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/dark-mode-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/sidenav-collapse-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/darknav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/topnav-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/navbar-top-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/navbar-top-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/horizontal-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/combo-nav-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="demo/combo-nav-slim-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
                                <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                                    <div class="border-0 scrollbar" style="max-height: 60vh;">
                                        <div class="px-3 pt-4 pb-3 img-dropdown">
                                            <div class="row gx-4 gy-5">
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Components</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/components/accordion-1.html">Accordion</a><a class="dropdown-link" href="modules/components/avatar-1.html">Avatar</a><a class="dropdown-link" href="modules/components/alerts-1.html">Alerts</a><a class="dropdown-link" href="modules/components/badge-1.html">Badge</a><a class="dropdown-link" href="modules/components/breadcrumb-1.html">Breadcrumb</a><a class="dropdown-link" href="modules/components/button-1.html">Buttons</a><a class="dropdown-link" href="modules/components/calendar-1.html">Calendar</a><a class="dropdown-link" href="modules/components/card-1.html">Card</a><a class="dropdown-link" href="modules/components/carousel/bootstrap-1.html">Bootstrap</a><a class="dropdown-link" href="modules/components/carousel/swiper-1.html">Swiper</a><a class="dropdown-link" href="modules/components/collapse-1.html">Collapse</a><a class="dropdown-link" href="modules/components/dropdown-1.html">Dropdown</a><a class="dropdown-link" href="modules/components/list-group-1.html">List group</a><a class="dropdown-link" href="modules/components/modal-1.html">Modals</a><a class="dropdown-link" href="modules/components/navs-and-tabs/navs-1.html">Navs</a><a class="dropdown-link" href="modules/components/navs-and-tabs/navbar-1.html">Navbar</a><a class="dropdown-link" href="modules/components/navs-and-tabs/tabs-1.html">Tabs</a><a class="dropdown-link" href="modules/components/offcanvas-1.html">Offcanvas</a><a class="dropdown-link" href="modules/components/progress-bar-1.html">Progress bar</a><a class="dropdown-link" href="modules/components/placeholder-1.html">Placeholder</a><a class="dropdown-link" href="modules/components/pagination-1.html">Pagination</a><a class="dropdown-link" href="modules/components/popovers-1.html">Popovers</a><a class="dropdown-link" href="modules/components/scrollspy-1.html">Scrollspy</a><a class="dropdown-link" href="modules/components/spinners-1.html">Spinners</a><a class="dropdown-link" href="modules/components/toast-1.html">Toast</a><a class="dropdown-link" href="modules/components/tooltips-1.html">Tooltips</a>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Forms</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/forms/basic/form-control-1.html">Form control</a><a class="dropdown-link" href="modules/forms/basic/input-group-1.html">Input group</a><a class="dropdown-link" href="modules/forms/basic/select-1.html">Select</a><a class="dropdown-link" href="modules/forms/basic/checks-1.html">Checks</a><a class="dropdown-link" href="modules/forms/basic/range-1.html">Range</a><a class="dropdown-link" href="modules/forms/basic/floating-labels-1.html">Floating labels</a><a class="dropdown-link" href="modules/forms/basic/layout-1.html">Layout</a><a class="dropdown-link" href="modules/forms/advance/advance-select-1.html">Advance select</a><a class="dropdown-link" href="modules/forms/advance/date-picker-1.html">Date picker</a><a class="dropdown-link" href="modules/forms/advance/editor-1.html">Editor</a><a class="dropdown-link" href="modules/forms/advance/file-uploader-1.html">File uploader</a><a class="dropdown-link" href="modules/forms/advance/rating-1.html">Rating</a><a class="dropdown-link" href="modules/forms/validation-1.html">Validation</a><a class="dropdown-link" href="modules/forms/wizard-1.html">Wizard</a>
                                                    <div class="dropdown-item-group mt-5">
                                                        <span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Icons</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/icons/feather-1.html">Feather</a><a class="dropdown-link" href="modules/icons/font-awesome-1.html">Font awesome</a><a class="dropdown-link" href="modules/icons/unicons-1.html">Unicons</a>
                                                    <div class="dropdown-item-group mt-5">
                                                        <span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Tables</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/tables/basic-tables-1.html">Basic tables</a><a class="dropdown-link" href="modules/tables/advance-tables-1.html">Advance tables</a><a class="dropdown-link" href="modules/tables/bulk-select-1.html">Bulk Select</a>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                                                        <h6 class="dropdown-item-title">Utilities</h6>
                                                    </div>
                                                    <a class="dropdown-link" href="modules/utilities/background-1.html">Background</a><a class="dropdown-link" href="modules/utilities/borders-1.html">Borders</a><a class="dropdown-link" href="modules/utilities/colors-1.html">Colors</a><a class="dropdown-link" href="modules/utilities/display-1.html">Display</a><a class="dropdown-link" href="modules/utilities/flex-1.html">Flex</a><a class="dropdown-link" href="modules/utilities/float-1.html">Float</a><a class="dropdown-link" href="modules/utilities/interactions-1.html">Interactions</a><a class="dropdown-link" href="modules/utilities/opacity-1.html">Opacity</a><a class="dropdown-link" href="modules/utilities/overflow-1.html">Overflow</a><a class="dropdown-link" href="modules/utilities/position-1.html">Position</a><a class="dropdown-link" href="modules/utilities/shadows-1.html">Shadows</a><a class="dropdown-link" href="modules/utilities/sizing-1.html">Sizing</a><a class="dropdown-link" href="modules/utilities/spacing-1.html">Spacing</a><a class="dropdown-link" href="modules/utilities/typography-1.html">Typography</a><a class="dropdown-link" href="modules/utilities/vertical-align-1.html">Vertical align</a><a class="dropdown-link" href="modules/utilities/visibility-1.html">Visibility</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
                                <ul class="dropdown-menu navbar-dropdown-caret">
                                    <li>
                                        <a class="dropdown-item" href="documentation/getting-started.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-inside">
                                        <a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="documentation/customization/styling-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/customization/plugin-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-inside">
                                        <a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/vertical-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/horizontal-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="documentation/layouts/combo-navbar-1.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="documentation/gulp-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp fs-0 ms-1 me-1"></span>Gulp</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="documentation/design-file-1.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="changelog.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="showcase-2.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <ul class="navbar-nav navbar-nav-icons flex-row">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span class="fs--1 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span class="fs--1 fw-bold">Light</span></label></div>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:12px;width:12px;"></span></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span data-feather="bell" style="height:12px;width:12px;"></span></a>
                            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                <div class="card position-relative border-0">
                                    <div class="card-header p-2">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-black mb-0">Notificatons5</h5>
                                            <button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="scrollbar-overlay" style="height: 27rem;">
                                            <div class="border-300">
                                                <div class="p-3 border-300 notification-card position-relative read border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/30-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3">
                                                                <div class="avatar-name rounded-circle"><span>J</span></div>
                                                            </div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="{{ asset('backend/assets/img/team/40x40/avatar-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-300">
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/57-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/59-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative read ">
                                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('backend/assets/img/team/40x40/58-2.webp') }}" alt=""></div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0 border-top border-0">
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="pages/notifications.html">Notification history</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
                                <svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                                <div class="card bg-white position-relative border-0">
                                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                        <div class="row text-center align-items-center gx-0 gy-0">
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/behance-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance5</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-cloud-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/slack-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/gitlab-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/bitbucket-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-drive-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/trello-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/figma-2.webp') }}" alt="" width="20">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/twitter-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/pinterest-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/ln-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-maps-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/google-photos-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="{{ asset('backend/assets/img/nav-icons/spotify-2.webp') }}" alt="" width="30">
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs--2"></span></a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">
                                    <div class="card-body p-0">
                                        <div class="text-center pt-4 pb-3">
                                            <div class="avatar avatar-xl ">
                                                <img class="rounded-circle " src="{{ asset('backend/assets/img/team/72x72/57-2.webp') }}" alt="">
                                            </div>
                                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                        </div>
                                        <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status"></div>
                                    </div>
                                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                                        <ul class="nav d-flex flex-column mb-2 pb-1">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-0 border-top">
                                        <ul class="nav d-flex flex-column my-3">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                        </ul>
                                        <hr>
                                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul> --}}
                </nav>
                {{-- <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
                    <div class="modal-dialog">
                        <div class="modal-content mt-15 rounded-pill">
                            <div class="modal-body p-0">
                                <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
                                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search">
                                        <span class="fas fa-search search-box-icon"></span>
                                    </form>
                                    <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
                                    <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
                                        <div class="scrollbar-overlay" style="max-height: 30rem;">
                                            <div class="list pb-3">
                                                <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                                                <hr class="text-200 my-0">
                                                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Recently Searched </h6>
                                                <div class="py-2">
                                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr class="text-200 my-0">
                                                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Products</h6>
                                                <div class="py-2">
                                                    <a class="dropdown-item py-2 d-flex align-items-center" href="apps/e-commerce/landing/product-details-1.html">
                                                        <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="{{ asset('backend/assets/img/products/60x60/3-2.png') }}" alt=""></div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                                                            <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item py-2 d-flex align-items-center" href="apps/e-commerce/landing/product-details-1.html">
                                                        <div class="file-thumbnail me-2"><img class="img-fluid" src="{{ asset('backend/assets/img/products/60x60/3-2.png') }}" alt=""></div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                                                            <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr class="text-200 my-0">
                                                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Quick Links</h6>
                                                <div class="py-2">
                                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr class="text-200 my-0">
                                                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Files</h6>
                                                <div class="py-2">
                                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr class="text-200 my-0">
                                                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Members</h6>
                                                <div class="py-2">
                                                    <a class="dropdown-item py-2 d-flex align-items-center" href="pages/members-1.html">
                                                        <div class="avatar avatar-l status-online  me-2 text-900">
                                                            <img class="rounded-circle " src="{{ asset('backend/assets/img/team/40x40/10-2.webp') }}" alt="">
                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                                                            <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item py-2 d-flex align-items-center" href="pages/members-1.html">
                                                        <div class="avatar avatar-l  me-2 text-900">
                                                            <img class="rounded-circle " src="{{ asset('backend/assets/img/team/40x40/12-2.webp') }}" alt="">
                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-0 text-1000 title">John Smith</h6>
                                                            <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr class="text-200 my-0">
                                                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Related Searches</h6>
                                                <div class="py-2">
                                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details-1.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <script>
                    var navbarTopShape = window.config.config.phoenixNavbarTopShape;
                    var navbarPosition = window.config.config.phoenixNavbarPosition;
                    var body = document.querySelector('body');
                    var navbarDefault = document.querySelector('#navbarDefault');
                    var navbarTop = document.querySelector('#navbarTop');
                    var topNavSlim = document.querySelector('#topNavSlim');
                    var navbarTopSlim = document.querySelector('#navbarTopSlim');
                    var navbarCombo = document.querySelector('#navbarCombo');
                    var navbarComboSlim = document.querySelector('#navbarComboSlim');

                    var documentElement = document.documentElement;
                    var navbarVertical = document.querySelector('.navbar-vertical');

                    if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                      navbarDefault.remove();
                      navbarTop.remove();
                      navbarTopSlim.remove();
                      navbarCombo.remove();
                      navbarComboSlim.remove();
                      topNavSlim.style.display = 'block';
                      navbarVertical.style.display = 'inline-block';
                      body.classList.add('nav-slim');
                    } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                      navbarDefault.remove();
                      navbarVertical.remove();
                      navbarTop.remove();
                      topNavSlim.remove();
                      navbarCombo.remove();
                      navbarComboSlim.remove();
                      navbarTopSlim.removeAttribute('style');
                      body.classList.add('nav-slim');
                    } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                      navbarDefault.remove();
                      //- navbarVertical.remove();
                      navbarTop.remove();
                      topNavSlim.remove();
                      navbarCombo.remove();
                      navbarTopSlim.remove();
                      navbarComboSlim.removeAttribute('style');
                      navbarVertical.removeAttribute('style');
                      body.classList.add('nav-slim');
                    } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                      navbarDefault.remove();
                      topNavSlim.remove();
                      navbarVertical.remove();
                      navbarTopSlim.remove();
                      navbarCombo.remove();
                      navbarComboSlim.remove();
                      navbarTop.removeAttribute('style');
                      documentElement.classList.add('navbar-horizontal');
                    } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                      topNavSlim.remove();
                      navbarTop.remove();
                      navbarTopSlim.remove();
                      navbarDefault.remove();
                      navbarComboSlim.remove();
                      navbarCombo.removeAttribute('style');
                      navbarVertical.removeAttribute('style');
                      documentElement.classList.add('navbar-combo')

                    } else {
                      topNavSlim.remove();
                      navbarTop.remove();
                      navbarTopSlim.remove();
                      navbarCombo.remove();
                      navbarComboSlim.remove();
                      navbarDefault.removeAttribute('style');
                      navbarVertical.removeAttribute('style');
                    }

                    var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
                    var navbarTop = document.querySelector('.navbar-top');
                    if (navbarTopStyle === 'darker') {
                      navbarTop.classList.add('navbar-darker');
                    }

                    var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    if (navbarVerticalStyle === 'darker') {
                      navbarVertical.classList.add('navbar-darker');
                    }
                </script>



                <div class="content">
                    @yield('admin')

                    {{-- Footer Start Here --}}
                    @include('admin.body.footer')
                    {{-- Footer Ends Here --}}
                </div>
            </div>
        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->

        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="{{ asset('backend/assets/vendors/popper/popper.min-1.js')}}"></script>
        <script src="{{ asset('backend/assets/vendors/bootstrap/bootstrap.min-1.js')}}"></script>
        <script src="{{ asset('backend/assets/vendors/anchorjs/anchor.min-1.js')}}"></script>
        <script src="{{ asset('backend/assets/vendors/is/is.min-1.js')}}"></script>
        <script src="{{ asset('backend/assets/vendors/fontawesome/all.min-2.js')}}"></script>
        <script src="{{ asset('backend/assets/vendors/lodash/lodash.min-1.js')}}"></script>
        <script src="../../v3/polyfill.min-1.js?features=window.scroll"></script>
        <script src="{{ asset('backend/assets/vendors/list.js/list.min-2.js')}}"></script>
        <script src="{{ asset('backend/assets/vendors/feather-icons/feather.min-2.js')}}"></script>
        <script src="{{ asset('backend/assets/vendors/dayjs/dayjs.min-2.js')}}"></script>
        <script src="{{ asset('backend/assets/js/phoenix-1.js')}}"></script>
        <script src="{{ asset('backend/assets/vendors/echarts/echarts.min-2.js')}}"></script>
        <script src="../../%40googlemaps/markerclusterer%402.0.15/dist/index.min-1.js"></script>
        <script src="../../maps/api/js-1?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=revenueMapInit" async=""></script>
        <script src="{{ asset('backend/assets/js/ecommerce-dashboard-1.js')}}"></script>

        <script src="{{ asset('backend/assets/vendors/choices/choices.min-2.js')}}"></script>

         <script src="{{ asset('backend/assets/vendors/tinymce/tinymce.min-1.js')}}"></script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {{-- sweetalert2 --}}
        {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
        <script src="{{ asset('backend/assets/sweetalert-code/code.js') }}"></script>

        {{-- toaster --}}
        <script  type="text/javascript" src="{{ asset('backend/assets/toaster/toastr.min.js') }}"></script>
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

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
    });
  </script>




    </body>
</html>
