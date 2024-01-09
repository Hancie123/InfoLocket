<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    public function forgot_password(){
        return view('forgot_password');
    }

    public function submitForgetPasswordForm(Request $request)
      {
        $request->validate([
            'email'=>'required|exists:users'
        ]);

          $token = Str::random(64);

        $user=User::where('email',$request->email)->first();

        if ($user) {
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();
        }

          DB::table('password_reset_tokens')->insert([
              'email' => $request->email,
              'token' => $token,
              'created_at' => Carbon::now()
            ]);

          Mail::send('emails.forgotPassword', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password');
          });

          return back()->with('success', 'We have send reset password link to your email successfully!');
      }

      public function showResetPasswordForm($token) {
        return view('forgetPasswordLink', ['token' => $token]);
     }

     public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required',
          ]);

          $updatePassword = DB::table('password_reset_tokens')
                              ->where([
                                'email' => $request->email,
                                'token' => $request->token
                              ])
                              ->first();

          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }

          $newPassword = Hash::make($request->password);
          $user = User::where('email', $request->email)
          ->update(['password' => $newPassword]);


          DB::table('password_reset_tokens')->where(['email'=> $request->email])->delete();

          return redirect('/')->with('success', 'Your password has been changed successfully!');
      }
}