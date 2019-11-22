<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rooms')->insert([
            'noroom' => 'A102',
            'floor' => '1',
            'type' => 'SUI',
            'ipaddress' => '172.168.1.28'
        ]);
    }
}