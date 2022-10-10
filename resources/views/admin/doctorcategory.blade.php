@extends('layouts.master')
@section('title','Doctor Management')

@section('content')

<!--Modal-->
<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         <form action="{{url('admin/delete-doctor') }}" method="POST">
          @csrf
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Delete Doctor Profile</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
               </button>
               </div>
               <div class="modal-body">
                    <input type="hidden" name="doctor_delete_id" id="user_id">
               <h5>Are you sure do you want to delete this doctor?</h5>
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
               <h4>View Doctor </h4>
         </div>
         <div class="card-body">

         @if (session('message'))
               <div class="alert alert-success">{{ session('message') }}</div>
         @endif

         <table id="myDataTable" class="table table-bordered">
              <thead>
                   <tr>
                       
                        <th>ID</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Name</th>
                        <th>Description</th>  
                        <th>Certificate </th>  
                        <th>Specialist</th>
                        <th>Image Profile</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                   </tr>

              </thead>

              <tbody>

                    @foreach($doctorcategory as $item )

                    <tr>
                         <td>{{$item->exDoctorID}}</td>
                         <td>{{$item->gender}}</td>
                         <td>{{$item->phone}}</td>
                         <td>{{$item->doctorName}}</td>
                         <td>{{$item->doctordescription}}</td>
                         <td><img src="{{ asset('uploads/doctorcategory/'.$item->Specialist) }}"  width = "100px" height="100px" alt="pdf" ></td>
                         <!--<td>{{$item->role_as == '1' ? 'Admin' : 'User'}}</td> -->
                         <td>{{$item->Specialist}}</td>
                         <td> 
                            <img src="{{ asset('uploads/doctorcategory/'.$item->image_profile) }}"  width = "100px" height="100px" alt="img" >
                        </td>
                           
                         <td>
                              <a href="{{url('admin/edit-doctor/'.$item->exDoctorID) }}" class="btn btn-success">Edit</a>
                         </td>
                         <td> 
                             <!-- <a href="{{url('admin/delete-doctor/'.$item->exDoctorID) }}"  class="btn btn-danger">Delete</a> -->
                             <button type="button" class="btn btn-danger deleteUserBtn" value="{{ $item->exDoctorID}} ">Delete</button>
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


