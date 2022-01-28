<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        $users = array(
            array(
                'username' => 'admin',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'image' => 'user/thumb_15951118880user.png',
                'phone' => '09' . random_int(100000000, 999999999),
                'auth_level' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'username' => 'user',
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user'),
                'image' => 'user/thumb_15951118880user.png',
                'phone' => '09' . random_int(100000000, 999999999),
                'auth_level' => 'User',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'username' => 'krisyam_admin',
                'name' => 'ayam',
                'email' => 'kris_admin@gmail.com',
                'password' => Hash::make('admin'),
                'image' => 'user/thumb_15951118880user.png',
                'phone' => '09' . random_int(100000000, 999999999),
                'auth_level' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'username' => 'krisyam',
                'name' => 'nubayam',
                'email' => 'kristian.ayam@gmail.com',
                'password' => Hash::make('pass'),
                'image' => 'user/thumb_15951118880user.png',
                'phone' => '09' . random_int(100000000, 999999999),
                'auth_level' => 'User',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'username' => 'yuutaro',
                'name' => 'keyl',
                'email' => 'keylperez@gmail.com',
                'password' => Hash::make('pass'),
                'image' => 'user/-11601848172olq80epz0r.png',
                'phone' => '09' . random_int(100000000, 999999999),
                'auth_level' => 'User',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            )
        );
        DB::table('users')->insert($users);
    }
}
