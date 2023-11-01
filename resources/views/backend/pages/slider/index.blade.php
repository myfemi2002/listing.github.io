@extends('admin.admin_master')
@section('title', 'Slider')
@section('admin')

<div class="card shadow-none border border-300 my-5" data-component-card="data-component-card">
    <div class="card-header p-4 border-bottom border-300 bg-soft">
        <div class="row g-3 justify-content-between align-items-end">
            <div class="col-12 col-md">
                <h4 class="text-900 mb-0" data-anchor="data-anchor">@yield('title')</h4>
                <p class="mb-0 mt-2 text-800">All Sliders & Images.</p>
            </div>
        </div>
    </div>
    <div class="card-body p-0">

        <div class="p-4 code-to-copy table-responsive pt-3">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Background Image</th>
                        <th scope="col">Property Type</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Location</th>
                        <th scope="col">Beds</th>
                        <th scope="col">Bath</th>
                        <th scope="col">sqft</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allData as $key => $item)
                    <tr class="{{ $colors[$key % count($colors)] }}">
                        {{-- <th scope="row">{{ $item->class }}</th> --}}
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            @if($item->background_image == NULL)<span class="text-danger">No Image</span>
                            @else
                            <img src="{{ (!empty($item->background_image)) ? url('upload/slider_images/'.$item->background_image):url('upload/no_image.jpg') }}" alt="Blank Image" style="height:40px; width:70px">
                            @endif
                        </td>
                        <td>{{ $item->property_type }}</td>
                        <td>{{ $item->featured }}</td>
                        <td>{{ $item->location }}</td>
                        <td>{{ $item->beds }}</td>
                        <td>{{ $item->bath }}</td>
                        <td>{{ $item->sqft }}</td>
                        <td>{{ $item->price }}</td>

                        <td>
                            <div class="btn-group">
                                <a class="btn btn-sm btn-secondary" title="Edit Data" href="{{ route('slider.edit', $item->id) }}">Edit Data</a>
                                <a class="btn btn-sm btn-danger" title="Delete Data" id="delete_data" href="{{ route('slider.delete', $item->id) }}">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered"  role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit @yield('title')</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('property-amenities.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="form-label">Property Amenity Name</label>
                                            <input type="text" class="form-control" placeholder="Property Amenity Name" name="property_amenity_name" value="{{ $item->property_amenity_name }}">
                                            @error('property_amenity_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer mt-2">
                                        <button type="submit" class="btn btn-danger">Update Changes</button>
                                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection




