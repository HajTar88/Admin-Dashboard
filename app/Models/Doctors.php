<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $fillable = ['doctor_name','weekly_schedule','email','specialization','address','phone','hospital_id'];
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
    // public function Hospita()
    // {
    //     return $this->hasMany('App\Hospital');
    // }
}
