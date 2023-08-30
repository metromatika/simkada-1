<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'role' => 'admin',
            'name' => 'Albert Lukas Talupan Pangaribuan',
            'email' => 'albertlukastalupan1@students.usu.ac.id',
            'password' => Hash::make('albert123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
