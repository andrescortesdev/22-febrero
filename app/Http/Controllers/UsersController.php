<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        //ORM Eloquent
        $users = User::all();
        return view('users.index',compact('users'));
    }
    public function create(){
        
        return view('users.create');
    }
}
