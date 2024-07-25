<?php

namespace App\Http\Controllers;

use App\Models\Indent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndentController extends Controller
{
    public function store(Request $request)
    {

         

        // $imageValue = $request->input('image_value');

        // dd($request->all());    
        
        $validatedData = Validator::make($request->all(), [
            'customer_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'number_1' => 'nullable|string|max:255',
            'number_2' => 'nullable|string|max:255',
            'pickup' => 'nullable|string|max:255',
            'drop' => 'nullable|string|max:255',
            'body_type' => 'required|max:255',
            'weight' => 'nullable|numeric',
            'weight_unit' => 'required|string|max:255',
            'pod_soft_hard_copy' => 'required|string|max:255',
            'remarks' => 'nullable|string',
            'role_id' => 'required|numeric',
        ]);
        // if ($validatedData->fails()) {
        //     return redirect()->back()->withErrors($validatedData)->withInput();
        // }
        // Create a new Indent instance
        $indent = new Indent();
        $indent->customer_name = $request->customer_name;
        $indent->company_name = $request->company_name;
        $indent->number_1 = $request->number_1;
        $indent->number_2 = $request->number_2;
        $indent->source_of_lead = $request->source_of_lead;
        $indent->pickup_location_id = $request->pickup;
        $indent->drop_location_id = $request->drop;
        $indent->body_type = $request->body_type;
        $indent->weight = $request->weight;
        $indent->weight_unit = $request->weight_unit;
        $indent->pod_soft_hard_copy = $request->pod_soft_hard_copy;
        $indent->remarks = $request->remarks;
        $indent->user_id = $request->role_id; // Assuming role_id is in your form data
        $indent->material_type_id = $request->material_type_id;
        // $indent->truck_type_id = $request->input('image_value');

        $indent->new_material_type = $request->new_material_type;
        $indent->new_body_type = $request->new_body_type;
        $indent->new_truck_type = $request->new_truck_type;

        if ($request->has('custom_truck_type') && !empty($request->custom_truck_type)) {
            $indent->truck_type_id = $request->custom_truck_type;
        } elseif ($request->has('eicher_truck_type') && !empty($request->eicher_truck_type)) {
            $indent->truck_type_id = $request->eicher_truck_type;
        } elseif ($request->has('taurus_truck_type') && !empty($request->taurus_truck_type)) {
            $indent->truck_type_id = $request->taurus_truck_type;
        } elseif ($request->has('ft_truck_type') && !empty($request->ft_truck_type)) {
            $indent->truck_type_id = $request->ft_truck_type;
        } elseif ($request->has('trailer_truck_type') && !empty($request->trailer_truck_type)) {
            $indent->truck_type_id = $request->trailer_truck_type;
        } 

        $indent->new_source_type = $request->new_source_type;

        $indent->status = '0'; // Assuming 'status' default value
        $indent->save();
       return redirect()->back();
        // return response()->json(['message' => 'Indent created successfully', 'indent' => $indent], 201);
    }
}
