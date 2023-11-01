<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyFacility;
use Illuminate\Support\Carbon;
use Auth;
use Image;

class PropertyFacilityController extends Controller
{    
    public function propertyfacilitiesView()
    {
        $allData = PropertyFacility::latest()->paginate(10);
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
            "backend.propertyfacilities.index",
            compact("allData", "colors")
        );
    } // End Method

    public function propertyfacilitiesstore(Request $request)
    {
        $validatedData = $request->validate(
            [
                "property_facility_name" => "required|unique:property_facilities",
            ],
            [
                "property_facility_name.required" =>
                    "Please input property facility name",
            ]
        );

        PropertyFacility::insert([
            "property_facility_name" => $request->property_facility_name,
            "created_by" => Auth::user()->id,
            "created_at" => Carbon::now(),
        ]);

        $notification = [
            "message" => "Record added successfully",
            "alert-type" => "success",
        ];

        return back()->with($notification);
    }

    public function propertyfacilitiesUpdate(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                "property_facility_name" =>
                    "required|unique:property_facilities,property_facility_name," .
                    $id,
            ],
            [
                "property_facility_name.required" =>
                    "Please input property property facility name",
            ]
        );

        try {
            $propertyFacility = PropertyFacility::findOrFail($id);
            $propertyFacility->property_facility_name = $request->property_facility_name;
            $propertyFacility->updated_by = Auth::user()->id;
            $propertyFacility->updated_at = Carbon::now();
            $propertyFacility->save();

            $notification = [
                "message" => "Property Facility updated successfully",
                "alert-type" => "success",
            ];
            return back()->with($notification);
        } catch (\Exception $e) {
            $notification = [
                "message" => "Failed to update property Facility",
                "alert-type" => "error",
            ];
            return back()->with($notification);
        }
    } // End Method

    public function propertyfacilitiesDelete($id)
    {
        PropertyFacility::findOrFail($id)->delete();
        $notification = [
            "message" => "Deleted Successfully",
            "alert-type" => "success",
        ];
        return redirect()
            ->back()
            ->with($notification);
    } // End Method
}
