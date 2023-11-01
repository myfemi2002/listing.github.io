@php
$properties = \App\Models\Slider::all();
@endphp

<div class="home-slider margin-bottom-0">
    @foreach($properties as $property)
    <!-- Slide -->
    <div data-background-image="{{ (!empty($property->background_image)) ? url('upload/slider_images/'.$property->background_image):url('upload/no_image.jpg') }}" class="item">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-slider-container">

                        <!-- Slide Title -->
                        <div class="home-slider-desc">
                            <div class="modern-pro-wrap">
                                @if($property->property_type == 'rent')
                                <span class="property-type">For Rent</span>
                                @elseif($property->property_type == 'sale')
                                <span class="property-type">For Sale</span>
                                @endif


                                @if($property->featured == 'yes')
                                <span class="property-featured theme-bg">Featured</span>
                                @elseif($property->featured == 'no')
                                @endif

                            </div>
                            <div class="home-slider-title">
                                <h3><a href="single-property-page-1.html">{{ $property->title }}</a></h3>
                                <span><i class="lni-map-marker"></i> {{ $property->location }}</span>
                            </div>

                            <div class="slide-property-info">
                                <ul>
                                    <li>Beds: {{ $property->beds }}</li>
                                    <li>Bath: {{ $property->bath }}</li>
                                    <li>sqft: {{ $property->sqft }}</li>
                                </ul>
                            </div>

                            <div class="listing-price-with-compare">
                                <h4 class="list-pr theme-cl">₦ {{ number_format($property->price, 2) }}</h4>
                                <div class="lpc-right">
                                    <a href="compare-property.html" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="ti-heart"></i></a>
                                </div>
                            </div>

                            <a href="single-property-page-1.html" class="read-more">View Details <i class="fa fa-angle-right"></i></a>

                        </div>
                        <!-- Slide Title / End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
