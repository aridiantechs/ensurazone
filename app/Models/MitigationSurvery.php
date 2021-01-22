<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitigationSurvery extends Model
{
    use HasFactory;

    protected $table='mitigation_survey';

    public function mitigation()
    {
        return $this->belongsTo('App\Models\Mitigation','mg_id');
    }
}
