<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        return view ("dashboard",['users'=> $users]);
    }
}
