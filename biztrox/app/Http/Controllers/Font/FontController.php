<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FontController extends Controller
{
    //

    public function index()
    {
        return view('fontend.home.home');
    }
}
