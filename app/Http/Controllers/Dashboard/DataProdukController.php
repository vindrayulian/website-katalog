<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataProdukController extends Controller
{
    public function index(){
        return view('pages.dashboard.menu.data_produk.index');
    }
}
