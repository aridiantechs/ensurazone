<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

    protected $table='profile';

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
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

}
