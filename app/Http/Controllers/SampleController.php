<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

final class SampleController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $data =  [
            Str::random(10),
            Str::random(20),
            Str::random(30),
            Str::random(40),
            Str::random(50),
            Str::random(60),
            Str::random(70),
            Str::random(80),
            Str::random(90),
            Str::random(100),
        ];

        return response()->json($data);
    }
}
