<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Localization;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lang = Localization::where('user_id', auth()->user()->id)->first();
        $notes = Note::where('user_id', auth()->user()->id)->get();
        return view('admin.notes.notes', compact('lang', 'notes'));
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
    public function store(NoteRequest $request)
    {
        try {
            $note = DB::transaction(function () use ($request) {
                $note = Note::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'label' => $request->label,
                    'user_id' => auth()->user()->id,
                ]);
                return $note;
            });
            if ($note !== null) {
                return back()->with('success', 'Note added successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
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
        $note=Note::find($id);
        if (is_null($note)) {
            return back()->with('error','Note not found!');
        }
        try {
            $note=DB::transaction(function() use($note){
                $note->delete();
                return $note;
            });
            if ($note) {
                return back()->with('success','Note Deleted Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
