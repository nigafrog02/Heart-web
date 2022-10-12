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
    
    public function Bkstore(BookingHistoryFormRequest $request) //for validation requests
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

        $doctorcategory = doctorcategory::where('doctorName', '=',$data['doctorName'])->where('availableDate','=',$data['bookingDate'])->where('availableTime','=',$data['bookingTime'])->update(array('doctor_availability' => '0'));

        
        return redirect('/patientbookapp')->with('message','Booking made successfully!');
    }
}
