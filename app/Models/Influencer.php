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
        'engagementrate',
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
