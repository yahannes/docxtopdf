<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\WordDocxToPDFController;
  
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

Route::get('word-docx-to-pdf', [WordDocxToPDFController::class, 'index']);
Route::post('word-docx-to-pdf', [WordDocxToPDFController::class, 'save']);