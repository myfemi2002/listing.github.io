<?php

namespace App\Http\Controllers;

use Auth;
use Image;
use App\Models\User;
use App\Models\Facility;
use App\Models\Property;
use App\Models\MultiImage;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PropertyAmenity;
use App\Models\PropertyFacility;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\File;

class PropertyController extends Controller
{
    public function propertyView() {
        $allData = Property::latest()->get();
        $colors = ['table-primary', 'table-secondary', 'table-success', 'table-danger', 'table-warning', 'table-info', 'table-light'];
        return view('backend.property.index', compact('allData','colors'));
    } // End Method

    public function propertyAdd(){
        $propertyType = PropertyType::latest()->get();
        $propertyAmenity = PropertyAmenity::latest()->get();
        $propertyFacility = PropertyFacility::latest()->get();
        $activeAgent = User::where('status', 'active')->where('role','agent')->latest()->get();
        return view('backend.property.add_property',compact('propertyType','propertyAmenity','activeAgent','propertyFacility'));
    } // End Method

    public function propertyStore(Request $request){
        $validatedData = $request->validate([
            'property_name' => 'required',
            'property_status' => 'required',
            // 'prt_type' => 'required',
            'lowest_price' => 'nullable|numeric',
            'max_price' => 'nullable|numeric',
            'property_thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'multi_image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'property_size' => 'nullable|numeric',
            // 'property_video' => 'nullable|url',
            'property_video' => 'nullable',
            'garage' => 'nullable|integer',
            'garage_size' => 'nullable|numeric',
            'description' => 'required',
            'status' => 'required',
            'address' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'postal_code' => 'nullable',
            'neighborhood' => 'nullable',
            'year_built' => 'nullable|integer',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'property_amenity_id' => 'required|array',
            'property_amenity_id.*' => 'integer',
            'property_type_id' => 'required|integer',
            'agent_id' => 'required|integer',
            'featured' => 'nullable|boolean',
            'hot' => 'nullable|boolean',
            'message' => 'nullable',
            'facility_name.*' => 'nullable',
            'distance.*' => 'nullable|numeric',
        ]);

        // Convert the array of selected property amenity IDs into a comma-separated string
        // The implode() function concatenates the elements of the array with a specified delimiter (in this case, a comma)
        // The resulting string will be stored in the $amenities variable
        $amenities = implode(",", $request->property_amenity_id);

        $propertyCode = IdGenerator::generate([
            'table' => 'properties',
            'field' => 'property_code',
            'length' => 5,
            'prefix' => 'PC'
        ]);

        // $image = $request->file('property_thumbnail');
        // $thumbnailPath = 'upload/property/thumbnail/';
        // // Generate a unique filename
        // $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // // Resize and save the image
        // $thumbnail = Image::make($image)->resize(1280, 850);
        // $thumbnail->save(public_path($thumbnailPath . $filename));
        // // Get the saved URL
        // $thumbnailUrl = $thumbnailPath . $filename;

        if ($request->hasFile('property_thumbnail')) {
            $image = $request->file('property_thumbnail');
            $thumbnailPath = 'upload/property/thumbnail/';
            $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $thumbnail = Image::make($image)->resize(1280, 850);
            $thumbnail->save(public_path($thumbnailPath . $filename));
            $thumbnailUrl = $thumbnailPath . $filename;
        } else {
            $thumbnailUrl = null;
        }

        $property = Property::create([
            'property_type_id' => $request->property_type_id,
            'property_amenity_id' => $amenities,
            // 'prt_type' =>  $request->prt_type,

            'property_name' => $request->property_name,
            'property_slug' => strtolower(str_replace(' ', '-', $request->property_name)),
            'property_code' => $propertyCode,

            'property_status' => $request->property_status,
            'property_video' => $request->property_video,

            'lowest_price' => $request->lowest_price,
            'max_price' => $request->max_price,
            'description' => $request->description,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'property_size' => $request->property_size,

            'garage' => $request->garage,
            'garage_size' => $request->garage_size,
            'year_built' => $request->year_built,

            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'neighborhood' => $request->neighborhood,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'featured' => $request->featured,
            'hot' => $request->hot,
            'agent_id' => $request->agent_id,
            'status' => $request->status,
            'property_thumbnail' => $thumbnailUrl,
            'created_at' => Carbon::now(),
        ]);
        $property_id = $property->id;

        /// Multiple Image Upload From Here ////
        $images = $request->file('multi_image'); // Handle multiple image upload
        foreach ($images as $image) {
            if (!is_null($image) && $image->isValid()) {
                $uniqueName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();   // Generate a unique name for the image
                $uploadPath = 'upload/property/multi-image/' . $uniqueName;
                Image::make($image)->resize(1400, 1100)->save($uploadPath);   // Resize and save the image
                MultiImage::insert([              // Insert the image details into the database
                    'property_id' => $property_id,
                    'photo_name' => $uploadPath,
                    'created_at' => Carbon::now(),
                ]);
            }
        }   /// Multiple Image Uploads Ends From Here ////

            $facilities = $request->input('facility_name', []); // Get the array of facility names from the request inputs
                if (!empty($facilities)) {  // Check if there are any facilities provided
                $facilityData = [];         // Initialize an empty array to store the facility data
                foreach ($facilities as $index => $facilityName) {  // Iterate over each facility
                $facilityData[] = [              // Create an array representing the facility data
                'property_id' => $property_id,
                'facility_name' => $facilityName,
                'distance' => $request->input('distance.' . $index),  // Retrieve the distance value for the current index
                'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ];
        }
        Facility::insert($facilityData);         // Insert all facility data into the database
    }
        $notification = array(
            'message' => 'Property Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('property.view')->with($notification);
     } //End Method

    public function propertyEdit($id, $slug){
        $property = Property::findOrFail($id);
        $propertyType = PropertyType::latest()->get();
        $propertyAmenities = PropertyAmenity::latest()->get();
        $propertyFacility = PropertyFacility::latest()->get();
        $activeAgent = User::where('status', 'active')->where('role', 'agent')->latest()->get();
        $property_ami = explode(',', $property->property_amenity_id);
        $multiImage = MultiImage::where('property_id', $id)->get();
        $facilities = Facility::where('property_id',$id)->get();
        return view('backend.property.edit_property', compact('property', 'propertyType', 'propertyAmenities', 'propertyFacility', 'activeAgent', 'property_ami', 'multiImage','facilities'));
    }


        public function propertyUpdate(Request $request){
            $request->validate([
                'property_name' => 'required',
                'property_status' => 'required',
                // 'prt_type' => 'required',
                'lowest_price' => 'nullable|numeric',
                'max_price' => 'nullable|numeric',
                'bedrooms' => 'nullable|numeric',
                'bathrooms' => 'nullable|numeric',
                'property_size' => 'nullable|numeric',
                'property_video' => 'nullable|string',
                'garage' => 'nullable|numeric',
                'garage_size' => 'nullable|numeric',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'postal_code' => 'required',
                'neighborhood' => 'required',
                'year_built' => 'nullable|numeric',
                'latitude' => 'nullable|numeric',
                'longitude' => 'nullable|numeric',
                'property_amenity_id' => 'nullable|array',
                'property_type_id' => 'required',
                'agent_id' => 'required',
                'featured' => 'boolean',
                'hot' => 'boolean',
                'description' => 'required',
                'status' => 'required',
            ]);

            $property = Property::find($request->id);
            if (!$property) {
                return back()->with('error', 'Property not found');
            }

            $property->property_name = $request->property_name;
            $property->property_status = $request->property_status;
            // $property->prt_type = $request->prt_type;
            $property->lowest_price = $request->lowest_price;
            $property->max_price = $request->max_price;
            $property->bedrooms = $request->bedrooms;
            $property->bathrooms = $request->bathrooms;
            $property->garage = $request->garage;
            $property->garage_size = $request->garage_size;
            $property->property_size = $request->property_size;
            $property->property_video = $request->property_video;
            $property->address = $request->address;
            $property->city = $request->city;
            $property->state = $request->state;
            $property->postal_code = $request->postal_code;
            $property->neighborhood = $request->neighborhood;
            $property->year_built = $request->year_built;
            $property->latitude = $request->latitude;
            $property->longitude = $request->longitude;
            $property->featured = $request->featured;
            $property->hot = $request->hot;
            $property->agent_id = $request->agent_id;
            $property->description = $request->description;
            $property->status = $request->status;

            $property->updated_at = Carbon::now();

            // Update property amenities
            $amenities = implode(",", $request->property_amenity_id);
            $property->property_amenity_id = $amenities;
            // Update property type
            $property->property_type_id = $request->property_type_id;
            // Save the updated property
            $property->save();

            $notification = [
                'message' => 'Property Updated Successfully',
                'alert-type' => 'success'
            ];

            return redirect()->route('property.view')->with($notification);
        }// End Method

        public function propertyThumbnailUpdate(Request $request){
            $request->validate([
                'id' => 'required',
                'property_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $pro_id = $request->id;
            $oldImage = $request->old_img;
            $image = $request->file('property_thumbnail');

            if ($image) {
                // Generate a unique name for the image
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

                // Resize and save the image
                $thumbnail = Image::make($image)->resize(1280, 850);
                $thumbnail->save(public_path('upload/property/thumbnail/' . $name_gen));

                $save_url = 'upload/property/thumbnail/' . $name_gen;

                // Delete the old image file
                if (File::exists($oldImage)) {
                    File::delete($oldImage);
                }

                // Update the property with the new thumbnail
                Property::findOrFail($pro_id)->update([
                    'property_thumbnail' => $save_url,
                    'updated_at' => Carbon::now(),
                ]);

                $notification = [
                    'message' => 'Property Thumbnail Updated Successfully',
                    'alert-type' => 'success',
                ];
            } else {
                $notification = [
                    'message' => 'Failed to Update Property Thumbnail',
                    'alert-type' => 'error',
                ];
            }

            return redirect()->back()->with($notification);
        }// End Method

        public function propertyMultiimageUpdate(Request $request)
        {
                // Retrieve the uploaded multi-images
                $multiImages = $request->file('multi_img');

                // Check if $multiImages is empty
                if (empty($multiImages)) {
                    // Image is empty or not provided, return with error message
                    $notification = [
                        'message' => 'Image cannot be empty',
                        'alert-type' => 'error'
                    ];

                    return redirect()->back()->with($notification);
                }

                // Iterate over each element in the $multiImages array
                foreach ($multiImages as $id => $image) {

                // Find the multi-image record by ID
                $multiImage = MultiImage::findOrFail($id);

                // Get the path of the old image
                $oldImagePath = $multiImage->photo_name;

                // Delete the old image file
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }

                // Upload and resize the new image
                $newImageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $newImagePath = 'upload/property/multi-image/' . $newImageName;
                Image::make($image)->resize(1400, 1100)->save(public_path($newImagePath));

                // Update the multi-image record
                $multiImage->update([
                    'photo_name' => $newImagePath,
                    'updated_at' => Carbon::now(),
                ]);
            }

            // Set the success notification
            $notification = [
                'message' => 'Property Multi Image Updated Successfully',
                'alert-type' => 'success'
            ];

            return redirect()->back()->with($notification);
        }

        public function PropertyMultiImageDelete($id)
        {
            // Find the multi-image record by ID
            $multiImage = MultiImage::findOrFail($id);

            // Get the path of the old image
            $oldImagePath = $multiImage->photo_name;

            // Check if the old image file exists and delete it
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }

            // Delete the multi-image record from the database
            $multiImage->delete();

            // Prepare the notification message and type
            $notification = [
                'message' => 'Property Multi Image Deleted Successfully',
                'alert-type' => 'success'
            ];

            // Redirect back with the notification
            return redirect()->back()->with($notification);
        } //End Method

        public function storeMultiimage(Request $request)
        {
            $new_multi = $request->imageid;
            $image = $request->file('multi_img');

            try {
                $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $uploadPath = 'upload/property/multi-image/' . $filename;

                $resizedImage = Image::make($image)->resize(770, 520);
                $resizedImage->save(public_path($uploadPath));

                MultiImage::create([
                    'property_id' => $new_multi,
                    'photo_name' => $uploadPath,
                    'created_at' => Carbon::now(),
                ]);

                $notification = [
                    'message' => 'Property Multi Image Added Successfully',
                    'alert-type' => 'success'
                ];

                return redirect()->back()->with($notification);
            } catch (\Exception $e) {
                $notification = [
                    'message' => 'Error adding property multi image',
                    'alert-type' => 'error'
                ];

                return redirect()->back()->with($notification);
            }
        } //End Method

        public function propertyFacilitiesUpdate(Request $request)
        {
            $pid = $request->id;

            // Check if facility_name field is empty
            if (!$request->has('facility_name')) {
                $notification = [
                    'message' => 'Please provide at least one facility',
                    'alert-type' => 'error'
                ];
                return redirect()->back()->with($notification);
            }

            // Delete existing facilities for the property
            Facility::where('property_id', $pid)->delete();

            $facilities = count($request->facility_name);

            for ($i = 0; $i < $facilities; $i++) {
                $fcount = new Facility();
                $fcount->property_id = $pid;
                $fcount->facility_name = $request->facility_name[$i];
                $fcount->distance = $request->distance[$i];
                $fcount->save();
            }

            $notification = [
                'message' => 'Property Facility Updated Successfully',
                'alert-type' => 'success'
            ];

            return redirect()->back()->with($notification);
        } //ENd Method

        public function propertyDelete($id)
        {
            // Find the property by ID
            $property = Property::findOrFail($id);

            // Delete the property thumbnail
            if (File::exists($property->property_thumbnail)) {
                File::delete($property->property_thumbnail);
            }

            // Delete the property
            $property->delete();

            // Delete the associated multi-images
            $multiImages = MultiImage::where('property_id', $id)->get();
            foreach ($multiImages as $multiImage) {
                if (File::exists($multiImage->photo_name)) {
                    File::delete($multiImage->photo_name);
                }
                $multiImage->delete();
            }

            // Delete the associated facilities
            Facility::where('property_id', $id)->delete();

            // Set the success notification
            $notification = [
                'message' => 'Property Deleted Successfully',
                'alert-type' => 'success'
            ];

            return redirect()->back()->with($notification);
        } //End Method

        public function propertyDetails($id, $slug){

            $property = Property::findOrFail($id);
            $propertyType = PropertyType::latest()->get();
            $propertyAmenities = PropertyAmenity::latest()->get();
            $propertyFacility = PropertyFacility::latest()->get();
            $activeAgent = User::where('status', 'active')->where('role', 'agent')->latest()->get();
            $property_ami = explode(',', $property->property_amenity_id);
            $multiImage = MultiImage::where('property_id', $id)->get();
            $facilities = Facility::where('property_id',$id)->get();
            return view('backend.property.property_details', compact('property', 'propertyType', 'propertyAmenities', 'propertyFacility', 'activeAgent', 'property_ami', 'multiImage','facilities'));
        }

}
