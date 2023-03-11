<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\storage;


class Companies extends Model
{
    protected $fillable = ['company_code','company_name','address','phone','photo','services','company_description','images'];
    protected $casts =[
        'images'=>'array'
    ];

    public function getPhotoAttribute($value){
        if($value){
            return URL::to('/').storage::url($value);
        }else {
            return $value;
        }
    }
}
?>
