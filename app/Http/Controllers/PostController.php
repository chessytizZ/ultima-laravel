<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function individual($id)
    {
        $post = Post::find($id);
        $parametros = [
            'post' => $post
        ];

        return view ('post',$parametros);

    }
}
