<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class BooksController extends Controller
{
    public function __invoke(): JsonResponse
    {
        Book::factory(1000)->create();

        return response()->json([
            'message' => '1000 books has been created!'
        ]);
    }
}
