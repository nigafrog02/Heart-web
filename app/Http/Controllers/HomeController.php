<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\doctorCategory;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function p_index()
    {
        $currenttime = Carbon::now();
        $doctorcategory = doctorcategory::where('doctor_availability', '=',1)->where('availableDate','>',$currenttime)->get();
        return view('patientbookapp', compact('doctorcategory'));
    }

    public function p_make_index($doctorcategory_exDoctorID)
    {   
        $doctorcategory =doctorcategory::find($doctorcategory_exDoctorID);
        return view('patientmakebooking',compact('doctorcategory'));
    }

    public function doc_detail_index()
    {
        $doctorcategory = doctorcategory::all();
        return view('doctorsdetails', compact('doctorcategory'));
    }
}
