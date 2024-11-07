<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index () {
        
        $users = [ [
            'name' => 'Mikulas',
            'age' => '18',
        ], 
        [
            'name' => 'Joni',
            'age' => '17',
        ],
         
        [
            'name' => 'Ferda',
            'age' => '21',
        ] 
    ];
        $posts = Post::all();

        return view ("dashboard",[
            'users'=> $users,
            "posts"=>$posts
        ]);
    }
}
