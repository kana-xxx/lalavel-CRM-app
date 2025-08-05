<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Http\Controllers\Api\AnalysisController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/analysis', [AnalysisController::class, 'index'])
->name('api.analysis');

Route::get('/searchCustomers', function (Request $request) {
    return Customer::SearchCustomers($request->search)
        ->select('id', 'name', 'kana', 'tel')->paginate(50);
});