<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function inbox_mail(){
        return view('admin.inbox_mail');
    }
    public function compose_mail(){
        return view('admin.compose_mail');
    }
}
