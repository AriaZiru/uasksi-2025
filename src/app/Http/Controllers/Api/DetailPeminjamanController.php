<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailPeminjaman; 

class DetailPeminjamanController extends Controller
{
    public function index(){
    
    $DetailPeminjaman = DetailPeminjaman::get();
    
    return response()->json($DetailPeminjaman);
    }
}
