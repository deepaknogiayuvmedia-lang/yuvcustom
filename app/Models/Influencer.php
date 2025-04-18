<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    protected $fillable = [
        'userid',
        'category',
        'city',
        'state',
        'dob',
        'country',
        'fullname',
        'contactnumber',
        'emailaddress',
        'profileimage',
        'instagramprofilelink',
        'verificationstatus',
        'platforms',
        'facebookprofile',
        'youtubeprofile',
        'linkedinprofile',
    ];
}
