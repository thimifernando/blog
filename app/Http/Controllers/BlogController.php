<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index(Request $request)
    {
        

        $blog = Blog::when($request->filled('title'), function ($q) use ($request) {
            $q->where('title',$request->title);
        })
        ->get();
        // dd($blog);
        return view('blog.index', compact('blog'));

        
        
    }

    
    public function create()
    {
        return view('blog.add');
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

        return redirect()->route('blog.index')->with('notify_message', ['status' => 'success', 'msg' => 'Blog Upload successfully!']);
    }

    public function show(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        return view('blog.view', compact('blog'));
    }
    public function edit(UpdateBlogRequest $request)
    {
        $blog = Blog::where('id',$request->id)->firstOrfail();
        return view('blog.edit', compact('blog'));
    }

    // public function update(Request $request)
    // {
    //     $blog = Blog::find($request->blog);
    //     // $blog->title = $request->title;
    //     // $blog->content = $request->content;
    //     // $blog->img = $request->img;
    //     $blog->status = "$request->status";
    //     // dd($request->all());

    //     $blog->save();

    //     return redirect()->route('blog.index')->with('notify_message', ['status' => 'success', 'msg' => 'Blog Edit successfully!']);

    // }
    public function status(Request $request)
    {
        $blog = Blog::find($request->id);
        $blog->status = $request->status;
        // dd($request->all());
        $blog->save();

        return redirect()->route('blog.index')->with('notify_message', ['status' => 'success', 'msg' => 'Employee successfully ' . ($request->is_active ? 'Activated' : 'Deactivated') . '!']);
    }

    public function destroy(Request $request)
    {
        

       $blog = Blog::find($request->blog);
       $blog->delete();

       return redirect()->route('blog.index');
   }

}

