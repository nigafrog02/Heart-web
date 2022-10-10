@extends('layouts.master')
@section('title','User Management')

@section('content')

<!--Modal-->
<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         <form action="{{url('admin/delete-user') }}" method="POST">
          @csrf
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Delete User Profile</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
               </button>
               </div>
               <div class="modal-body">
                    <input type="hidden" name="user_delete_id" id="user_id">
               <h5>Are you sure do you want to delete this user?</h5>
               </div>
               <div class="modal-footer">
               <button type="submit" class="btn btn-danger">Yes, Delete</button>
               </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid px-4">


    <div class="card mt-4">
         <div class="card-header">
               <h4>View User </h4>
         </div>
         <div class="card-body">

         @if (session('message'))
               <div class="alert alert-success">{{ session('message') }}</div>
         @endif

         <table id="myDataTable" class="table table-bordered">
              <thead>
                   <tr>
                       
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Handphone</th>  
                        <th>Email</th>  
                        <th>Role</th>
                        <th>isBan/unBan</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                   </tr>

              </thead>

              <tbody>

                    @foreach($user as $item )

                    <tr>
                         <td>{{$item->id}}</td>
                         <td>{{$item->name}}</td>
                         <td>{{$item->gender}}</td>
                         <td>{{$item->phone}}</td>
                         <td>{{$item->email}}</td>
                         <td>
                            @if( $item->role_as == '0')
                                Patient
                            @elseif($item->role_as == '1')
                                Admin
                             @elseif($item->role_as == '2')
                               Doctor
                            @endif
                        </td>
                         <!--<td>{{$item->role_as == '1' ? 'Admin' : 'User'}}</td> -->
                         <td>
                            @if( $item->isban == '0')
                                <label class="py-2 px-3 btn-primary">Not Banned</label>
                            @elseif($item->isban == '1')
                                 <label class="py-2 px-3 btn-danger"> Banned</label>
                            @endif
                        </td>
                          
                           
                         <td>
                              <a href="{{url('admin/edit-user/'.$item->id) }}" class="btn btn-success">Edit</a>
                         </td>
                         <td> 
                             <!-- <a href="{{url('admin/delete-user/'.$item->id) }}"  class="btn btn-danger">Delete</a> -->
                             <button type="button" class="btn btn-danger deleteUserBtn" value="{{ $item->id }} ">Delete</button>
                         </td>
                    </tr>
                    @endforeach
               
              </tbody>


         </table>

         </div>
    </div>


   

       
</div>
@endsection

@section('scripts')
     <script>
     $(document).ready(function(){
          $('.deleteUserBtn').click(function(e){
               e.preventDefault();
               
              var usercategory_id = $(this).val();
              $('#user_id').val(usercategory_id);
              $('#deleteUserModal').modal('show');
          });
     });
     </script>
@endsection


