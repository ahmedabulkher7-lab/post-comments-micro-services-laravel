<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class CommentController extends Controller
{
    public function index(int $postId): JsonResponse
    {
        $comments = Comment::where('post_id', $postId)->get();
        if($comments->isEmpty()) {
            return response()->json([
                'status' => 'success',
                'message'=> 'no comments found',
                'comments'   => null,
            ]);
        }
        return response()->json([
            'status' => 'success',
            'comments'   => $comments,
        ]);
    }

}
