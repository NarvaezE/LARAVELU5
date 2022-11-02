<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('clients')->insert([
            'name' => 'Edgar',
            'lastname' => 'Narvaez',
            'email' => 'enarvaez_19@alu.uabcs.mx',
            'phone_number' => '6121118415'
        ]);
        
        DB::table('clients')->insert([
            'name' => 'Isaac',
            'lastname' => 'Parkour',
            'email' => 'isaacp@alu.uabcs.mx',
            'phone_number' => '6123447890'
        ]);
    
    }
}
