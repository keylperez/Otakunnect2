<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array('username' => 'krisyam_admin','email' => 'kris_admin@gmail.com','password' => 'admin','phone' => NULL,'auth_level' => 'Admin'),
            array('username' => 'krisyam','email' => 'kristian.ayam@gmail.com','password' => 'pass','phone' => NULL,'auth_level' => 'User'),
            array('username' => 'keyl','email' => 'keylperez@gmail.com','password' => 'pass','phone' => NULL,'auth_level' => 'User')
        );
        DB::table('users')->insert($users);
    }
}
