<?php

namespace App\Http\Controllers;
use App\Models\doctorCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bookingHistory;

use App\Http\Requests\Patient\BookingHistoryFormRequest;
use Illuminate\Support\Facades\Auth;

class BookingHistoryController extends Controller
{
    
    public function Bkstore(BookingHistoryFormRequest $request,$doctorcategory_exDoctorID) //for validation requests
    {
        
        $data = $request->validated();
        $bookingHistory = new bookingHistory;

        $bookingHistory->patientName = $data['patientName'];
        $bookingHistory->patientEmail = $data['patientEmail'];
        $bookingHistory->patientPhone = $data['patientPhone'];
        $bookingHistory->patientGender = $data['patientGender'];
        $bookingHistory->doctorName = $data['doctorName'];
        $bookingHistory->specialist = $data['specialist'];
        $bookingHistory->bookingDate = $data['bookingDate'];
        $bookingHistory->bookingTime = $data['bookingTime'];
        $bookingHistory->venue = $data['venue'];

        $bookingHistory->save();

        $doctorcategory = doctorcategory::find($doctorcategory_exDoctorID);
        $doctorcategory->doctor_availability = ['0'];
        $doctorcategory->update();

        return redirect('/patientbookapp');
    }

    public function Alter($doctorcategory_exDoctorID)
    {

        
        return redirect('/patientbookapp');
    }
}
