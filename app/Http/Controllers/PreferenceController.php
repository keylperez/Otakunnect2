<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    public function index(){
        $anime = DB::select("SELECT * FROM anime");
        $category = DB::select("SELECT * FROM category");
        return Inertia::render('Category', [
            'anime' => $anime,
            'category' => $category,
        ]);
    }
    public function userPref(Request $request){
        $uid = Auth::id();
        $anime = DB::select(
            "SELECT preference_id, anime_id 
            FROM preference
            WHERE anime_id!='NULL' AND user_id='$uid'");
        $category = DB::select(
            "SELECT preference_id, category_id 
            FROM preference
            WHERE category_id!='NULL' AND user_id='$uid'");
        return Inertia::render('Category', [
            'anime' => $anime,
            'category' => $category,
        ]);
    }
    public function add(Request $request, $id, $type){
        $uid = Auth::id();
        DB::insert(
            "INSERT INTO preference(user_id,'$type')
            VALUES('$uid','$id')");
    }
    public function delete(Request $request, $id){
        DB::delete(
            "DELETE FROM preference
            WHERE preference_id=='$id'");
    }
    
}
