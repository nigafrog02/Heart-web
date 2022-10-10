@extends('layouts.master')
@section('title','User Management')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
             <h4 class="">Edit User</h4>

        </div>

        <div class="card-body">

        @if($errors->any())
            <div class="alert alert-danger">
                 @foreach ($errors->all() as $error)
                 <div>{{$error}}</div>
                 @endforeach
             </div> 
        @endif

        <form action="{{ url('admin/update-user/'.$user->id)  }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

          

            <div class= "mb-3">
                <label for=""> Name</label>
                <input type="text" name="name" value="{{$user->name}}"  class="form-control">
            </div>


            <div class= "mb-3">
                <label for="">User Gender</label>
                <!-- <input type="text" name="gender"  value="{{$user->gender}}" class="form-control"> -->
                <select name="gender" class="form-control" value="{{$user->gender}}">
                <option value="M">Male</option>
                <option value="F">Female</option>
               
                </select>

            </div>

            <div class= "mb-3">
                <label for="">User Handphone</label>
                <input type="text" name="phone"  value="{{$user->phone}}" class="form-control">
            </div>

            <div class= "mb-3">
                <label for="">User Email</label>
                <input type="text" name="email" value="{{$user->email}}" class="form-control">
            </div>

            <div class= "mb-3">
                <label for="">Role as:</label>
                <select name="role_as" class="form-control"> 
                <option value="1" {{ $user->role_as == '1' ? 'selected' :''}}>Admin</option>
                <option value="0" {{ $user->role_as == '0' ? 'selected' :''}}>Patient</option>
            
                </select>
            </div>
           
            <div class= "mb-3">
                <label for="">Select status:</label>
                <select name="isban" class="form-control">
                <option value="">Select BAN/UNBAN</option>
                <option value="0">UNBAN</option>
                <option value="1">BAN</option>
                </select>
            </div>

        

            </br>
            </br>
            <div class="col-md 6">
                <button type="submit" class="btn btn-primary">Edit Profile</button>
            </div>

        </form>

        </div>

     </div>
</div>
@endsection