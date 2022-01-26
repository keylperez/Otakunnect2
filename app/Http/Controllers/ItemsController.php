<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::id();

        $items = DB::select(
            'SELECT p.product_id, p.name product_name, s.name store_name, p.img, p.price, s.store_id  
        FROM product p 
        INNER JOIN store s ON p.store_id = s.store_id
        ORDER BY RAND() 
        LIMIT 20'
        );

        if ($user_id != NULL) {
            $query = DB::select(
                "SELECT p.anime_id
                FROM preference p
                INNER JOIN anime a ON p.anime_id=a.anime_id
                Where p.user_id='$user_id'"
            );

            $anime = array();
            foreach ($query as $result) {
                array_push($anime, $result->anime_id);
            }

            $query = DB::select(
                "SELECT p.category_id
                FROM preference p
                INNER JOIN category c ON p.category_id=c.category_id
                Where p.user_id='$user_id'"
            );

            $category = array();
            foreach ($query as $result) {
                array_push($category, $result->category_id);
            }

            if ($anime != NULL && $category != NULL) {
                $query = "SELECT p.product_id, p.name product_name, p.img, p.price, p.desc, p.store_id, s.name store_name 
                FROM product p 
                INNER JOIN store s ON p.store_id = s.store_id
                WHERE anime_id IN (" . implode(',', $anime) . ") OR category_id IN (" . implode(',', $category) . ")
                ORDER BY RAND() 
                LIMIT 20";
                // printf('1');
            } else if ($anime == NULL && $category != NULL) {
                $query = "SELECT p.product_id, p.name product_name, p.img, p.price, p.desc, p.store_id, s.name store_name
                FROM product p 
                INNER JOIN store s ON p.store_id = s.store_id
                WHERE category_id IN (" . implode(',', $category) . ")
                ORDER BY RAND() 
                LIMIT 20";
                // printf('2');
            } else if ($category == NULL && $anime != NULL) {
                $query = "SELECT p.product_id, p.name product_name, p.img, p.price, p.desc, p.store_id, s.name store_name
                FROM product p 
                INNER JOIN store s ON p.store_id = s.store_id
                WHERE anime_id IN (" . implode(',', $anime) . ")
                ORDER BY RAND() 
                LIMIT 20";
                // printf('3');
            } else {
                return Inertia::render('Home', [
                    'items' => $items
                    // 'items' => $items->map(function ($item) {
                    //     return [
                    //         'img' => asset('storage/' . $item->img),
                    //         'product_name' => $item->product_name,
                    //         'price' => $item->price,
                    //         'store_name' => $item->store_name,
                    //     ];
                ]);
            }
            $prefItems = DB::select($query);
            return Inertia::render('Home', [
                'items' => $items,
                // 'items' => $items->map(function ($item) {
                //     return [
                //         'img' => asset('storage/' . $item->img),
                //         'product_name' => $item->product_name,
                //         'price' => $item->price,
                //         'store_name' => $item->store_name,
                //     ];
                // }),
                'prefItems' => $prefItems,
            ]);
        } else {
            return Inertia::render('Home', [
                'items' => $items
                // 'items' => $items->map(function ($item) {
                //     return [
                //         'img' => asset('storage/' . $item->img),
                //         'product_name' => $item->product_name,
                //         'price' => $item->price,
                //         'store_name' => $item->store_name,
                //     ];
                // }),
            ]);
        }
    }
    public function storeItem(Request $request, $id)
    {
        $item = DB::select(
            "SELECT p.product_id, p.name product_name, p.img, p.price, p.desc
            FROM product p
            INNER JOIN store s ON p.store_id = s.store_id
            WHERE p.store_id='$id'
            ORDER BY RAND()
            LIMIT 20"
        );
        $query = DB::select(
            "SELECT *
            FROM store 
            WHERE store_id='$id'"
        );
        return Inertia::render('Store', ['items' => $item, 'storeInfo' => $query]);
    }
    public function allStore(Request $request)
    {
        $query = DB::select(
            "SELECT store_id, `name` 
            FROM store 
            ORDER BY RAND()
            LIMIT 20"
        );
        return Inertia::render('Stores', ['items' => $query]);
    }
}
