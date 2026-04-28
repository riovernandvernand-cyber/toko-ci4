<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProdukController extends BaseController
{
    public function index()
    {
    $data['produk'] = [
        ['nama' => 'Laptop', 'harga' => 7000000],
        ['nama' => 'Mouse', 'harga' => 150000],
        ['nama' => 'Keyboard', 'harga' => 300000],
    ];

    return view('v_produk', $data);
    }
}