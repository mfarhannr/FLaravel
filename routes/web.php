<?php

use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("example", function () {
    return "Example route get";
});

Route::get("coba", function () {
    return view("coba", ['nama' => 'farhan']);
});

Route::get('/example/{exampleId}', function ($exampleId) {
    return 'example number ' . $exampleId;
});
Route::get("/posts/{postId}/comments/{commentId}", function ($postId, $commentId) {
    return "ini post ke: $postId dan comments ke : $commentId";
});
Route::get("post/{postId?}", function ($postId = null) {
    return "post opsional: $postId";
});

Route::get("/coba/example", [CobaController::class, "example"]);

Route::get("/coba/request", [CobaController::class, "request"]);
Route::post("/coba/nested-request", [CobaController::class, "nestedRequest"]);

Route::get("/response/index", [bazmaController::class, "responseFunction"]);
Route::get("/response/header", [bazmaController::class, "responseHeader"]);

Route::get("/enkripsi/code", [App\Http\Controllers\bazmaController::class, 'encryptData']);

Route::get("/redirect/to", [App\Http\Controllers\bazmaController::class, 'redirectTo']);
Route::get("/redirect/from", [App\Http\Controllers\bazmaController::class, 'redirectFrom']);

Route::get("/redirect/to/named", [App\Http\Controllers\bazmaController::class, 'redirectToNamedRoute'])->name("redirect.to");
Route::get("/redirect/from/named", [App\Http\Controllers\bazmaController::class, 'redirectFromNamedRoute']);
