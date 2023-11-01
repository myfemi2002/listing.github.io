@extends('admin.admin_master')
@section('title', 'Add Slider')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
    <div class="card-header p-4 border-bottom border-300 bg-soft">
        <div class="row g-3 justify-content-between align-items-center">
            <div class="col-12 col-md">
                <h4 class="text-900 mb-0" data-anchor="data-anchor">@yield('title')</h4>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="p-4 code-to-copy">
            <div class="mb-3 row">
                <form id="myForm" method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" placeholder="Title" name="title">
                                <small class="form-control-feedback">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" step="0.01" class="form-control" placeholder="Price" name="price">
                                <small class="form-control-feedback">
                                @error('price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Property Type</label>
                                <select name="property_type" class="form-select form-control" required>
                                    <option disabled selected value="">-- Select --</option>
                                    <option value="sale">For Sale</option>
                                    <option value="rent">For Rent</option>
                                </select>
                                <small class="form-control-feedback">
                                @error('property_type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" style="margin-right: 20px;" >Featured</label>
                                <select name="featured" class="form-select form-control" required>
                                    <option disabled selected value="">-- Select --</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                <small class="form-control-feedback">
                                @error('featured')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control" placeholder="Location" name="location">
                                <small class="form-control-feedback">
                                @error('location')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Beds</label>
                                <input type="number" class="form-control" placeholder="Beds" name="beds">
                                <small class="form-control-feedback">
                                @error('beds')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Bath</label>
                                <input type="number" class="form-control" placeholder="Bath" name="bath">
                                <small class="form-control-feedback">
                                @error('bath')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">sqft</label>
                                <input type="number" class="form-control" placeholder="sqft" name="sqft">
                                <small class="form-control-feedback">
                                @error('sqft')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Background Image</label>
                                <input type="file" class="form-control" placeholder="Background Image" name="background_image"   id="image">
                                <small class="form-control-feedback">
                                @error('background_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Background Image" style="width:100px; height: 100px;"  >
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

        $('#myForm').validate({
            rules: {
                title: {
                    required: true,
                },
                background_image: {
                    required: true,
                },
                property_type: {
                    required: true,
                },
                location: {
                    required: true,
                },
                beds: {
                    required: true,
                },
                bath: {
                    required: true,
                },
                sqft: {
                    required: true,
                },
                price: {
                    required: true,
                },
            },
            messages: {
                title: {
                    required: 'Please enter the title',
                },
                background_image: {
                    required: 'Please enter the background image',
                },
                property_type: {
                    required: 'Please enter the property type',
                },
                location: {
                    required: 'Please enter the location',
                },
                beds: {
                    required: 'Please enter the number of beds',
                },
                bath: {
                    required: 'Please enter the number of baths',
                },
                sqft: {
                    required: 'Please enter the sqft',
                },
                price: {
                    required: 'Please enter the price',
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
            submitHandler: function(form) {
                form.submit(); // Allow the form to submit
            }
        });
    });
</script>
@endsection
