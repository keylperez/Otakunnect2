<?php

namespace App\Http\Controllers;

use DB;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function index()
    {
        $items = DB::select('SELECT p.product_id, p.name product_name, s.name store_name, p.img, p.price FROM product p INNER JOIN store s ON p.store_id = s.store_id');

        // $user_id = Auth::id();   //temporary
        $user_id = 2;   //temporary

        $query = DB::select("       SELECT p.anime_id
                                    FROM preference p
                                    INNER JOIN anime a ON p.anime_id=a.anime_id
                                    Where p.user_id='$user_id'");
        $anime = array();
        foreach ($query as $result) {
            array_push($anime, $result->anime_id);
        }

        $query = DB::select("    SELECT p.category_id
                                    FROM preference p
                                    INNER JOIN category c ON p.category_id=c.category_id
                                    Where p.user_id='$user_id'");
        $category = array();
        foreach ($query as $result) {
            array_push($category, $result->category_id);
        }

        if ($anime != NULL && $category != NULL) {
            $query = "SELECT p.product_id, p.name product_name, p.img, p.price, p.desc, p.store_id, s.name store_name
            FROM product p 
            INNER JOIN store s ON p.store_id = s.store_id
            WHERE anime_id IN (" . implode(',', $anime) . ") OR category_id IN (" . implode(',', $category) . ")
            GROUP BY product_id
            ORDER BY RAND() 
            LIMIT 20";
            // printf('1');
        } else if ($anime == NULL) {
            $query = "SELECT p.product_id, p.name product_name, p.img, p.price, p.desc, p.store_id, s.name store_name
            FROM product p 
            INNER JOIN store s ON p.store_id = s.store_id
            WHERE category_id IN (" . implode(',', $category) . ")
            GROUP BY product_id
            ORDER BY RAND() 
            LIMIT 20";
            // printf('2');
        } else if ($category == NULL) {
            $query = "SELECT p.product_id, p.name product_name, p.img, p.price, p.desc, p.store_id, s.name store_name
            FROM product p 
            INNER JOIN store s ON p.store_id = s.store_id
            WHERE anime_id IN (" . implode(',', $anime) . ")
            GROUP BY product_id
            ORDER BY RAND() 
            LIMIT 20";
            // printf('3');
        }

        $prefItems = DB::select($query);
        return Inertia::render('Home', [
            'items' => $items,
            'prefItems' => $prefItems
        ]);
    }
}
