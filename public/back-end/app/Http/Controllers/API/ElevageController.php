<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Elevage;
use Illuminate\Http\Request;
use App\Http\Requests\ElevageStoreRequest;


class ElevageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query=Elevage::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($query) use ($search) {
                $query->whereHas('user', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                })
                ->orWhere('elevage_name', 'like', '%' . $search . '%');
            });
        }
        if($request->has('speciality')) {
            $query->where('speciality',$request->input('speciality'));
        }
        if($request->has('city')) {
            $query->where('city',$request->input('city'));
        }
         $elevages=$query->get();
         return response()->json($elevages);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ElevageStoreRequest $request)
    {
        $data=$request->validated();
        $elevage=Elevage::create($request->all());
        return response()->json(["message"=>"l'elvage était crée avec success !","elevage"=>$elevage], 200);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Elevage $elevage)
    {
        $profile=$elevage->user->profile;
        return response()->json(["elevage"=>$elevage->load('user'),"profile"=>$profile]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Elevage $elevage)
    {
        $updated=$request->validate([
            'user_id'=>'sometimes | integer |unique:App\Models\Elevage,user_id',
            'years'=>'sometimes | integer ',
            'space'=>'sometimes |max:10',
            'elevage_name'=>'sometimes | max:100 |min:3 |unique:App\Models\Veterinarian,clinic_name|unique:App\Models\Trainer,elevage_name|unique:App\Models\Elevage,elevage_name',
            'speciality'=>'sometimes | string',
            'address'=>'sometimes |string| max:150 | min:10',
            'phone'=>'sometimes|regex:/^0[5-7][0-9]{8}$/',
            'url'=>'sometimes | string | max:200',
            'number_animals'=>'sometimes |integer',
            'city'=>'sometimes|string|min:4|max:30',
        ]);
        $elevage->update($updated);
        return response()->json(['message'=>"elevage updated !" , "elevage"=>$elevage]);
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Elevage $elevage)
    {
        $elevage->delete();
        return response()->json(["message"=>"elevage deleted !"]);
    }
}
