<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class BooksController extends Controller
{
    public function __invoke(): JsonResponse
    {
        Book::factory(100)->create();

        return response()->json([
            'message' => '1000 books has been created!'
        ]);
    }
}
