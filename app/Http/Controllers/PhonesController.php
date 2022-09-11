<?php

namespace App\Http\Controllers;

use App\Models\Phones;
use App\Http\Requests\StorePhonesRequest;
use App\Http\Requests\UpdatePhonesRequest;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 

        $phone= new Phones();
        $request -> validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'picture'=>'required|max:1024',

        ]);
     
        $filename="";
        if( $request->hasFile('picture')){
            $filename=$request->file('picture')->store('phones','public');
        }else{
            $filename=Null;
        }

        $phone->title=$request->title;
        $phone->description=$request->description;
        $phone->price=$request->price;
        $phone->picture=$filename;
        $result=$phone->save();


       
  
        if($result) {
          
            return response()->json(['success' =>true]);
        }else {
            return response()->json(['success' =>false]); 
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePhonesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhonesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function show(Phones $phones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function edit(Phones $phones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhonesRequest  $request
     * @param  \App\Models\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhonesRequest $request, Phones $phones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phones $phones)
    {
        //
    }
}
