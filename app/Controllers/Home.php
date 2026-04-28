<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {   
        $data = [
            'title' => 'Beranda',
            'hlm'   => 'Home'
        ];

        return view('v_home', $data);
    }

    public function produk()
    {
        $data = [
            'title' => 'Produk',
            'hlm'   => 'Produk'
        ];

        return view('v_produk', $data);
    }

    public function keranjang()
    {
        $data = [
            'title' => 'Keranjang',
            'hlm'   => 'Keranjang'
        ];

        return view('v_keranjang', $data);
    }
}