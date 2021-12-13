<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = array(
            array('name' => 'Jackets','desc' => NULL),
            array('name' => 'Pants','desc' => NULL),
            array('name' => 'Sweaters','desc' => NULL),
            array('name' => 'Pins','desc' => NULL),
            array('name' => 'Key Chains','desc' => NULL),
            array('name' => 'Posters','desc' => NULL),
            array('name' => 'Figurines','desc' => NULL),
            array('name' => 'Phone Cases','desc' => NULL),
            array('name' => 'Stickers','desc' => NULL)
        );
        DB::table('category')->insert($category);
    }
}
