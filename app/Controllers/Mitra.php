<?php

namespace App\Controllers;

use App\Models\Banner;

class Mitra extends BaseController
{
    public function single($id)
    {   
        $produk = new Banner();
        $produk->select('*');
        $produk->join('foto', 'banner.id = foto.id_banner');
        $produk->join('mitra', 'mitra.id=banner.id_mitra');
        $produk->where('status', 'show');
        $produk->where('foto.id_banner', $id);
        $data['banners'] = $produk->find();

        return view('mitra', $data);

    }

    public function index()
    {
        return view('mitraList');
    }
}