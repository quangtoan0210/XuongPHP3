<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $listSanPham = SanPham::query()->get()->all();
        return view('clients.trangchu', compact('listSanPham'));
    }
    public function chiTietSanPham(string $id) {
        $sanPham = SanPham::query()->findOrFail($id);

        $listSanPham = SanPham::query()->get();

        return view('clients.sanphams.chitiet', compact('sanPham', 'listSanPham'));
    }
}
