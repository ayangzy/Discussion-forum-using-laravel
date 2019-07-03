<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Channel;
use App\Discussion;

class ChannelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $channels = Channel::all();
      

        return view('channels.index')->with('channels', $channels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

       

        return view('channels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
                'channel' => 'required'
        ]);

        if(Channel::where('title', $request->channel)->exists()){
            Session::flash('warning', 'This particular channel is already added');
            return redirect()->back();
        }else{
            
        $channel = Channel::create([
            'title' => $request->channel,
        ]);

        Session::flash('success', 'Channel added successfully');
        return redirect()->back();

        }

       
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
        //
        $channels = Channel::find($id);

        return view('channels.edit')->with('channels', $channels);
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
        //
        $this->validate($request, [
            'channel' => 'required'
        ]);

        $channels = Channel::find($id);

        $channels->title = $request->channel;

        $channels->save();

        Session::flash('success', 'Channel updated successfully');

        return redirect()->route('channels.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $channels = Channel::find($id);
    
        $channels->delete();

        Session::flash('success', 'Channel deleted successfully');
        return redirect()->back();
    }
}
