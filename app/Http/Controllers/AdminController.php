<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatih;
use App\Models\Murid;
use App\Models\KategoriTari;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view("/admin/dashboard");
    }
}
