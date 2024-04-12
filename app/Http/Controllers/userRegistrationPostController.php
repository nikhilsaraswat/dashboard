<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registerUserPost;
class userRegistrationPostController extends Controller
{
    public function index()
    {
        return view('usermanagement');
    }
    public function store(Request $request)
    {
        $post = new registerUserPost;
        $post->username = $request->username;
        $post->password = $request->password;
        $post->userrole = $request->userrole;
        $post->save();
        return redirect('usermanagement')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}