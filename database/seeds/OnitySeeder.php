<?php

use Illuminate\Database\Seeder;

class OnitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('onities')->insert([
            'rooms_id' => '1',
            'date' => '22/11/2019',
            'cable' => 'GOOD',
            'notecable' => 'cek',
            'dnd' => 'GOOD',
            'notednd' => 'cek',
            'bel' => 'GOOD',
            'notebel' => 'cek',
            'keytag' => 'cek',
            'notekeytag' => 'cek',
            'reader' => 'cek',
            'notereader' => 'cek',
            'safetybox' => 'cek',
            'notesafetybox' => 'cek',
            'remark' => 'all is good'
        ]);
    }
}
