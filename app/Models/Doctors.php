<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\URL;

class Doctors extends Model
{
    protected $fillable = ['doctor_name','weekly_schedule','email','specialization','address','phone','hospital_id','photo'];
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
    // public function getPhotoAttribute($value){
    //     if($value){
    //         return URL::to('/').storage::url($value);
    //     }else {
    //         return $value;
    //     }
    // }
    // public function Hospita()
    // {
    //     return $this->hasMany('App\Hospital');
    // }
}
?>