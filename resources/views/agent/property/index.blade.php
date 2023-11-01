@extends('agent.agent_master')
@section('title', "My Properties")
@section('agent')

<div class="col-lg-9 col-md-12">
    <div class="dashboard-wraper">

        <!-- Bookmark Property -->
        <div class="form-submit">
            <h4>My Property</h4>
        </div>

        <div class="row">
            @foreach($allData as $property)
            <!-- Single Property -->
            <div class="col-md-12 col-sm-12 col-md-12">
                <div class="singles-dashboard-list">
                    <div class="sd-list-left">
                        <img src="{{ asset($property->property_thumbnail) }}" class="img-fluid" alt="" />
                    </div>
                    <div class="sd-list-right">
                        <h4 class="listing_dashboard_title"><a href="#" class="theme-cl">{{ $property->property_name }}</a></h4>
                        <div class="user_dashboard_listed">
                            Property Code: {{ $property->property_code }}
                        </div>
                        <div class="user_dashboard_listed">
                            Price: from ₦{{ number_format($property->lowest_price, 2) }} to ₦{{ number_format($property->max_price, 2) }}
                        </div>

                        @if ($property->property_status == 'sale')
                        <div class="user_dashboard_listed">
                            Status: Sale
                        </div>
                        @else
                        <div class="user_dashboard_listed">
                            Status: Rent
                        </div>
                        @endif

                        <div class="user_dashboard_listed">
                            Property Address: {{ $property->address }}
                        </div>

                        <div class="user_dashboard_listed">
                            City: <a href="javascript:void(0);" class="theme-cl">{{ $property->city }}</a> , State: {{ $property->state }}
                        </div>

                        <div class="user_dashboard_listed">
                            Area: {{ $property->property_size }} sq ft
                        </div>
                        <div class="action">
                            <a href="{{ route('agent-property.edit', ['id' => $property->id, 'slug' => Str::slug($property->property_name)]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"><i class="ti-pencil"></i></a>
                            <a href="{{ route('agent-property.details', ['id' => $property->id, 'slug' => Str::slug($property->property_name)]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Property Details"><i class="ti-eye"></i></a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Property" class="delete"><i class="ti-close"></i></a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Make Featured" class="delete"><i class="ti-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection
