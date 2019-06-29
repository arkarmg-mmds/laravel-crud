<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // $tasks = [
    //     'Go to the school',
    //     'Go to the market',
    //     'Go to the work'
    // ];

    // $businessname = "SkyRide";

    // return view('home',[
    //     'tasks' => $tasks,
    //     // 'data' => 'SkyRide'
    //     // 'data' => request('title')
    //     'data' => '<script>alert("SkyRide")</script>'
    // ]);

    // return view('home')->withTasks($tasks)->withBusinessname('SkyRide');

    return view('home')->with([
        'businessname' => 'SkyRide',
        'tasks' => ['Yangon Tour','Mandalay Tour','Beach Tour']
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

