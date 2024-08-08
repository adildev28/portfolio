<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Http\Requests\TrainerStoreRequest;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query=Trainer::query();

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
        if($request->has('Mobility')) {
            $query->where('Mobility',$request->input('Mobility'));
        }
        if($request->has('experience')) {
            $query->where('experience_years','>=',$request->input('experience'));
        }
         $trainers=$query->get();
         return response()->json($trainers);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TrainerStoreRequest $request)
    {
        // dd($request->all());
        $request->validated();
        $trainer=Trainer::create($request->all());
        return response()->json(['message'=>'the trainer Added successfully','trainer'=>$trainer],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainer)
    {
        // $trainerInfo=$trainer->user;
        $profile=$trainer->user->profile;
        return response()->json(["trainer"=>$trainer->load('user'),"profil"=>$profile]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trainer $trainer)
    {
        $updated = $request->
        validate([
        'user_id'=>'sometimes | integer |unique:App\Models\Veterinarian,user_id|unique:App\Models\Trainer,user_id',
        'experience_years'=>'sometimes ',
        'elevage_name'=>'sometimes | max:100 |min:3',
        'speciality'=>'sometimes | string',
        'address'=>'sometimes |string| max:150 | min:10',
        'phone'=>'sometimes|regex:/^0[5-7][0-9]{8}$/',
        'mobility'=>'sometimes',
        'city'=>'sometimes|string|min:4|max:30'
        ]);
        $trainer->update($updated);
        return response()->json(['message'=>'trainer updated successffully !', 'trainer'=>$trainer],201);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return response()->json(['message'=>' trainer deleted'], 200);
    }
}
