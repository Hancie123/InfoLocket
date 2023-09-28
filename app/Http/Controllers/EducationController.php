<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationRequest;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
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
    public function store(EducationRequest $request)
    {
        $data = [
            'college_name' => $request->college_name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'course' => $request->course,
            'user_id' => $request->user_id
        ];
        try {
            $education = DB::transaction(function () use ($data) {
                $education = Education::create($data);
                return $education;
            });

            if ($education !== null) {
                return back()->with('success', 'Your Education Details are Added Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
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
