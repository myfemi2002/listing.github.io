<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyAmenity;
use Illuminate\Support\Carbon;
use Auth;
use Image;

class PropertyAmenitiesController extends Controller
{
    public function propertyamenitiesView()
    {
        $allData = PropertyAmenity::latest()->paginate(10);
        $colors = [
            "table-primary",
            "table-secondary",
            "table-success",
            "table-danger",
            "table-warning",
            "table-info",
            "table-light",
        ];
        return view(
            "backend.propertyamenities.index",
            compact("allData", "colors")
        );
    } // End Method

    public function propertyAmenitiesStore(Request $request)
    {
        $validatedData = $request->validate(
            [
                "property_amenity_name" => "required|unique:property_amenities",
            ],
            [
                "property_amenity_name.required" =>
                    "Please input property amenity",
            ]
        );

        PropertyAmenity::insert([
            "property_amenity_name" => $request->property_amenity_name,
            "created_by" => Auth::user()->id,
            "created_at" => Carbon::now(),
        ]);

        $notification = [
            "message" => "Property amenity added successfully",
            "alert-type" => "success",
        ];

        return back()->with($notification);
    }

    public function propertyamenitiesUpdate(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                "property_amenity_name" =>
                    "required|unique:property_amenities,property_amenity_name," .
                    $id,
            ],
            [
                "property_amenity_name.required" =>
                    "Please input property amenity",
            ]
        );

        try {
            $propertyAmenity = PropertyAmenity::findOrFail($id);
            $propertyAmenity->property_amenity_name = $request->property_amenity_name;
            $propertyAmenity->updated_by = Auth::user()->id;
            $propertyAmenity->updated_at = Carbon::now();
            $propertyAmenity->save();

            $notification = [
                "message" => "Property amenity updated successfully",
                "alert-type" => "success",
            ];
            return back()->with($notification);
        } catch (\Exception $e) {
            $notification = [
                "message" => "Failed to update property amenity",
                "alert-type" => "error",
            ];
            return back()->with($notification);
        }
    } // End Method

    public function propertyamenitiesDelete($id)
    {
        PropertyAmenity::findOrFail($id)->delete();
        $notification = [
            "message" => "Deleted Successfully",
            "alert-type" => "success",
        ];
        return redirect()
            ->back()
            ->with($notification);
    } // End Method
}
