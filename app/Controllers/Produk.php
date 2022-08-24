<?php

namespace App\Controllers;

use App\Models\Banner;
use App\Models\Foto;

class Produk extends BaseController
{
    public function single($id)
    {   
        $produk = new Banner();
        $produk->select('*');
        $produk->join('foto', 'banner.id = foto.id_banner');
        $produk->join('mitra', 'mitra.id = banner.id_mitra');
        $produk->where('status', 'show');
        $produk->where('foto.id_banner', $id);
        $data['banners'] = $produk->findAll();

        return view('produk', $data);

    }

    public function index()
    {   

        $db = db_connect();
        $query = $db->query("SELECT *
                            FROM foto
                            JOIN banner on banner.id = foto.id_banner
                            JOIN mitra on mitra.id = banner.id_mitra
                            WHERE foto.id IN (SELECT MAX(foto.id) FROM foto GROUP BY id_banner) AND status = 'show';"
                            );

        $data['dataProduk'] = $query->getResultArray();

        return view('produkList', $data);
    }
}