<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function inicio()
    
    {
        $posts = DB::table('posts')
        ->select(
            'posts.description',
            'post.title',
            'post.created_at', 'desc')->get();
        return view('solicitudes.inicio', ['posts' => $posts]);
    }
}
