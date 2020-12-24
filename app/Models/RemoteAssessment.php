<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemoteAssessment extends Model
{
    use HasFactory;
    protected $fillable = [
    	'name',
    	'email',
    	'phone',
    	'location',
    	'street_address',
    	'city',
    	'country',
    	'lat',
    	'lng',
    ];
}
