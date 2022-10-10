<?php

namespace App\Http\Controllers\Admin;
use App\Models\User; //import user from model
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserFormRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = user::all();
        return view('admin.usercategory', compact('user'));
    }

    public function store(UserFormRequest $request){

        $data = $request->validated();
        $user = new user;
      //  $user->id= $data['id'];
        $user->name= $data['name'];
        $user->gender = $data['gender'];
        $user->phone = $data['phone'];
        $user->email = $data['email'];
        $user->role_as = $data['role_as'];
        $user->isban = $data['isban'];
      
       
       // $roomcategory->created_by = Auth::user()->id;
        $user>save();

        return redirect('admin/usercategory')->with('message','User Added Succesfully!');
    }


    public function edit($user_id) //the parameter user_id is get from route
    {
        $user = user::find($user_id);
        return view('admin.useredit',compact('user'));
    }
    public function update(UserFormRequest $request,$user_id)
    {
        $data = $request->validated();
        $user = user::find($user_id);
        
     
       // $user->id= $data['id'];
        $user->name= $data['name'];
        $user->gender = $data['gender'];
        $user->phone = $data['phone'];
        $user->email = $data['email'];
        $user->role_as = $data['role_as'];
        $user->isban = $data['isban'];
        
       
       // $roomcategory->created_by = Auth::user()->id;
        $user->update();

        return redirect('admin/users')->with('message','User Updated Succesfully!');

    }

    public function destroy(Request $request)
    {
        $user = user::find($request->user_delete_id);
        if($user)
        {
            $user->delete();
            return redirect('admin/users')->with('message','User Deleted Succesfully!');
        }else{
            return redirect('admin/users')->with('message','User Not Deleted Succesfully!');
        }
    }
}
