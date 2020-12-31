<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroundProof extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    
    public function findings()
    {
        return $this->hasMany('App\Models\Finding','gp_id','id');
    }
}
