<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finding extends Model
{
    use HasFactory;

    public function remote_assessment()
    {
        return $this->belongsTo('App\Models\RemoteAssessment','ra_id');
    }

    public function ground_proof()
    {
        return $this->belongsTo('App\Models\GroundProof','gp_id');
    }
}
