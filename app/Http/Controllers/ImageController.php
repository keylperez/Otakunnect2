<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function update(Request $request)
    {
        if ($request->hasFile('photo')) {
            $image      = $request->file('photo');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            // $user = new User;
            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->stream(); // <-- Key point

            //dd();
            Storage::disk('local')->put('images/user/' . $fileName, $img, 'public');
            // $path = $request->file('avatar')->store('users');

            // return $path;
        }
    }
//     public function upload(Request $request)
//     {
//         if ($request->hasFile('image')) {
//             $filename = $request->image->getClientOriginalName();
//             $request->image->storeAs('images', $filename, 'public');
//             Auth()->user()->update(['image' => $filename]);
//         }
//         return redirect()->back();
//     }
// }
}