<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Veterinarian;
use Illuminate\Http\Request;
use App\Http\Requests\VeterinarianStore;

class VeterinarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $veterinarians=Veterinarian::all();
        $query=Veterinarian::query();
        if($request->has('name')) {
            $query->where('name', 'like', '%'.$request->input('name'). '%');
        }
        if($request->has('speciality')) {
            $query->where('speciality',$request->input('speciality'));
        }
        if($request->has('city')) {
            $query->where('city',$request->input('city'));
        }
        if($request->has('mobility')) {
            $query->where('mobility',$request->input('mobility'));
        }
        if($request->has('experience')) {
            $query->where('experience','>=',$request->input('experience'));
        }
         $veterinarians=$query->get();
         return response()->json($veterinarians);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(VeterinarianStore $request)
    {
        // $validatedData=
        $request->validated();
        // dd($request->all());
        $veterinarian=Veterinarian::create($request->all());
        return response()->json(['message'=>'the Veterinarian Added successfully','veterinarian'=>$veterinarian],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Veterinarian $veterinarian)
    {
        return response()->json($veterinarian);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Veterinarian $veterinarian)
    {
        // dd($veterinarian);

        $new=$request->validate([
            'user_id'=>'sometimes | integer |unique:App\Models\Veterinarian,user_id|unique:App\Models\Trainer,user_id',
            'experience'=>'sometimes | integer',
            'clinic_name'=>'sometimes | max:100 |min:3',
            'speciality'=>'sometimes | string',
            'address'=>'sometimes |string| max:150 | min:10',
            'phone'=>'sometimes|regex:/^0[5-7][0-9]{8}$/',
            'mobility'=>'sometimes',
            'city'=>'sometimes|string|min:4|max:30',
        ]);
        $veterinarian->update($new);
        return response()->json($veterinarian);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Veterinarian $veterinarian)
    {
        $veterinarian->delete();
        return response()->json('the veterinarian has been deleted !');
    }
}
