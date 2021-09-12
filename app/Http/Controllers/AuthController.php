<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => "6LfF8WAcAAAAALQSH5JvqB7sLo2EtMhlgLQr1f3H",
            'response' => $request->recaptcha,
            'remoteip' => $request->ip(),
        ]);
        if ($response["success"] == false) {
            return;
        }
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->password = $request->input('password');
        $is_saved = $customer->save();
        error_log($is_saved);
        if ($is_saved) {
            return true;
        }

    }

    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);
        $response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => "6LfF8WAcAAAAALQSH5JvqB7sLo2EtMhlgLQr1f3H",
            'response' => $request->recaptcha,
            'remoteip' => $request->ip(),
        ]);
        if ($response["success"] == false) {
            return;
        }
        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ]);
    }
}
