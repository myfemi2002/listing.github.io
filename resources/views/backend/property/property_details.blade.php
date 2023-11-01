@extends('admin.admin_master')
@section('title', 'Property Details')
@section('admin')

<style>
    /* Add this CSS in your style block or CSS file */
.table {
  width: 100%;
}

/* Add media query to stack columns on small screens */
@media (max-width: 767px) {
  .col-md-6 {
    flex: 100%;
    max-width: 100%;
  }
}
</style>

<div class="card shadow-none border border-300 my-5" data-component-card="data-component-card">
    <div class="card-header p-4 border-bottom border-300 bg-soft">
        <div class="row g-3 justify-content-between align-items-end">
            <div class="col-12 col-md-6">
                <h4 class="text-900 mb-0" data-anchor="data-anchor">@yield('title')</h4>
            </div>
        </div>
    </div>



<div class="row g-3 list" id="reportsList">
    <div class="col-md-6 table-responsive ">
        <div class="card h-100 table-responsive ">
            <div class="card-body table-responsive ">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="p-3">{{ ucfirst('Property Code') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->property_code) }}</code></td>
                            </tr>
                            <tr>
                                <td class="p-3">{{ ucfirst('Property Name') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->property_name) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Property Status') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->property_status) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Lowest Price') }}</td>
                                <td class="p-3"><code>₦ {{ ucfirst($property->lowest_price) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Max Price') }}</td>
                                <td class="p-3"><code>₦ {{ ucfirst($property->max_price) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Bedrooms') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->bedrooms) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Bathrooms') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->bathrooms) }}</code></td>
                            </tr>


                            <tr>
                                <td class="p-3">{{ ucfirst('Garage') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->garage) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Property Video') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->property_video) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Property Amenities') }}</td>
                                <td class="p-3">
                                    <code>
                                        @foreach($property_ami as $amenityId)
                                            @php
                                                $amenity = $propertyAmenities->firstWhere('id', $amenityId);
                                            @endphp
                                            {{ ucfirst($amenity->property_amenity_name) }},
                                        @endforeach
                                    </code>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>




            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>

                            <tr>
                                <td class="p-3">{{ ucfirst('Longitude') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->longitude) }}</code></td>
                            </tr>


                            <tr>
                                <td class="p-3">{{ ucfirst('Latitude') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->latitude) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Property Type') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->prt_type) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Property Size') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->property_size) }} Sqft</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Garage Size') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->garage_size) }} Sqft</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Address') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->address) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('City') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->city) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('State') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->state) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Postal Code') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->postal_code) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Property Thumbnail') }}</td>
                                <td class="p-3">
                                    <img src="{{ asset($property->property_thumbnail) }}" style="width:100px; height:70px;">
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3">{{ ucfirst('Year Built') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->year_built) }}</code></td>
                            </tr>

                            <tr>
                                <td class="p-3">{{ ucfirst('Status') }}</td>
                                <td class="p-3">
                                    @if($property->status == 'active')
                                        <span class="badge rounded-pill bg-success">Active</span>
                                    @else
                                        <span class="badge rounded-pill bg-danger">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="p-3">{{ ucfirst('Postal Code') }}</td>
                                <td class="p-3"><code>{{ ucfirst($property->postal_code) }}</code></td>
                            </tr>
                            <tr> 
                                <td class="p-3">{{ ucfirst('Agent') }}</td>
                                <td>
                                    @if($property->agent_id == NULL)
                                        <code>Admin</code>
                                    @else
                                        <code>{{ $property->user->name }}</code>
                                    @endif
                                </td> 
                            </tr>
                            

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
