<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookingHistory extends Model
{
    use HasFactory;

    protected $table = 'bookinghistory';

    protected $fillable = [
        'patientName',
        'patientEmail',
        'patientPhone',
        'patientGender',
        'doctorName',
        'specialist', 
        'bookingDate',
        'bookingTime',
        'venue'
    ];
    public $timestamps = false;
}
