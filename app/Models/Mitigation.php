<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitigation extends Model
{
    use HasFactory;

    protected $table='mitigation';

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function ground_proof()
    {
        return $this->belongsTo('App\Models\GroundProof','gp_id');
    }
    
    public function findings()
    {
        return $this->hasMany('App\Models\Finding','mg_id','id');
    }

    public function mitigation_survey()
    {
        return $this->hasMany('App\Models\MitigationSurvery','mg_id');
    }
}
