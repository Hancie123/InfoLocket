<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\WorkPlatform;

class WorkPlatformController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);


        try {
            return DB::transaction(function () use ($request) {
                $work = WorkPlatform::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'user_id' => $request->user_id,

                ]);
                if ($work !== null) {
                    return back()->with('success', 'You have added your work platform successfully!');
                }
            });
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }




    public function destroy($id)
    {
        $transaction = WorkPlatform::find($id);

        if ($transaction) {
            $transaction->delete();

            return response()->json(['status' => 'success', 'message' => 'Workplatform record is deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Workplatform record not found.']);
        }
    }
}
