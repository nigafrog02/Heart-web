<?php

namespace App\Http\Controllers\Admin;
use App\Models\User; //import user from model
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }
    public function edit($user_id) //the parameter user_id is get from route
    {
        $user = User::find($user_id);
        return view('admin.user.edit',compact('user'));
    }
    public function update(Request $request,$user_id)
    {
        $user = User::find($user_id);
        if($user) //if user id is found
        {
            $user->role_as = $request->role_as; //"name" is required for laravel to recognize the particular form
            $user->update();
            return redirect('admin/users')->with('message','Updated successfully');
        }

        return redirect('admin/users')->with('message','no user found');

    }
}
