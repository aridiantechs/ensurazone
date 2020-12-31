<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles,Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function attachments()
    {
        return $this->hasMany('App\Models\Attachment','user_id');
    }

    public function remote_assessment()
    {
        return $this->hasOne('App\Models\RemoteAssessment','user_id');
    }

    public function ground_proof()
    {
        return $this->hasOne('App\Models\GroundProof','user_id');
    }

    public function assigned_RA()
    {
        return $this->hasOne('App\Models\RemoteAssessment','assign_to');
    }

    public function assigned_GP()
    {
        return $this->hasOne('App\Models\GroundProof','assign_to');
    }

    public function hasGroundProofPlan()
    {
        if ($this->ground_proof()->exists() && $this->ground_proof->first()->paid==1) {
            $status=true;
        }
        else{
            $status=false;
        }
        return $status;
    }
}
