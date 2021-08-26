<?php

namespace App\Http\Controllers;

use App\HealthTips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HealthTipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $healthTips = HealthTips::paginate(6);
        return view('healthTips.healthTips')->with(['healthTips'=>$healthTips]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('healthTips.addHelathTips');
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
            $request->image->storeAs('public/healthTips',$filename);
        }

        $helthTips = HealthTips::create(['user_id'=>auth()->user()->id,'heading'=>$request->heading, 'description'=> $request->description, 'image'=> $filename]);
        $filename='';
        return redirect()->back()->with('success','Added new health tip.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $healthTip = HealthTips::where('id',$id)->get();
        return view('healthTips.editHealthTips')->with(['healthTip'=>$healthTip[0]]);
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


        $healthTip = HealthTips::where('id',$id)->first();
        if($request->image){ 
            Storage::delete('/public/healthTips/'.$healthTip->image);
            $filename = auth()->user()->id.'-'.$request->image->getClientOriginalname();
            $request->image->storeAs('public/healthTips',$filename);
        }
        else{
            $filename = $healthTip->image;
        }

        $helthTips = HealthTips::where('id',$id)->update(['user_id'=>auth()->user()->id,'heading'=>$request->heading, 'description'=> $request->description, 'image'=> $filename]);
        $filename='';
        return redirect()->route('showAllHealthTips');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $healthTip = HealthTips::where('id',$id)->first();
        Storage::delete('/public/healthTips/'.$healthTip->image);
        $healthTip->delete();

        return redirect()->back()->with('success','Data Deleted.');
    }

    public function showAll(){
        $healthTips = HealthTips::paginate(10);
        return view('healthTips.showAllHealthTips')->with(['healthTips'=>$healthTips]);
    }

}
