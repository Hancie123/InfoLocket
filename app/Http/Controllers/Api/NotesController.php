<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoteRequest;
use App\Http\Resources\NotesResource;
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
        $note = Note::all();
        return responseSuccess(new NotesResource($note), 200);
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
                return responseSuccess(new NotesResource($note), 201, 'Notes Created Successfully!');
            }
        } catch (\Exception $e) {
            return responseError($e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $notes = Note::where('user_id', $id)->get();
        if ($notes->isEmpty()) {
            return responseError('No notes found for the authenticated user!', 404);
        } else {
            return responseSuccess(NotesResource::collection($notes));
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $note = Note::find($id);
        if (is_null($note)) {
            return responseError('Slug not found!', 404);
        }

        try {
            $note = DB::transaction(function () use ($request, $note) {
                $note->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'label' => $request->label,
                ]);
                return $note;
            });
            if ($note) {
                return responseSuccess(new NotesResource($note), 200, 'Note Updated Successfully!');
            }
        } catch (\Exception $e) {
            return responseError($e->getMessage(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $note = Note::find($id);
            if (is_null($note)) {
                return responseError('Note not Found!', 404);
            }
            $note = DB::transaction(function () use ($note) {
                $note->delete();
                return $note;
            });
            if ($note) {
                return responseSuccess(null, 204);
            }
        } catch (\Exception $e) {
            return responseError($e->getMessage(), 500);
        }
    }
}
