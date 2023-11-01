@extends('admin.admin_master')
@section('title', 'All Agent')
@section('admin')

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
<style>
    /* Styles for the on/off button */
    .onoff-switch {
        position: relative;
        display: inline-block;
        width: 40px; /* Reduce the width to make it smaller */
        height: 20px; /* Reduce the height to make it smaller */
    }

    .onoff-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .onoff-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #dc3545; /* Bootstrap Danger color for inactive state */
        transition: 0.4s;
        border-radius: 20px; /* Reduce the border radius to make it smaller */
    }

    .onoff-slider:before {
        position: absolute;
        content: "";
        height: 14px; /* Reduce the height to make the slider smaller */
        width: 14px; /* Reduce the width to make the slider smaller */
        left: 3px; /* Adjust the position to center the slider */
        bottom: 3px; /* Adjust the position to center the slider */
        background-color: #ffffff;
        transition: 0.4s;
        border-radius: 50%;
    }

    input:checked + .onoff-slider {
        background-color: #28a745; /* Bootstrap Success color for active state */
    }

    input:checked + .onoff-slider:before {
        transform: translateX(16px); /* Adjust the translation to fit the smaller slider */
    }

    /* Additional styles to make the on/off button look nicer */
    .onoff-slider.round {
        border-radius: 20px; /* Reduce the border radius to make it smaller */
    }

    .onoff-slider.round:before {
        border-radius: 50%;
    }

    /* Styles for labels (Active/Inactive) */
    .onoff-label {
        display: inline-block;
        margin-left: 5px; /* Adjust the margin to create space between the button and text */
        font-weight: bold;
        font-size: 12px; /* Reduce the font size to make it smaller */
        font-style: italic;
    }
</style>

<div class="card shadow-none border border-300 my-5" data-component-card="data-component-card">
    <div class="card-header p-4 border-bottom border-300 bg-soft">
        <div class="row g-3 justify-content-between align-items-end">
            <div class="col-12 col-md">
                <h4 class="text-900 mb-0" data-anchor="data-anchor">@yield('title')</h4>
                <p class="mb-0 mt-2 text-800">All Agents.</p>
            </div>
        </div>
    </div>
    <div class="card-body p-0">

        <div class="p-4 code-to-copy table-responsive pt-3">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Agent Image</th>
                        <th scope="col">Agent Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Change Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allData as $key => $item)
                    <tr class="{{ $colors[$key % count($colors)] }}">
                        <td class="p-3">{{ $key+1 }}</td>
                        <td>
                            @if($item->photo == NULL)<span class="text-danger">No Image</span>
                            @else
                            <img src="{{ (!empty($item->photo)) ? url('upload/agent_images/'.$item->photo):url('upload/no_image.jpg') }}" alt="Blank Image" style="height:40px; width:70px">
                            @endif
                        </td>

                        <td>{{ $item->name }}</td>

                        {{-- <td>
                            @if($item->status == 'active')
                                <span class="badge rounded-pill bg-success">Active</span>
                            @elseif($item->status == 'inactive')
                                <span class="badge rounded-pill bg-danger">Inactive</span>
                            @elseif($item->status == 'suspended')
                                <span class="badge rounded-pill bg-warning">Suspended</span>
                            @endif
                        </td> --}}
                        

                        <td>{{ ucfirst($item->role) }}</td>

                        <td>
                            <label class="onoff-switch">
                                <input type="checkbox" class="toggle-class" data-id="{{ $item->id }}" {{ $item->status === 'active' ? 'checked' : '' }}>
                                <span class="onoff-slider"></span>
                            </label>
                            <span class="onoff-label {{ $item->status === 'active' ? 'text-primary' : 'text-danger' }}" id="status-label-{{ $item->id }}">{{ ucfirst($item->status) }}</span>
                        </td>


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
        
        <div class="d-flex justify-content-center mt-3">

    {{ $allData->links('pagination::bootstrap-4') }}

</div>
    </div>
</div>
<!-- Include the jQuery library and the SweetAlert library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>


<script>
    $(document).ready(function() {
        $('.toggle-class').on('change', function() {
            var isChecked = $(this).prop('checked');
            var status = isChecked ? 'active' : 'inactive';
            var user_id = $(this).data('id');

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '{{ route('changeStatus') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'user_id': user_id,
                    'status': status
                },
                success: function(data) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    // Ensure the response contains the updated status
                    if (data.status) {
                        Toast.fire({
                            type: 'success',
                            title: 'Status Changed Successfully'
                        });

                        // Find the relevant status label by ID and update the text and class
                        var statusLabel = $('#status-label-' + user_id);
                        statusLabel.text(isChecked ? 'Active' : 'Inactive');
                        statusLabel.toggleClass('text-primary', isChecked);
                        statusLabel.toggleClass('text-danger', !isChecked);
                    } else {
                        Toast.fire({
                            type: 'error',
                            title: 'Error updating status'
                        });
                    }
                },
                error: function() {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    Toast.fire({
                        type: 'error',
                        title: 'Error updating status'
                    });
                }
            });
        });
    });
</script>



@endsection




