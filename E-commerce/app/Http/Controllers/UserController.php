<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function manageUser() {
       $users =User::paginate(10);//simplePaginate
        return view('admin.user.manage',['users'=>$users]);
        
    }
}
