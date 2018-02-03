<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  index()
    {
        $users = User::all();
   
        return view('users', compact('users'));
    }
    
    public function show($id)
    {
        return "Showing user's detail: {$id}";
    }
    
    public function create()
    {
        return 'Create new user';
    }
}
