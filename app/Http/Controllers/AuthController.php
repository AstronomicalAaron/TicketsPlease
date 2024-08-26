<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Http\Requests\ApiRegistrationRequest;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    use ApiResponses;

    public function login(ApiLoginRequest $request): JsonResponse
    {
        return $this->ok('You are now logged in as: ' . $request->get('email'));
    }

    public function register(ApiRegistrationRequest $request): JsonResponse
    {
        return $this->ok((string)$request->getContent());
    }
}
