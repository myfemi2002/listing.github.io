@extends('admin.admin_master')
@section('title', 'Property Type')
@section('admin')

<div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
    <div class="card-header p-4 border-bottom border-300 bg-soft">
        <div class="row g-3 justify-content-between align-items-center">
            <div class="col-12 col-md">
                <h4 class="text-900 mb-0">@yield('title')</h4>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="p-4 code-to-copy">
            <div class="mb-3 row">
                <form id="myForm" method="POST" action="{{ route('property-type.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col">
                                    <label class="form-label">Property Type Name</label>
                                    <input type="text" class="form-control" placeholder="Property Type Name" name="property_type_name">
                                    <small class="form-control-feedback">
                                        @error('property_type_namee')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </small>
                                </div>
                                <div class="col-auto align-self-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                </form>
            </div>
        </div>
    </div>

</div>

<div class="card shadow-none border border-300 my-5" data-component-card="data-component-card">
    <div class="card-header p-4 border-bottom border-300 bg-soft">
        <div class="row g-3 justify-content-between align-items-end">
            <div class="col-12 col-md">
                <h4 class="text-900 mb-0">@yield('title')</h4>
                <p class="mb-0 mt-2 text-800">Available Property Type.</p>
            </div>
        </div>
    </div>

    <div class="card-body p-0">
        <div class="p-4 code-to-copy table-responsive pt-3">
            <table id="propertyTable" class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Property Type Name</th>
                        <th scope="col">Date of Creation</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allData as $key => $item)
                    <tr class="{{ $colors[$key % count($colors)] }}">
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->property_type_name }}</td>
                        <td>
                            @if($item->created_at == NULL)<span class="text-danger">No Date Set</span>
                            @else
                            {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-secondary" title="Edit Data" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">Edit Data</button>
                                <a class="btn btn-sm btn-danger" title="Delete Data" id="delete_data" href="{{ route('property-amenities.delete', $item->id) }}">Delete</a>
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
                                <form action="{{ route('property-type.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="form-label">Property Type Name</label>
                                            <input type="text" class="form-control" placeholder="Property Type Name" name="property_type_name" value="{{ $item->property_type_name }}">
                                            @error('property_type_name')
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
            <div  class="mt-3 d-flex justify-content-center">
                <ul class="pagination-list">
                    {{ $allData->Links('pagination::bootstrap-4') }}
                </ul>
            </div>
            <div class="clearfix"></div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#myForm').submit(function(e) {
            e.preventDefault();

            // Serialize the form data
            var formData = $(this).serialize();

            // Send an AJAX request
            $.ajax({
                type: 'POST',
                url: "{{ route('property-type.store') }}",
                data: formData,
                success: function(response) {
                    // Handle the success response
                    console.log(response);
                    location.reload(); // Refresh the page
                },
                error: function(xhr, status, error) {
                    // Handle the error response
                    console.log(xhr.responseText);
                    alert('Error occurred while saving data');
                }
            });
        });
    });
</script>

@endsection
