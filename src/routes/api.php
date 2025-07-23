<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Api\DetailPeminjamanController;

Route::get('details', [DetailPeminjamanController::class, 'index']);
