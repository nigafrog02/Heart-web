<?php
namespace App\Http\Controllers\Admin;
use File;
use App\Models\bktimeslotCategory;
use App\Models\doctorCategory;
use App\Http\Controllers\Controller;
//use App\Http\Requests\Admin\DoctorFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bktimeslotController extends Controller
{
    public function index()
    {
        $bktimeslotcategory = bktimeslotcategory::all();
        return view('admin.bktimeslotcategory', compact('bktimeslotcategory'));
    }

    public function create(){

        return view('admin.addBktimeslot');
    }


    //create function
    public function store(bkTimeslotFormRequest $request){
        
        $doctorCategory = doctorCategory::all();
        $data = $request->validated();
        $bktimeslotcategory = new bktimeslotcategory;
        $bktimeslotcategory->availableDate= $data['availableDate'];
        $bktimeslotcategory->availableTime = $data['availableTime'];
        $bktimeslotcategory->doctorName = $data['doctorName'];
        $bktimeslotcategory->doctor_availability = $data['doctor_availability'];
        $bktimeslotcategory->status = $data['status'];
      
       
       // $roomcategory->created_by = Auth::user()->id;
        $bktimeslotcategory->save();

        return redirect('admin/bktimeslotcategory')->with('message','Doctor Added Succesfully!');
    }

}
