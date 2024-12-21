<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authorization\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterRequest $request)
    {
        $data = $request->validated();

        $user = User::create($data);

        $token = $user->createToken($data['email']);

        Auth::login($user);

        return response()->json([
            'message' => 'Вы успешно зарегистрировались',
            'token' => $token->plainTextToken
        ], 201);
    }
}
