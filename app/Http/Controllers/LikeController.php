<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
 
    public function create()
    {
        return view('like.add');
    }
        public function store(Request $request)
        {
    

            // $use = Auth::user();
            $use = Auth::user();
            
    
            $like = new Like();
            $like->user_id = $use->id;
            // $like->user_id = $use->id;

            $like->status = "$request->status";
           
            $like->save();
    
            return redirect()->route('blog.index')->with('notify_message', ['status' => 'success', 'msg' => 'Liked successfully!']);
        
    }
}
