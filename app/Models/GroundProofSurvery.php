<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroundProofSurvery extends Model
{
    use HasFactory;

    protected $table='ground_proof_survey';

    protected $fillable = [
        'distance_from_structure',
        'density',
        'combustible_presence',
        'trees',
        'location',
        'grass' ,
        'density_of_trees',
        'arrangement',
        'space_arrangement',
        'clump_size',
        'ladder_fuel',
        'aspects',
    ];

    public function ground_proof()
    {
        return $this->hasMany('App\Models\GroundProof','gp_id');
    }
}
