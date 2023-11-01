<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Carbon;
use Auth;
use Image;

class SliderController extends Controller
{
    public function sliderView() {
        $allData = Slider::latest()->get();
        $colors = ['table-primary', 'table-secondary', 'table-success', 'table-danger', 'table-warning', 'table-info', 'table-light'];
        return view('backend.pages.slider.index', compact('allData','colors'));
    } // End Method

    public function sliderAdd(){
        return view('backend.pages.slider.add_slider');
    } // End Method



public function sliderstore(Request $request)
{
    $validatedData = $request->validate([
        'background_image' => 'required|image|mimes:jpeg,png,jpg',
        'property_type' => 'required|string',
        'featured' => 'string',
        'title' => 'required|string',
        'location' => 'required|string',
        'beds' => 'required|integer',
        'bath' => 'required|integer',
        'sqft' => 'required|integer',
        'price' => 'required|numeric',
    ], [
        'background_image.required' => 'Please upload a background image',
        'background_image.image' => 'The background image must be a valid image file',
        'background_image.mimes' => 'The background image must be in JPEG, PNG, or JPG format',
        'property_type.required' => 'Please provide a property type',
        'title.required' => 'Please provide a title',
        'location.required' => 'Please provide a location',
        'beds.required' => 'Please provide the number of beds',
        'beds.integer' => 'The number of beds must be an integer',
        'bath.required' => 'Please provide the number of baths',
        'bath.integer' => 'The number of baths must be an integer',
        'sqft.required' => 'Please provide the square footage',
        'sqft.integer' => 'The square footage must be an integer',
        'price.required' => 'Please provide the price',
        'price.numeric' => 'The price must be a numeric value',
    ]);

    $image = $request->file('background_image');
    $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

    // Use Intervention Image to resize and save the image
    Image::make($image)->resize(1920,1080)->save('upload/slider_images/' . $name_gen);
    $save_url = 'upload/slider_images/' . $name_gen;

    Slider::insert([
        'background_image' => $name_gen,
        'property_type' => $validatedData['property_type'],
        'featured' => $validatedData['featured'],
        'title' => $validatedData['title'],
        'location' => $validatedData['location'],
        'beds' => $validatedData['beds'],
        'bath' => $validatedData['bath'],
        'sqft' => $validatedData['sqft'],
        'price' => $validatedData['price'],
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),
    ]);

    $notification = [
        'message' => 'Added successfully',
        'alert-type' => 'success',
    ];

    return redirect()->route('slider.view')->with($notification);
}


}
