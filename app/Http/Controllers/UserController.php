<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('posts');
    }

    public function list(){
        $users = User::paginate(10);

        return view('user.list', ['users' =>$users]);
    }

    public function show($id){
        $user = User::find($id);
        
        return view('user.show', ['user' =>$user]);
     }
}
