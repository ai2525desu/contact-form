<?php

use Illuminate\Support\Facades\Route;
// ContactControllerの反映
use App\Http\Controllers\ContactController;

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

// indexアクションの呼び出し
Route::get('/', [ContactController::class, 'index']);

// indexブラウザページにて送信ボタンが押されたときにconfirmアクションが実行されるよう設定
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
