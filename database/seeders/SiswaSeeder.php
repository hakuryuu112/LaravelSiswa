<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'AAAA',
            'nis' => '1021232311',
            'tgl_lahir' => '2001-01-11'
        ]);
        DB::table('siswa')->insert([
            'nama' => 'BBB',
            'nis' => '097666112',
            'tgl_lahir' => '2001-08-27'
        ]);
    }
}
