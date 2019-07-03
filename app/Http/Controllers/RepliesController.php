<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use App\Reply;
use App\Like;
class RepliesController extends Controller
{
    //
    public function like($id){
        $reply = Reply::find($id);

        $like = Like::create([
            'reply_id' => $id,
            'user_id' => Auth::id()
        ]);

        Session::flash('success', 'you liked the reply');

        return redirect()->back();
    }

    public function unlike($id){
        $like = Like::where('reply_id', $id)->where('user_id', Auth::id())->first();

        $like->delete();

        Session::flash('success', 'you unliked this reply');

        return redirect()->back();
    }
}
