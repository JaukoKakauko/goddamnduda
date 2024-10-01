<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {
        
        $users = [ [
            'name' => 'meno 1',
            'age' => '18',
        ], 
        [
            'name' => 'meno 2',
            'age' => '17',
        ],
         
        [
            'name' => 'meno 3',
            'age' => '21',
        ] 
    ];
        
        return view ("dashboard",['users'=> $users]);
    }
}
