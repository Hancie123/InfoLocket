<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthCreateRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(AuthCreateRequest $request)
    {

        $email = $request->email;
        $password = $request->password;

        try {
            if (Auth::attempt(['email' => $email, 'password' => $password])) {

                $user = Auth()->user();
                $token = $user->createToken('login_token')->accessToken;

                $data = [
                    'user' => new UserResource($user),

                    'token' => $token,

                ];
                return responseSuccess($data, 200, 'Login success!');
            } else {
                return responseError('Invalid email and password!', 500);
            }
        } catch (\Throwable $th) {
            return responseError($th->getMessage(), 500);
        }
    }
}