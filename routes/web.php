<?php

use App\Http\Controllers\FullCalendarController;
use Illuminate\Support\Facades\Route;

Route::get('full-calendar', [FullCalendarController::class, 'index']);
