<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class,("homepage")] )->name("homepage");
Route::get("/prenota",[PublicController::class,("book")])->name("book");

Route::post("/prenota/le_tue_prenotazioni",[PublicController::class,("youreBooks")])->name("ubook");
Route::get("/le_tue_prenotazioni",[PublicController::class,("allBooks")])->name("allBooks");