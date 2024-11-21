<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store() {
        
        $request =(request()->all());
        Post::create([
            "content" => $request["content"],
            "likes" => 0,
        ]);

        return redirect()->route("dashboard.index");
    }
}
