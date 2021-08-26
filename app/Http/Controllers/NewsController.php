<?php

namespace App\Http\Controllers;

use App\News;
use App\HealthTips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->paginate(4);
        $latestNews = News::latest()->take(3)->get();
        $latestOne = News::latest()->take(1)->get();
        return view('news.news')->with(['news'=>$news,'latestNews'=>$latestNews,'latestOne'=>$latestOne]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.addNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename='';
        // $file_extension='';

        $request->validate([
            'heading'  => ['required','max:255'],
            'description'  => ['required'],
            'image' => ['required','image'],
        ]);



        if($request->image){
            $filename = auth()->user()->id.'-'.$request->image->getClientOriginalname();
            $request->image->storeAs('public/news',$filename);
        }

        $news = News::create(['user_id'=>auth()->user()->id,'heading'=>$request->heading, 'description'=> $request->description, 'image'=> $filename]);
        $filename='';
        return redirect()->back()->with('success','Added new news.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $latestNews = News::latest()->take(3)->get();
        $news = News::where('id',$id)->get()->first();
        return view('news.oneNews')->with(['news'=>$news,'latestNews'=>$latestNews]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::where('id',$id)->get();
        return view('news.editNews')->with(['news'=>$news[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filename='';
        // $file_extension='';

        $request->validate([
            'heading'  => ['required','max:255'],
            'description'  => ['required'],
            'image' => ['image'],
        ]);


        $news = News::where('id',$id)->first();
        if($request->image){ 
            Storage::delete('/public/news/'.$news->image);
            $filename = auth()->user()->id.'-'.$request->image->getClientOriginalname();
            $request->image->storeAs('public/news',$filename);
        }
        else{
            $filename = $news->image;
        }

        $news = News::where('id',$id)->update(['user_id'=>auth()->user()->id,'heading'=>$request->heading, 'description'=> $request->description, 'image'=> $filename]);
        $filename='';
        return redirect()->route('showAllNews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::where('id',$id)->first();
        Storage::delete('/public/news/'.$news->image);
        $news->delete();

        return redirect()->back()->with('success','Data Deleted.');
    }

    public function showAll(){
        $news = News::paginate(10);
        return view('news.showAllNews')->with(['news'=>$news]);
    }

}
