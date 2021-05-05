<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        
        DB::table('hotel')->insert([[
            'name'=>'A1',
            'address'=>'XYZ',
            'star'=>'3',
        ],
        [
            'name'=>'A7',
            'address'=>'XYZ',
            'star'=>'4',
        ],
        [
            'name'=>'A8',
            'address'=>'XYZ',
            'star'=>'5',
        ],
        [
            'name'=>'A6',
            'address'=>'XYZ',
            'star'=>'7',
        ]  ]  
    );
    }
}
