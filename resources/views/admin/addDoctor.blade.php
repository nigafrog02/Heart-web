@extends('layouts.master')
@section('title','Doctor Management')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
             <h4 class="">Add Doctor Information</h4>

        </div>

        <div class="card-body">

        @if($errors->any())
            <div class="alert alert-danger">
                 @foreach ($errors->all() as $error)
                 <div>{{$error}}</div>
                 @endforeach
             </div> 
        @endif

        <form action="{{ url('admin/add-doctor')  }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class= "mb-3">
                <label for="">Doctor Name</label>
                <input type="text" name="doctorName" class="form-control">
            </div>

            <div class= "mb-3">
                <label for="">Proffesion Description</label>
                <textarea name="doctordescription" rows='5' class="form-control"></textarea>
            </div>

            <div class= "mb-3">
                <label for="">Doctor Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>


            <div class= "mb-3">
                <label for="">Doctor Gender</label>
                <!-- <input type="text" name="foodCategories" class="form-control"> -->
                <select name="gender" class="form-control">
                <option value="M">Male</option>
                <option value="F">Female</option>
                </select>
            </div>

            <div class= "mb-3">
                <label for="">Doctor Certificate</label>
                <input type="file" name="certificate" class="form-control">
            </div>

            <div class= "mb-3">
                <label for="">Doctor Specialist</label>
                <!-- <input type="text" name="foodCategories" class="form-control"> -->
                <select name="Specialist" class="form-control">
                <option value="Cardiologists">Cardiologists</option>
                <option value="Anesthesiologists">Anesthesiologists</option>
                <option value="Endocrinologists">Endocrinologists</option>
                <option value="Gastroenterologists">Gastroenterologists</option>
                <option value="Internists">Internists</option>
                </select>
            </div>

            <div class= "mb-3">
                <label for="">Doctor Profile Pitcure</label>
                <input type="file" name="image_profile" class="form-control">
            </div>

            <div class= "mb-3">
                <label for="">Available Date</label></br>
                <input type="date" id="availableDate" name="availableDate">
            </div>

            <div class= "mb-3">
                <label for="">Available Time</label>
                <select name="availableTime" class="form-control">
                <option value="12pm-3pm">12pm-3pm</option>
                <option value="3pm-6pm">3pm-6pm</option>
                <option value="6pm-9pm">6pm-9pm</option>
                <option value="9pm-12am">6pm-9pm</option>
                </select>
            </div>

            

            <div class= "mb-3">
                <label for="">Doctor Availability	</label>
                <!-- <input type="text" name="foodCategories" class="form-control"> -->
                <select name="doctor_availability" class="form-control">
                <option value="1">Available</option>
                <option value="0">Not Available</option>
                </select>
            </div>

            <div class= "mb-3">
                <label for="">Venue</label>
                <!-- <input type="text" name="foodCategories" class="form-control"> -->
                <select name="venues" class="form-control">
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