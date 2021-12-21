<?php

namespace Database\Seeders;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

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
            array(
                'username' => 'admin',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'phone' => NULL,
                'auth_level' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'username' => 'user',
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user'),
                'phone' => NULL,
                'auth_level' => 'User',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'username' => 'krisyam_admin',
                'name' => 'ayam',
                'email' => 'kris_admin@gmail.com',
                'password' => Hash::make('admin'),
                'phone' => NULL,
                'auth_level' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'username' => 'krisyam',
                'name' => 'nubayam',
                'email' => 'kristian.ayam@gmail.com',
                'password' => Hash::make('pass'),
                'phone' => NULL,
                'auth_level' => 'User',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'username' => 'yuutaro',
                'name' => 'keyl',
                'email' => 'keylperez@gmail.com',
                'password' => Hash::make('pass'),
                'phone' => NULL, 'auth_level' => 'User',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            )
        );
        DB::table('users')->insert($users);
    }
}
