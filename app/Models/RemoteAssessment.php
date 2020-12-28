<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemoteAssessment extends Model
{
    use HasFactory;
    protected $fillable = [
    	'username',
        'email',
        'address1',
        'latitude',
        'longitude',
        'zipcode',
        'country',
        'state',
        'city',
        'phone',
        'dob',
	];
	
	public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
