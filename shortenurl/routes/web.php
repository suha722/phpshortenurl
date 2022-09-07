<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortLinkController;
use App\Models\ShortLink;

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
Route::get('/test', [ShortLinkController::class, 'index' ]);
Route::get('/', [ShortLinkController::class, 'index' ]);
Route::post('/generate-shorten-link' ,[ShortLinkController::class,'store']->name('generate.short.link'));
Route::get('/{code}' ,[ShortLinkController::class,'show']->name('show.shorten.link'));
