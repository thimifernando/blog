<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        return view('comment.index');
    }

    public function store(Request $request)
    {





        return redirect()->route('comment.index')->with('notify_message', ['status' => 'success', 'msg' => 'Comment send successfully!']);
    }
    public function show(Request $request)
    {
        $emp = User::findOrFail($request->employee);
        return view('employee.view', compact('emp'));
    }

    public function destroy(Request $request)
    {
        $emp = User::find($request->employee);
        $emp->delete();

        return redirect()->route('employee.index');
    }

}
