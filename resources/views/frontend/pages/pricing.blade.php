@extends ('frontend.master_home')
@section('home_content')
@section('title','Pricing')
<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2 class="ipt-title">Pricing</h2>
                <span class="ipn-subtitle">Lists of our all Popular agencies</span>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->
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
@endsection