<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Mail\WelcomeMail;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function create()
    {
        return view('user.add');
    }

    public function store(StoreUserRequest $request)
    {
        $use = new User();
        $use->fname = $request->fname;
        $use->lname = $request->lname;
        $use->email = $request->email;
        $use->user_role = 'US';
        $use->password = Hash::make($request->password);
        $use->birthday = $request->birthday;
        $use->phone = $request->phone;

        $use->save();

        Mail::to($use->email)->send(new WelcomeMail($use));

        return redirect()->route('login')->with('notify_message', ['status' => 'success', 'msg' => 'Registration successfully!']);
    }
    // public function update(User $use, Request $request)
    // {
        
    //     $use->update([
    //         'fname' => $request->fname,
    //         'lname' => $request->lname,
    //         'email' => $request->email,
    //         // 'fname' => $request->fname,
    //         'birthday' => $request->birthday,
    //         'phone' => $request->phone,

    //         'updated_at' => now()
    //     ]);

    //     return redirect()->route('profile')->with('notify_message', ['status' => 'success', 'msg' => 'Employee Updated successfully!']);
    
    // }

    public function edit(Request $request)
    {
        $use = User::findOrFail($request->user);
        return view('profile.edit', compact('use'));
    }



    public function update(UpdateUserRequest $request)

    {

        // $use = Auth::user();

        $use = User::find($request->user);

 

        $use->fname = $request->fname;
        $use->lname = $request->lname;
        $use->email = $request->email;
        if (!empty($request->password)) {
            $use->password = Hash::make($request->password);
        }
        $use->user_role = 'US';
        $use->birthday = $request->birthday;
        $use->phone = $request->phone;
       
        // dd($request->all());
        $use->save();
 

        return redirect()->route('profile')->with('notify_message', ['status' => 'success', 'msg' => 'Profile Updated successfully!']);
    
    }






    



}
