<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function slugValues()
    {
        // $post = DB::table('posts')->where('slug', $slug)->first();
        $post = "Testing";
        dd($post);

        return view('posts.index',
        [
            'post' => $post
        ]
        );
    }
}
