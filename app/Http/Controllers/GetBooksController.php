<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class GetBooksController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $books = Book::paginate(100);

        return response()->json([
            'books' => $books
        ]);
    }
}
