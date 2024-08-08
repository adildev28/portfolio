<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=DB::table('reviews')
        ->select('reviewed_id', 'type_reviewed', DB::raw('count(*) as total_reviews'))
        ->groupBy('reviewed_id', 'type_reviewed')
        ->get();   
        return response()->json($data); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'reviewer_id'=>'required | integer',
            'value'=>'required',
            'comment'=>'string|nullable | max:255',
            'type_reviewed'=>' string',
            'reviewed_id'=>'required | integer',
            'veterinarian_id'=>'sometimes | integer',
            'elevage_id'=>'sometimes | integer',
            'trainer_id'=>'sometimes | integer',	
        ]);
        // dd($data);
        $review=Review::create([
            'reviewer_id'=>$data['reviewer_id'],
            'value'=>$data['value'],
            'comment'=>$data['comment'],
            'type_reviewed'=>$data['type_reviewed'],
            'reviewed_id'=>$data['reviewed_id'],
            'veterinarian_id'=>$data['veterinarian_id'],
            'elevage_id'=>$data['elevage_id'],
            'trainer_id'=>$data['trainer_id']
        ]);
        return response()->json(["message"=>"review added successffully !", "review"=>$review]);
   }

    /**
     * Display the specified resource.
     */
    // public function show(Review $review)
    // {
        
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Review $review)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return response()->json(["message"=>"review deleted !"]);
    }
}
