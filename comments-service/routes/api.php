<?php
use App\Http\Controllers\Api\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/posts/{id}/comments', [CommentController::class, 'index']);