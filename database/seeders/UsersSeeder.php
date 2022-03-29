<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cecep Gorbacep',
            'role' => 'admin',
            'email' => 'cecep_gorbacep01@gmail.com',
            'password' => bcrypt('cecep112')
        ]);
        DB::table('users')->insert([
            'name' => 'Wimar Febrianti',
            'role' => 'siswa',
            'email' => 'wimaranakewong1121@gmail.com',
            'password' => bcrypt('wimar112')
        ]);
    }
}