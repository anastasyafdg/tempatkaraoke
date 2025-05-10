<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'Buku'],
            ['id' => 2, 'produk' => 'Pulpen'],
            ['id' => 3, 'produk' => 'Pensil'],
        ];

        return view('list_product', compact('data'));
    }
}
