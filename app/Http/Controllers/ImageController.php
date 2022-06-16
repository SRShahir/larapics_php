<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ImageRequest;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::latest()->paginate(5);

        return view('images.index', compact('images'));
    }
    public function show(Image $image)
    {
        // $image->increment('views_count');
        return view('images.show', compact('image'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(ImageRequest $request)
    {
        // dd($request->all());
        $image = Image::create($request->getData());
        return to_route('images.index')->with('message', 'Image has been Uploaded successfully');
    }

//     public function apiIndex(Request $request)
//     {
//         $images = Image::latest()->paginate(5);
//         return response()->json($request->all());
//     }

//     public function test(Request $request)
//     {

//         $images = Image::all();

//         return response()->json($images);
//     }

//     public function test2(Request $request)
//     {

//         $images = DB::image('images')->get();

//         foreach ($images as $image) {
//             echo $image->title . '<br>';

//         }
// }

}
