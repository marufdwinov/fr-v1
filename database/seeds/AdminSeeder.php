<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Administrator",
            'email' => "admin@presensi.uad.ac.id",
            'password' => bcrypt('admin'),
            'avatar' => "users/default.png",
            'id_number' => "001",
            'role_id' => 1
        ]);
    }
}
