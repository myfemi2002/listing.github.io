@extends('agent.agent_master')
@section('title', "Add Properties")
@section('agent')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>




        <!-- Submit Form -->
        <div class="col-lg-9 col-md-12">
            <div class="dashboard-wraper">


        <!-- Bookmark Property -->
        <div class="form-submit mb-">
            <h4 class="mb-4">@yield('title')</h4>
        </div>

            <div class="submit-pages">

                <!-- Basic Information -->
                <form id="myForm" method="POST" action="{{ route('agent-property.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Property Name</label>
                                <input type="text" class="form-control" placeholder="property name" name="property_name" required>
                                <small class="form-control-feedback">
                                @error('property_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Property Status</label>
                                <select name="property_status" class="form-select form-control">
                                    <option disabled selected value="">-- Select --</option>
                                    <option value="sale">For Sale</option>
                                    <option value="rent">For Rent</option>
                                </select>
                                <small class="form-control-feedback">
                                @error('property_status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Property Type</label>
                                <select name="property_type_id" class="form-select form-control">
                                    <option value="" selected="" disabled="">-- Select --</option>
                                    @foreach($propertyType as $pro)
                                    <option value="{{ $pro->id }}">{{ $pro->property_type_name }}</option>
                                    @endforeach
                                </select>
                                <small class="form-control-feedback">
                                @error('property_type_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>

                        {{-- <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Property Type</label>
                                <select name="prt_type" class="form-select form-control">
                                    <option value="" selected="" disabled="">-- Select --</option>
                                    @foreach($propertyType as $pro)
                                    <option value="{{ $pro->property_type_name }}">{{ $pro->property_type_name }}</option>
                                    @endforeach
                                </select>
                                <small class="form-control-feedback">
                                @error('prt_type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div> --}}
                        <!-- Col -->
                    </div>
                    <!-- Row  -->
                    <div class="row">
                        <div class="col-sm-6  ">
                            <div class="mb-3">
                                <label class="form-label">Property Lowest Price</label>
                                <input type="text" class="form-control" placeholder="Property Lowest Price" name="lowest_price" >
                                <small class="form-control-feedback">
                                @error('lowest_price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Property Higest Price</label>
                                <input type="text" class="form-control" placeholder="Property Higest Price" name="max_price" >
                                <small class="form-control-feedback">
                                @error('max_price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Main Thumbnail Image</label>
                                <input type="file" name="property_thumbnail" class="form-control" style="height:42px;" onchange="mainThumbnailUrl(this)">
                                <small class="form-control-feedback">
                                @error('property_thumbnail')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                            <img id="mainThumb" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"/>
                        </div>
                        <!-- Col -->
                        {{--
                        <div class="col-sm-2">
                            <div class="form-group">
                                <img id="mainThumb" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"/>
                            </div>
                        </div>
                        --}}
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Mutiple Images</label>
                                <input type="file" name="multi_image[]" class="form-control" style="height:42px;"  multiple="" id="multiImg">
                                <small class="form-control-feedback">
                                @error('multi_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                            <div class="row mt-1 my-1 pr-1 pt-1" id="preview_img"></div>
                        </div>
                        <!-- Col -->
                        {{--
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="row mt-1 my-1 pr-1 pt-1" id="preview_img"></div>
                            </div>
                        </div>
                        --}}
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">Bedrooms</label>
                                <input type="text" class="form-control" placeholder="Bedrooms" name="bedrooms" >
                                <small class="form-control-feedback">
                                @error('bedrooms')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">Bathrooms</label>
                                <input type="text" class="form-control" placeholder="Bathrooms" name="bathrooms" >
                                <small class="form-control-feedback">
                                @error('bathrooms')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">Property Size</label>
                                <input type="text" class="form-control" placeholder="property size" name="property_size" >
                                <small class="form-control-feedback">
                                @error('property_size')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">Property Video</label>
                                <input type="text" class="form-control" placeholder="property video" name="property_video" >
                                <small class="form-control-feedback">
                                @error('property_video')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">Garage</label>
                                <input type="text" class="form-control" placeholder="Garage" name="garage" >
                                <small class="form-control-feedback">
                                @error('garage')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">Garage Size</label>
                                <input type="text" class="form-control" placeholder="Garage Size" name="garage_size" >
                                <small class="form-control-feedback">
                                @error('garage_size')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address" >
                                <small class="form-control-feedback">
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" placeholder="City" name="city" >
                                <small class="form-control-feedback">
                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" placeholder="State" name="state" >
                                <small class="form-control-feedback">
                                @error('state')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">Postal Code</label>
                                <input type="text" class="form-control" placeholder="Postal Code" name="postal_code" >
                                <small class="form-control-feedback">
                                @error('postal_code')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">Neighborhood</label>
                                <input type="text" class="form-control" placeholder="Neighborhood" name="neighborhood" >
                                <small class="form-control-feedback">
                                @error('neighborhood')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">Year Built</label>
                                <input type="text" class="form-control" placeholder="Year Built" name="year_built" >
                                <small class="form-control-feedback">
                                @error('year_built')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Latitude</label>
                                <input type="text" class="form-control" placeholder="Latitude" name="latitude" >
                                <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="blank">Click To Get The Latitude Of Your Address</a>
                                <small class="form-control-feedback">
                                @error('latitude')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Longitude</label>
                                <input type="text" class="form-control" placeholder="Longitude" name="longitude" >
                                <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="blank">Click To Get The Longitude Of Your Address</a>
                                <small class="form-control-feedback">
                                @error('longitude')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Property Amenities</label>
                                <div class="d-flex flex-wrap">
                                <select class="js-example-basic-multiple form-select form-control" name="property_amenity_id[]" multiple="multiple">
                                    @foreach($propertyAmenity as $amenity)
                                    <option value="{{ $amenity->id }}">{{ $amenity->property_amenity_name }}</option>
                                    @endforeach
                                </select>
                                </div>
                                <small class="form-control-feedback">
                                @error('property_amenity_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->

                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select form-control">
                                    <option disabled selected value="">-- Select --</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                <small class="form-control-feedback">
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-4">
                            <div class="mb-3">
                                {{-- <label class="form-label mb-3" style="margin-right: 20px;" >Featured Property</label> --}}
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="inlineCheckbox1" type="checkbox" name="featured" value="1" />
                                    <label class="form-check-label" for="inlineCheckbox1">Feature Property</label>
                                </div>
                                <small class="form-control-feedback">
                                @error('featured')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-4">
                            <div class="mb-3">
                                {{-- <label class="form-label mb-3" style="margin-right: 20px;" >Hot Property</label> --}}
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="inlineCheckbox" type="checkbox" name="hot" value="1" />
                                    <label class="form-check-label" for="inlineCheckbox">Hot Property</label>
                                </div>
                                <small class="form-control-feedback">
                                @error('featured')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Descrption</label>
                                <textarea  name="description" class="ckeditor form-control" cols="5"></textarea>
                                <small class="form-control-feedback">
                                @error('location')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="facility_name" class="form-label">Property Facility</label>
                                <select name="facility_name[]" id="facility_name" class="form-select form-control">
                                    <option value="" selected disabled>-- Select --</option>
                                    @foreach($propertyFacility as $facility)
                                    <option value="{{ $facility->property_facility_name }}">{{ $facility->property_facility_name }}</option>
                                    @endforeach
                                </select>
                                <small class="form-control-feedback">
                                @error('facility_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Distance</label>
                                <input type="text" class="form-control"  id="distance" placeholder="Distance (km)" name="distance[]" required>
                                <small class="form-control-feedback">
                                @error('distance')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                        </div>
                        <div class="form-group col-md-4" style="padding-top: 25px;">
                            <a class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> Add More..</a>
                        </div>

                    <div class="text-right mt-3" style="float: right;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                    <!-- Row -->
                </form>

            </div>
        </div>



</div>


<script>
    var numberOnlyInputs = document.querySelectorAll('input[type="text"][name="lowest_price"], input[type="text"][name="max_price"], input[type="text"][name="bedrooms"], input[type="text"][name="bathrooms"], input[type="text"][name="property_size"], input[type="text"][name="garage"], input[type="text"][name="garage_size"], input[type="text"][name="year_built"], input[type="text"][name^="distance"]');
    numberOnlyInputs.forEach(function(input) {
        input.addEventListener('input', function(event) {
            this.value = this.value.replace(/\D/g, '');
        });
    });
</script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
<script>
    var latitudeInput = document.querySelector('input[name="latitude"]');
    var longitudeInput = document.querySelector('input[name="longitude"]');

    latitudeInput.addEventListener('input', function(event) {
        this.value = this.value.replace(/[^\d.]/g, '');
    });

    longitudeInput.addEventListener('input', function(event) {
        this.value = this.value.replace(/[^\d.]/g, '');
    });
</script>

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

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
<script type="text/javascript">
    function mainThumbnailUrl(input){
        if (input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#mainThumb').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
{{-- ---------------------------Show Multi Image JavaScript Code ------------------------ --}}
<script type="text/javascript">
    $(document).ready(function(){
     $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                    .height(80); //create image element
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });

</script>
{{-- ================================= End Show Multi Image JavaScript Code. ==================== --}}
<!-- Start of add multiple class with ajax -->
<div style="visibility: hidden">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="whole_extra_item_delete" id="whole_extra_item_delete">
            <div class="container mt-2">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="facility_name" class="form-label">Property Facility</label>
                        <select name="facility_name[]" id="facility_name" class="form-select form-control">
                            <option value="" selected disabled>-- Select --</option>
                            @foreach($propertyFacility as $facility)
                            <option value="{{ $facility->property_facility_name }}">{{ $facility->property_facility_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label">Distance</label>
                        <input type="text" class="form-control" id="distance" placeholder="Distance (km)" name="distance[]" required>
                    </div>
                    <div class="form-group col-md-4" style="padding-top: 20px">
                        <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i> Add</span>
                        <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle"></i> Remove</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
      var counter = 0;
      $(document).on("click", ".addeventmore", function() {
        var whole_extra_item_add = $("#whole_extra_item_add").html();
        $(this).closest(".row").append(whole_extra_item_add);
        counter++;
      });

      $(document).on("click", ".removeeventmore", function(event) {
        $(this).closest(".whole_extra_item_delete").remove();
        counter -= 1;
      });
    });
</script>
<!-- End of add multiple class with ajax -->
@endsection
