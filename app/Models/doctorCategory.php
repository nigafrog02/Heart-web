<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctorCategory extends Model
{
    use HasFactory;

    protected $table = "extra_doctors";

    protected $primaryKey = 'exDoctorID';

    public $incrementing = false;
 
    protected $keyType = 'string';

    protected $fillable = [
        'exDoctorID',
        'gender',
        'phone',
        'doctorName', 
        'doctordescription', 
        'certificate', 
        'Specialist',
        'image_profile',
        'availableDate',
        'availableTime',
        'doctoravailability', 
        'venues',
        
     ];
 
     public $timestamps = false; 

    
}
