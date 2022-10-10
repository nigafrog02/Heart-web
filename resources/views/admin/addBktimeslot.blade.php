@extends('layouts.master')
@section('title','Docotor Management')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
             <h4 class="">Add Doctor Booking Timeslot</h4>

        </div>

        <div class="card-body">

        @if($errors->any())
            <div class="alert alert-danger">
                 @foreach ($errors->all() as $error)
                 <div>{{$error}}</div>
                 @endforeach
             </div> 
        @endif

        <form action="{{ url('admin/add-bktimeslot')  }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class= "mb-3">
                <label for="">Doctor Name</label>
                <select name="doctorName" class="form-control">
                @foreach ($doctorcategory as $item)
                <option value="{{ $item->doctorName }}">{{ $doctorcategory->doctorName }}</option>
                @endforeach
                </select>
            </div>

            <div class= "mb-3">
                <label for="">Available Date</label>
                <input type="date" id="availableDate" name="availableDate">
            </div>

            <div class= "mb-3">
                <label for="">Available Time</label>
                <input type="text" name="availableTime" class="form-control">
            </div>

            

            <div class= "mb-3">
                <label for="">Doctor Availability	</label>
                <!-- <input type="text" name="foodCategories" class="form-control"> -->
                <select name="doctor_availability" class="form-control">
                <option value="0">Not Available</option>
                <option value="1">Female</option>
                </select>
            </div>

            <div class= "mb-3">
                <label for="">Venue</label>
                <!-- <input type="text" name="foodCategories" class="form-control"> -->
                <select name="status" class="form-control">
                <option value="A">Block A101</option>
                <option value="B">Block B101</option>
                <option value="C">Block C101</option>
                </select>
            </div>

           

            </br>
            </br>
            <div class="col-md 6">
                <button type="submit" class="btn btn-primary">Add Doctor Infomration</button>
            </div>

        </form>

        </div>

     </div>
</div>
@endsection