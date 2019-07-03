<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Channel;
use Auth;

class ForumsController extends Controller
{
    //

    public function index(){

        $discussions = Discussion::orderby('created_at', 'desc')->paginate(2);
        return view('forum')->with('discussions',$discussions);
    }

    public function channel($id){


        $check = Discussion::where('channel_id', $id)->first();
        $channel = Channel::find($id);
        
 
        return view('layouts.channel')->with('discussions', $channel->discussions()->paginate(3))
            ->with('check', $check);
    }
}
