<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ImageController extends Controller
{
    public function index()
    {
        return View('images.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        /*
            Write Code Here for
            Store $imageName name in DATABASE from HERE
        */

        return back()
            ->with('sucPostcess','You have successfully upload image.')
            ->with('image',$imageName);
    }

    public function ajaxImage()
    {
        return View('ajax-image.index');
    }

    public function ajaxStore(Request $request): JsonResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        Image::create(['name'=> $imageName]);
        return response()->json('Image uploaded successfully');
    }

    public function multipleImage()
    {
        return view('images.multi-image');
    }

    public function multipleStore(Request $request)
    {
        $request->validate([
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $images = [];
        if ($request->images){
            foreach($request->images as $image)
            {
                $imageName = time().rand(1,99).'.'.$image->extension();
                $image->move(public_path('images'), $imageName);
                $images[]['name'] = $imageName;
            }
        }

        foreach ($images as $image) {
            Image::create($image);
        }

        return back()
                ->with('success','You have successfully upload image.')
                ->with('images', $images);
    }
}
