<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class UsersController extends Controller
{
    public function __invoke(): JsonResponse
    {
        User::factory(100)->create();

        return response()->json([
           'message' => '1000 users has been created!'
        ]);
    }
}
