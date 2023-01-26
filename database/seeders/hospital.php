<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class hospital extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->insert([
            'hospital_code'=>'HOO3',
             'hospital_name'=> 'SANT',
             'hospital_address'=>'KHT',
             'phone'=> '09090909',
             'password'=>'123456789'
        ]);
    }
}
