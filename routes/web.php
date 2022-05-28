<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\adminController;

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

Route::post('/', [formController::class, 'storeNewSubscriber'])->name('form.submit');

Route::get('/admin', [adminController::class, 'index']);

Route::post('/admin', [adminController::class, 'launchCampaign'])->name('campaign.launch');