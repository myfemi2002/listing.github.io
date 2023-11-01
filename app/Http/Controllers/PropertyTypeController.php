<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyType;
use Illuminate\Support\Carbon;
use Auth;
use Image;

class PropertyTypeController extends Controller
{
    public function propertytypeView()
    {
        $allData = PropertyType::latest()->paginate(10);
        $colors = [
            "table-primary",
            "table-secondary",
            "table-success",
            "table-danger",
            "table-warning",
            "table-info",
            "table-light",
        ];
        return view("backend.propertytype.index", compact("allData", "colors"));
    } // End Method

    public function propertytypestore(Request $request)
    {
        $validateData = $request->validate(
            [
                "property_type_name" => "required|unique:property_types",
            ],
            [
                "property_type_name.required" => "Please Input property type",
            ]
        );

        PropertyType::insert([
            "property_type_name" => $request->property_type_name,
            "created_by" => Auth::user()->id,
            "created_at" => Carbon::now(),
        ]);

        $notification = [
            "message" => "property type Added Successfully",
            "alert-type" => "success",
        ];
        return Redirect()
            ->route("property-type.view")
            ->with($notification);
    } // End Method

    public function propertytypeEdit($id)
    {
        $editData = PropertyType::findOrFail($id);
        return view(
            "backend.propertytype.edit_propertytype",
            compact("editData")
        );
    } // End Method

    public function propertytypeUpdate(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate(
            [
                "property_type_name" => "required|unique:property_types,property_type_name," . $id,
            ],
            [
                "property_type_name.required" => "Please input property type",
            ]
        );

        try {
            // Find the PropertyType by ID
            $propertyType = PropertyType::findOrFail($id);

            // Update the fields with the new values
            $propertyType->property_type_name = $request->property_type_name;
            $propertyType->updated_by = Auth::user()->id;
            $propertyType->updated_at = Carbon::now();

            // Save the updated PropertyType
            $propertyType->save();

            $notification = [
                "message" => "Property type updated successfully",
                "alert-type" => "success",
            ];
            return back()->with($notification);
        } catch (\Exception $e) {
            $notification = [
                "message" => "Failed to update property type",
                "alert-type" => "error",
            ];
            return back()->with($notification);
        }
    }

    public function propertytypeDelete($id)
    {
        // Delete from the Database
        PropertyType::find($id)->delete();
        $notification = [
            "message" => "Deleted Successfully",
            "alert-type" => "success",
        ];
        return Redirect()
            ->route("property-type.view")
            ->with($notification);
    }
}
