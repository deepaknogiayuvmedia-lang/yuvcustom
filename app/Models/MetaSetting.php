<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaSetting extends Model
{
    protected $fillable = [
        'metatitle',
        'page',
        'authorname',
        'metadescription',
        'keywords',
    ];
}
