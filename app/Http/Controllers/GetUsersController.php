<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class GetUsersController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $users = User::paginate(100);

        return response()->json([
           'users' => $users
        ]);
    }
}
