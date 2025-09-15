<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaApplication extends Model
{
    protected $fillable = [
        'country',
        'image',
        'full_name',
        'email',
        'gender',
        'phone_number',
        'date_of_birth',
        'nationality',
        'passport_number',
        'passport_valid_till',
        'passport_place_of_issue',
        'aadhaar_card',
        'passport_back',
        'flight_ticket',
        'old_visa',
        'passport_front',
        'passport_photo',
        'hotel_booking',
    ];
}