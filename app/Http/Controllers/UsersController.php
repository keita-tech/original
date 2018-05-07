<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use APP\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);

        return view('users.index', [
            'users' => $users,
        ]);
    }
    public function show($id)
    {
        $user = User::find($id);
        $reviews = $user->reviews()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'reviews' => $reviews,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
        
    }
    
}
