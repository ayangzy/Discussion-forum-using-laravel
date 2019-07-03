<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Auth;
use App\Reply;
use App\Discussion;

class DiscussionsController extends Controller
{
    //

    

    public function create(){

        return view('discussions.create');
    }

    public function store(Request $request){
           
        
        $this->validate($request,[
            'title' => 'required',
            'channel_id' => 'required',
            'content' => 'required'
        ]);

        $discussions = Discussion::create([
           'title' => $request->title,
           'channel_id' => $request->channel_id,
            'content' => $request->content,
            'user_id' => Auth::id(),
            'slug' => str_slug($request->title)
        ]);

        $discussions->save();

        Session::flash('success', 'Discussion added successfully');
        return redirect()->route('discussion', ['id' =>$discussions->id]);
    }

    public function show($id){
        
        $discussions = Discussion::where('id', $id)->first();

        return view('discussions.show')->with('discussions', $discussions);
    }

    public function reply($id){

        $discussions = Discussion::find($id);

        $reply = Reply::create([
            'user_id' =>Auth::id(),
            'discussion_id'=> $id,
            'content' => request()->content

           
        ]);

        Session::flash('success', 'Replied to this discussion');

        return redirect()->back();
    }
}
