<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anime = array(
            array('name' => 'Love is war','desc' => NULL),
            array('name' => 'Kakegurui','desc' => NULL),
            array('name' => 'My hero academia','desc' => NULL),
            array('name' => 'Re:Zero','desc' => NULL),
            array('name' => 'Classroom of the elite','desc' => NULL),
            array('name' => 'Horimiya','desc' => NULL),
            array('name' => 'Naruto','desc' => NULL),
            array('name' => 'Darling in the franxx','desc' => NULL),
            array('name' => 'Fullmetal alchemist','desc' => NULL),
            array('name' => 'One punch man','desc' => NULL),
            array('name' => 'Genshin Impact','desc' => NULL)
        );
        DB::table('anime')->insert($anime);
    }
}
