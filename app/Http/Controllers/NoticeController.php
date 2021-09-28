<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function notification(){
        return view('admin.notification');
    }
    public function write_notice(){
        return view('admin.write_notice');
    }
}
