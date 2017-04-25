<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = [
        'town',
        'company',
        'street',
        'phone',
        'fax',
    ];
}
