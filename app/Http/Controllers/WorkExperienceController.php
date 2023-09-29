<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperienceRequest;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkExperienceRequest $request)
    {
        $data=[
            'name'=>$request->company_name,
            'title'=>$request->job_title,
            'location'=>$request->job_location,
            'started_from'=>$request->started_from,
            'ended_in'=>$request->ended_in,
            'user_id'=>$request->user_id,
        ];

        try {
            $workExperience=DB::transaction(function() use($data){
                $workExperience=WorkExperience::create($data);
                return $workExperience;
            });

            if ($workExperience !== null) {
                return back()->with('success','Your Work Experience Data is Saved!');
            }
        } catch (\Exception $e) {
            return back()->with('fail',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
