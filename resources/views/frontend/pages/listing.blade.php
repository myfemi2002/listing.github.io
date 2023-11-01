@extends('frontend.master_home')
@section('home_content')
@section('title', 'Listing')
<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="full-search-2 eclip-search italian-search hero-search-radius shadow-hard">
                    <div class="hero-search-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 b-r">
                                <div class="form-group">
                                    <div class="choose-propert-type">
                                        <ul>
                                            <li>
                                                <input id="cp-1" class="checkbox-custom" name="cpt" type="radio" checked="">
                                                <label for="cp-1" class="checkbox-custom-label">Buy</label>
                                            </li>
                                            <li>
                                                <input id="cp-2" class="checkbox-custom" name="cpt" type="radio">
                                                <label for="cp-2" class="checkbox-custom-label">Rent</label>
                                            </li>
                                            <li>
                                                <input id="cp-3" class="checkbox-custom" name="cpt" type="radio">
                                                <label for="cp-3" class="checkbox-custom-label">Sold</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-12 p-0 elio">
                                <div class="form-group">
                                    <div class="input-with-icon">
                                        <input type="text" class="form-control" placeholder="Search for a location">
                                        <img src="{{ asset('frontend/assets/img/pin.svg') }}" width="20">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <a href="#" class="btn search-btn black">Search</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->
<!-- =========================== All Property =============================== -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="item-shorting-box">
                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left">
                            <h4 class="m-0">Found 1-10 of 142 Results</h4>
                        </div>
                    </div>
                    <div class="item-shorting-box-right">
                        <div class="shorting-by">
                            <select id="shorty" class="form-control">
                                <option value="">&nbsp;</option>
                                <option value="1">Low Price</option>
                                <option value="2">High Price</option>
                                <option value="3">Most Popular</option>
                            </select>
                        </div>
                        <ul class="shorting-list">
                            <li><a href="classical-property.html" class="active"><i class="ti-layout-grid2"></i></a></li>
                            <li><a href="list-layout-full.html"><i class="ti-view-list"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-listing property-2">
                    <div class="left-tags-capt">
                        <span class="new">New</span>
                        <span class="featured">Featured</span>
                    </div>
                    <div class="listing-img-wrapper">
                        <div class="list-img-slide">
                            <div class="click">
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-1.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-2.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-3.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="listing-short-detail">
                                <div class=""><span class="label text-success bg-light-success font-bold py-1 small me-2">Apartment</span><span class="font-bold py-1 label theme-cl bg-light-info small">For Rent</span></div>
                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Equitable Property Group</a></h4>
                                <div class="dflio-location"><span class="small"><i class="fa-solid fa-location-dot me-2"></i>210 Zirak Road, Canada</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="price-features-wrapper d-flex align-items-center justify-content-between">
                        <div class="listing-short-detail-flex">
                            <h6 class="listing-card-info-price ps-0 m-0">$78,500</h6>
                        </div>
                        <div class="listing-short-btns-groups">
                            <a href="JavaScript:Void(0);" class="compare"><i class="fa-solid fa-code-compare"></i></a>
                            <a href="JavaScript:Void(0);" class="message"><i class="fa-solid fa-envelope-open-text"></i></a>
                            <a href="JavaScript:Void(0);" class="save"><i class="fa-solid fa-heart-circle-check"></i></a>
                        </div>
                    </div>
                    <div class="listing-detail-footer align-items-center">
                        <div class="footer-first">
                            <div class="foot-reviews-wrap">
                                <div class="foot-reviews-stars">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <div class="foot-reviews-subtitle">
                                    <span>47 Reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer-flex">
                            <div class="list-fx-features m-0">
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><i class="fa-solid fa-bed theme-cl"></i></div>
                                    3 Beds
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><i class="fa-solid fa-bath theme-cl"></i></div>
                                    2 Bath
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><i class="fa-solid fa-square theme-cl"></i></div>
                                    800 sqft
                                </div>
                            </div>
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
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-1.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-2.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-3.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="listing-short-detail">
                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">New Clue Apartment</a></h4>
                                <div class="property-reviews">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="listing-short-detail-flex">
                                <h6 class="listing-card-info-price">$7,000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bed.svg') }}" width="13" alt=""></div>
                                3 Beds
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bathtub.svg') }}" width="13" alt=""></div>
                                1 Bath
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/move.svg') }}" width="13" alt=""></div>
                                800 sqft
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
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-1.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-2.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-3.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="listing-short-detail">
                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">New Clue Apartment</a></h4>
                                <div class="property-reviews">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="listing-short-detail-flex">
                                <h6 class="listing-card-info-price">$7,000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bed.svg') }}" width="13" alt=""></div>
                                3 Beds
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/bathtub.svg') }}" width="13" alt=""></div>
                                1 Bath
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('frontend/assets/img/move.svg') }}" width="13" alt=""></div>
                                800 sqft
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
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-1.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-2.jp') }}g" class="img-fluid mx-auto" alt=""></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-3.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="listing-short-detail">
                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">New Clue Apartment</a></h4>
                                <div class="property-reviews">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="listing-short-detail-flex">
                                <h6 class="listing-card-info-price">$7,000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt=""></div>
                                3 Beds
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt=""></div>
                                1 Bath
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt=""></div>
                                800 sqft
                            </div>
                        </div>
                    </div>
                    <div class="listing-detail-footer">
                        <div class="footer-first">
                            <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="">210 Zirak Road, Canada</div>
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
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-1.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-2.jp') }}g" class="img-fluid mx-auto" alt=""></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-3.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="listing-short-detail">
                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">New Clue Apartment</a></h4>
                                <div class="property-reviews">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="listing-short-detail-flex">
                                <h6 class="listing-card-info-price">$7,000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt=""></div>
                                3 Beds
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt=""></div>
                                1 Bath
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt=""></div>
                                800 sqft
                            </div>
                        </div>
                    </div>
                    <div class="listing-detail-footer">
                        <div class="footer-first">
                            <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="">210 Zirak Road, Canada</div>
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
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-1.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-2.jp') }}g" class="img-fluid mx-auto" alt=""></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('frontend/assets/img/p-3.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="listing-short-detail">
                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">New Clue Apartment</a></h4>
                                <div class="property-reviews">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="listing-short-detail-flex">
                                <h6 class="listing-card-info-price">$7,000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt=""></div>
                                3 Beds
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt=""></div>
                                1 Bath
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt=""></div>
                                800 sqft
                            </div>
                        </div>
                    </div>
                    <div class="listing-detail-footer">
                        <div class="footer-first">
                            <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="">210 Zirak Road, Canada</div>
                        </div>
                        <div class="footer-flex">
                            <a href="property-detail.html" class="prt-view">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Property -->
        </div>
        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="pagination p-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                        <span class="ti-arrow-left"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">18</a></li>
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
</section>
<!-- =========================== All Property =============================== -->
@endsection
