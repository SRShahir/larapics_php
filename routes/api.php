<?php

use App\Http\Controllers\dummyAPI;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('adimages', function (Request $request) {
// return response()->json(Image::all());
// });


// Route::post('test', [dummyAPI::class,'test']);
// Route::post('apiIndex', [ImageController::class, 'apiIndex']);

// Route::post('test', function (Request $request) {

//     $id = $request->id;
//     $images = Image::find($id);

//     return response()->json($images);
// });

// Route::post('test2', function (Request $request) {
//     $title = $request->title;
//     $images = Image::find($title);
//     $title = $images->title;

//     $data = [
//         'title' => $title,
//         'image' => $images->file,

//     ];

//     return response()->json($data);
// });
