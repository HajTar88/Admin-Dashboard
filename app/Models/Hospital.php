<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\storage;

class Hospital extends Model
{
    protected $fillable = ['hospital_code','hospital_name','hospital_address','phone','photo','password'];
    public function getPhotoAttribute($value){
        if($value){
            return URL::to('/').storage::url($value);
        }else {
            return $value;
        }
    }
}
?>