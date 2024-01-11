<?php

namespace App\Http\Controllers;

use App\Models\Localization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLocale($locale)
    {

        App::setLocale($locale);

        $user = Localization::where('user_id', Session::get('user_id'))->first();
        if ($user) {
            $user->update([
                'lang' => $locale
            ]);
        } else {
            Localization::create([
                'user_id' => auth()->user()->id,
                'lang' => $locale

            ]);
        }



        return redirect()->back();
    }
}