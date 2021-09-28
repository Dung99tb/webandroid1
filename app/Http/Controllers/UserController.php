<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User(){
        return view('admin.User');
    }
    public function edit_user(){
        return view('admin.edit_user');
    }
}
