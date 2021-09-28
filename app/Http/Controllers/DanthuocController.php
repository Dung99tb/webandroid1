<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanthuocController extends Controller
{
    public function dan_thuoc(){
        return view('admin.dan_thuoc');
    }
}
