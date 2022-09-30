<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Models\Artical;
use App\Models\Service;
use Illuminate\Http\Request;

class FontController extends Controller
{
    //

    public function index()
    {
        return view('fontend.home.home',[
            'articals' => Artical::where('status',1)->latest()->take(3)->get(),
            'services' => Service::where('status',1)->get(),
        ]);
    }
}
