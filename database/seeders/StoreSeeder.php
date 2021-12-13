<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = array(
            array('name' => 'KrisYam Merch','desc' => 'random message'),
            array('name' => 'Keyl\'s Average Store','desc' => NULL)
        );
        DB::table('store')->insert($store);
    }
}
