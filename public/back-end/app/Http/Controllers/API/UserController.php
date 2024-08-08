<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// use App\Models\Profil;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query=User::query();
        if($request->has('name')) {
            $query->where('name', 'like', '%'.$request->input('name'). '%');
        }
        if($request->has('email')) {
            $query->where('email',$request->input('email'));
        }
        if($request->has('role')) {
            $query->where('role',$request->input('role'));
        }

         $users=$query->get();
         return response()->json($users);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {

        // dd($request->all());
        $newUser=$request->validated();
        $newUser['password']=Hash::make($request->password);
        $user=User::create($newUser);
        $user->profile()->create([
            'username'=>$request->username,
        ]);

        return response()->json(['message'=>'the user Added successffully','user'=>$user]);

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json($user->load('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,User $user)
    {
        $updated=$request->validate([
            'name'=>'sometimes | string |max:30',
            'role' => 'sometimes|string' ,// Validate the role
            'email'=>'sometimes | email',
            'password'=>'sometimes | min:8 | max:24 ',
            'profile_id'=>'sometimes'
        ]);
        $user->update($updated);
        return response()->json(['message'=>'user updated successffully !','user'=>$user]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message'=>'user deleted']);
        
    }
}
