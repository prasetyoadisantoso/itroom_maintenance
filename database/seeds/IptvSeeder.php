<?php

use Illuminate\Database\Seeder;

class IptvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('iptvs')->insert([
            [
            'rooms_id' => '1',
            'date' => '23/11/2019',
            'remote' => 'GOOD',
            'noteremote' => 'cek',
            'stb' => 'GOOD',
            'notestb' => 'cek',
            'ir' => 'GOOD',
            'noteir' => 'cek',
            'powersupply' => 'POE',
            'remark' => 'all is good',
            'macaddress' => '00:00:70:a1:ab'
        ], [
            'rooms_id' => '2',
            'date' => '23/11/2019',
            'remote' => 'GOOD',
            'noteremote' => 'cek',
            'stb' => 'GOOD',
            'notestb' => 'cek',
            'ir' => 'GOOD',
            'noteir' => 'cek',
            'powersupply' => 'Adaptor',
            'remark' => 'all is good',
            'macaddress' => '00:00:70:a1:ab'
        ],

            [
                'rooms_id' => '3',
                'date' => '23/11/2019',
                'remote' => 'GOOD',
                'noteremote' => 'cek',
                'stb' => 'GOOD',
                'notestb' => 'cek',
                'ir' => 'GOOD',
                'noteir' => 'cek',
                'powersupply' => 'Adaptor',
                'remark' => 'all is good',
                'macaddress' => '00:00:70:a1:ab'
            ],
            [
                'rooms_id' => '1',
                'date' => '24/11/2019',
                'remote' => 'GOOD',
                'noteremote' => 'cek',
                'stb' => 'GOOD',
                'notestb' => 'cek',
                'ir' => 'GOOD',
                'noteir' => 'cek',
                'powersupply' => 'Adaptor',
                'remark' => 'all is good',
                'macaddress' => '00:00:70:a1:ab'
            ],
        ]);
    }
}
