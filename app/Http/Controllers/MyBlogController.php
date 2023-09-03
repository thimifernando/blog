<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyBlogController extends Controller
{
    public function index(Request $request)
    {
        //  dd($request->blog())

        

        $blog = Blog::where('user_id',auth()->user()->id)->get();

        // dd($blog);
       
        return view('myblog.index', compact('blog'));


        
    }

    
    public function create()
    {
        return view('myblog.add');
    }

    public function store(StoreBlogRequest $request)
    {

        // $request->validate([
        //     'title' => 'required',
        //     'email' => 'required',
        //     'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        // ]);
         

        $file = $request->file('img');
        $file_name = $file->hashName();
        $file->store('public/blogs');


        $use = Auth::user();
        

        $blog = new Blog();
        $blog->user_id = $use->id;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->img = 'blogs/'.$file_name;
        // $blog->status = "Like OR Dislike";
       
        $blog->save();

        return redirect()->route('myblog.index')->with('notify_message', ['status' => 'success', 'msg' => 'Blog Upload successfully!']);
    }

    public function show(Request $request)
    {  
        //  dd($request->all());
        $blog = Blog::findOrFail($request->id);
        return view('blog.view', compact('blog'));
    }
    public function edit(Request $request)
    {
        $blog = Blog::where('id',$request->id)->firstOrfail();
        return view('myblog.edit', compact('blog'));
    }

    public function update(UpdateBlogRequest $request)
    {
        $blog = Blog::find($request->blog);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->img = $request->img;
        

        $blog->save();

        return redirect()->route('myblog.index')->with('notify_message', ['status' => 'success', 'msg' => 'Blog Edit successfully!']);

    }

    public function destroy(Request $request)
    {
        

        $blog = Blog::findOrfail($request->id);
       $blog->delete();

       return redirect()->route('myblog.index')->with('notify_message', ['status' => 'success', 'msg' => 'Blog Delete successfully!']);
   }
}
