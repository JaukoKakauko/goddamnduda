<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store() {
        
        $request =(request()->all());
        $validated = request()->validate([
            "content" => "required|min:3|max:255",
        ]);
        Post::create([
            "content" => $validated["content"],
            "likes" => 0,
        ]);
        

        return redirect()->route("dashboard.index")->with("success","Scrollni dole najdes to tam");
    }


    public function destroy($id) {
        $post = Post::where("id", $id)->first();
        $post->delete();

        return redirect()->route("dashboard.index")->with("success","Uz to tam nenajdes");
    }
}
