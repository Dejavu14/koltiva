<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        // Pastikan bahwa 'post' dan 'user' adalah nama relasi yang benar di model Comment
        $comments = Comment::whereHas('post.user', function ($query) {
            $query->where('name', 'Koltiva');
        })->get();

        return response()->json($comments);
    }
}
