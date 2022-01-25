<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = array(
            array('name' => 'Klee\'s Jumpty Dumpty', 'img' => 'products/KleeJumptyDumty.jpg', 'price' => '850.00', 'desc' => NULL, 'category_id' => NULL, 'anime_id' => '11', 'store_id' => '1', 'deleted' => 'Not deleted'),
            array('name' => 'Genshin Key Chains', 'img' => 'products/genshinKeyChains.jpg', 'price' => '500.00', 'desc' => NULL, 'category_id' => '5', 'anime_id' => '11', 'store_id' => '1', 'deleted' => 'Not deleted'),
            array('name' => 'Genshin Pins', 'img' => 'products/genshinPins.jpg', 'price' => '500.00', 'desc' => NULL, 'category_id' => '4', 'anime_id' => '11', 'store_id' => '1', 'deleted' => 'Not deleted'),
            array('name' => 'Love is War - Chika Fugiwara Figurine', 'img' => 'products/chikakaguyasama.jpg', 'price' => '1200.00', 'desc' => NULL, 'category_id' => '7', 'anime_id' => '1', 'store_id' => '2', 'deleted' => 'Not deleted'),
            array('name' => 'Darling in the Franxx - Ichigo Poster', 'img' => 'products/darlinginthefranxxposter.jpg', 'price' => '1399.90', 'desc' => NULL, 'category_id' => '6', 'anime_id' => '8', 'store_id' => '1', 'deleted' => 'Not deleted'),
            array('name' => 'Darling in the Franxx - Zero Two Poster', 'img' => 'products/cyberzerotwo.jpg', 'price' => '1249.90', 'desc' => NULL, 'category_id' => '6', 'anime_id' => '8', 'store_id' => '1', 'deleted' => 'Not deleted'),
            array('name' => 'Darling in the Franxx Poster', 'img' => 'products/zerotwoposter.jpg', 'price' => '1129.90', 'desc' => NULL, 'category_id' => '6', 'anime_id' => '8', 'store_id' => '1', 'deleted' => 'Not deleted'),
            array('name' => 'Horimiya - Couple', 'img' => 'products/horimiyaposterkyahhh.jpg', 'price' => '849.90', 'desc' => NULL, 'category_id' => '6', 'anime_id' => '6', 'store_id' => '1', 'deleted' => 'Not deleted'),
            array('name' => 'Horimiya - Enclosed', 'img' => 'products/horimiyaposter.png', 'price' => '999.50', 'desc' => NULL, 'category_id' => '6', 'anime_id' => '6', 'store_id' => '1', 'deleted' => 'Not deleted'),
            array('name' => 'Love is War - Chika Phone Case', 'img' => 'products/chikaphonecase.jpg', 'price' => '500.00', 'desc' => NULL, 'category_id' => '8', 'anime_id' => '1', 'store_id' => '2', 'deleted' => 'Not deleted'),
            array('name' => 'Love is War - Main Cast Poster', 'img' => 'products/kaguyaposter.jpg', 'price' => '750.00', 'desc' => NULL, 'category_id' => '6', 'anime_id' => '1', 'store_id' => '2', 'deleted' => 'Not deleted'),
            array('name' => 'Love is War - Kaguya Phone Case', 'img' => 'products/kaguyaphonecase.jpg', 'price' => '500.00', 'desc' => NULL, 'category_id' => '8', 'anime_id' => '1', 'store_id' => '2', 'deleted' => 'Not deleted'),
            array('name' => 'My Hero Academia - Hawks Poster', 'img' => 'products/mhaposter.jpg', 'price' => '950.90', 'desc' => NULL, 'category_id' => '6', 'anime_id' => '3', 'store_id' => '1', 'deleted' => 'Not deleted'),
            array('name' => 'Plus Ultra Phone Case', 'img' => 'products/plusultraphonecase.jpg', 'price' => '490.49', 'desc' => NULL, 'category_id' => '8', 'anime_id' => '3', 'store_id' => '1', 'deleted' => 'Not deleted')
        );
        DB::table('product')->insert($product);
    }
}
