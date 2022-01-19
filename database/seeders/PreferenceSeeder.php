<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preference = array(
            array('user_id' => '2','anime_id' => '8','category_id' => NULL),
            array('user_id' => '2','anime_id' => '11','category_id' => NULL),
            array('user_id' => '2','anime_id' => NULL,'category_id' => '4'),
            array('user_id' => '3','anime_id' => '1','category_id' => NULL)
        );
        DB::table('preference')->insert($preference);
    }
}
