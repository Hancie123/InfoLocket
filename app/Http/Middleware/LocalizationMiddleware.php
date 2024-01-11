<?php

namespace App\Http\Middleware;

use App\Models\Localization;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\Auth\Guard;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    public function handle(Request $request, Closure $next): Response
    {

        $user = Localization::where('user_id', Session::get('user_id'))->first();
       
        if ($user) {
            App::setLocale($user->lang);
           
        } else {
            $lang=Localization::create([
                'user_id' => auth()->user()->id,
                'lang' => "en"

            ]);
            App::setLocale($lang->lang);
        }

       

        return $next($request);
    }
}