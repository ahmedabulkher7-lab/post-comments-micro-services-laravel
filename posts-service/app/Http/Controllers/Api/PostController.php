<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
public function index ()
{
    $posts = Post::all();
    // $posts = [];
    if (empty($posts)) {
        return response()->json([
            'status' => 'empty',
            'message'=> 'no posts found',
            'posts'   => null,
        ]);
    }
    foreach ($posts as $post) {
        $post->comments = \Http::get("http://localhost:8001/api/posts/{$post->id}/comments")->json();
    }
    return $posts;
    
}
} 