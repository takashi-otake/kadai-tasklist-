<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; //追加

class UsersController extends Controller
{
    public function index(){
        $users = User::orderBy('id','desc')->paginate(1);
        
        return view('users.index',[
            'users'=>$users,
        ]);
        
    }
    
    public function show()
    {
        $user = User::find($id);
        
        return view('users.show',[
            'users'=>$user,    
        ]);
    }
}
