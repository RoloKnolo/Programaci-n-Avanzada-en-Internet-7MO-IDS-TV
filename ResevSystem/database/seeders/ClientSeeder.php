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
        $client = new Client();
        $client->name = 'Edgar';
        $client->lastname = 'narv';
        $client->email = 'enarvaez_19@alu.uabcs';
        $client->phone_number ='6122343445';
        $client->save();
        
    }
}
