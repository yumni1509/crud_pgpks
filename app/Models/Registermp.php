<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registermp extends Model
{
    use HasFactory;

    protected $fillable = [
            'companyname',
            'companyaddr',
            'postcode',
            'city',
            'state',
            'country',
            'contactperson',
            'phoneno',
            'email',
            'q1',
            'q2',
            'q3'
    ];
}
