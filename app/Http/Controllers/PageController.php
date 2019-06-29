<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home() {

        return view('home')->with([
            'businessname' => 'SkyRide',
            'tasks' => ['Yangon Tour','Mandalay Tour','Beach Tour']
        ]);
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

    
}
