<?php

namespace App\Http\Controllers;

use App\News;
use App\HealthTips;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $news = News::latest()->paginate(4);
        $latestNews = News::latest()->take(5)->get();
        $latestOne = News::latest()->take(1)->get()->first();
        $healthTips = HealthTips::all();
        return view('user.home')->with(['news'=>$news,'latestNews'=>$latestNews,'latestOne'=>$latestOne,'healthTips'=>$healthTips]);
    }
}
