<?php

namespace App\Http\Controllers\Admin;
use File;
use App\Models\doctorCategory; //import user from model
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DoctorFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    //select function
    public function index()
    {
        $doctorcategory = doctorcategory::all();
        return view('admin.doctorcategory', compact('doctorcategory'));
    }

    public function index2()
    {
        $doctorcategory = doctorcategory::all();
        return view('admin.bktimeslotcategory', compact('doctorcategory'));
    }


    //create
    public function create(){

        return view('admin.addDoctor');
    }


    //create function
    public function store(DoctorFormRequest $request){

        $data = $request->validated();
        $doctorcategory = new doctorcategory;
        //$user->id= $data['id'];
        $doctorcategory->gender = $data['gender'];
        $doctorcategory->phone = $data['phone'];
        $doctorcategory->doctorName= $data['doctorName'];
        $doctorcategory->doctordescription = $data['doctordescription'];
       

        if($request->hasfile('certificate')){
            $file = $request->file('certificate');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/doctorcategory/', $filename );
            $doctorcategory->certificate= $filename;
        }

        $doctorcategory->Specialist = $data['Specialist'];

        //pitcure
        if($request->hasfile('image_profile')){
            $file = $request->file('image_profile');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/doctorcategory/', $filename );
            $doctorcategory->image_profile= $filename;
        }

        $doctorcategory->availableDate= $data['availableDate'];
        $doctorcategory->availableTime = $data['availableTime'];
        $doctorcategory->doctor_availability = $data['doctor_availability'];
        $doctorcategory->venues = $data['venues'];
      
       
       // $roomcategory->created_by = Auth::user()->id;
        $doctorcategory->save();

        return redirect('admin/doctorcategory')->with('message','Doctor Added Succesfully!');
    }

    public function edit($doctorcategory_exDoctorID)
    {
        $doctorcategory =doctorcategory::find($doctorcategory_exDoctorID);
        return view('admin.doctoredit',compact('doctorcategory'));
    }

    public function update(DoctorFormRequest $request,$doctorcategory_exDoctorID)
    {
       
        $data = $request->validated();
        $doctorcategory = doctorcategory::find($doctorcategory_exDoctorID);
        $doctorcategory->gender = $data['gender'];
        $doctorcategory->phone = $data['phone'];
        $doctorcategory->doctorName= $data['doctorName'];
        $doctorcategory->doctordescription = $data['doctordescription'];
       
        if($request->hasfile('certificate')){
            $file = $request->file('certificate');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/doctorcategory/', $filename );
            $doctorcategory->certificate= $filename;
        }

        //pitcure
        if($request->hasfile('image_profile')){
            $file = $request->file('image_profile');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/doctorcategory/', $filename );
            $doctorcategory->image_profile= $filename;
        }

        $doctorcategory->Specialist = $data['Specialist'];
        $doctorcategory->update();
        

        return redirect('admin/doctorcategory')->with('message','Doctor Edited Succesfully!');

    }

    public function editBk($doctorcategory_exDoctorID)
    {
        $doctorcategory =doctorcategory::find($doctorcategory_exDoctorID);
        return view('admin.doctoredit',compact('doctorcategory'));
    }

    public function updateBk(DoctorFormRequest $request,$doctorcategory_exDoctorID)
    {
       
        $data = $request->validated();
        $doctorcategory = doctorcategory::find($doctorcategory_exDoctorID);
        $doctorcategory->gender = $data['gender'];
        $doctorcategory->phone = $data['phone'];
        $doctorcategory->doctorName= $data['doctorName'];
        $doctorcategory->doctordescription = $data['doctordescription'];
       
        if($request->hasfile('certificate')){
            $file = $request->file('certificate');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/doctorcategory/', $filename );
            $doctorcategory->certificate= $filename;
        }

        //pitcure
        if($request->hasfile('image_profile')){
            $file = $request->file('image_profile');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/doctorcategory/', $filename );
            $doctorcategory->image_profile= $filename;
        }

        $doctorcategory->Specialist = $data['Specialist'];
        $doctorcategory->availableDate= $data['availableDate'];
        $doctorcategory->availableTime = $data['availableTime'];
        $doctorcategory->doctor_availability = $data['doctor_availability'];
        $doctorcategory->venues = $data['venues'];
        $doctorcategory->update();
        

        return redirect('admin/bktimeslotcategory')->with('message','Doctor Edited Succesfully!');

    }


    public function destroy(Request $request)
    {
        $doctorcategory = doctorcategory::find($request->doctor_delete_id);

        if($doctorcategory)
        {
            $destination='uploads/doctorcategory/'.$doctorcategory->image;
            if(File::exists( $destination)){
                File::delete( $destination);
            }

            $doctorcategory->delete();
            
            return redirect('admin/doctorcategory')->with('message','Doctor Deleted Succesfully!');
        }else{

            return redirect('admin/doctorcategory')->with('message','Doctor Not Deleted Succesfully!');
        }
    }

}   
