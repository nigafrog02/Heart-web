<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bktimeslotCategory extends Model
{
    use HasFactory;

    protected $table = "bkk_app_timeslot";

    protected $primaryKey = 'appointmentID';

    public $incrementing = false;
 
    protected $keyType = 'string';

    protected $fillable = [
        'appointmentID',
        'availableDate',
        'availableTime',
        'doctorName', 
        'doctoravailability', 
        'status', 
        
     ];
 
     public $timestamps = false; 
}
