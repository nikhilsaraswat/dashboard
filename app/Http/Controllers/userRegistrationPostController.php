<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registerUserPost;
class userRegistrationPostController extends Controller
{
    public function index()
    {
        $userssaved = registerUserPost::all();
        // $contacts = Contact::Where(‘tenant_id’,”1”)->get();
        return view('usermanagement',compact('userssaved'));
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

//     public function useredit($id)
// {
//    $userwithid = registerUserPost::find($id);
//    return view('usermanagement.useredit', compact('userwithid'));
// }

// public function userupdate(Request $request, $id)
// {
//    $item = registerUserPost::find($id);
//    $item->username = $request->input('username');
  
//    $item->save();
//    return redirect('/usermanagement')->with('success', 'Item updated successfully');
// }

public function edit($id)
{
   $item = registerUserPost::find($id);
   return view('edit',compact('item'));
}

public function update(Request $request, $id)
{
   $item = registerUserPost::find($id);
   $item->username = $request->input('username');
  
   $item->save();
   return redirect('/usermanagement')->with('success', 'Item updated successfully');
}

public function delete(Request $request, $id)
{
  $item = registerUserPost::find($id);

  // Check if item exists before deletion
  if ($item) {
    $item->delete();
    return redirect('/usermanagement')->with('success', 'Item deleted successfully');
  } else {
    return redirect('/usermanagement')->with('error', 'Item not found');
  }
}


    
}

// registerUserPost = model items 
// register_user_posts = table name item