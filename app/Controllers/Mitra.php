<?php

namespace App\Controllers;

use App\Models\Banner;
use App\Models\Catatan;
use App\Models\Mitra as MitraModel;

class Mitra extends BaseController
{
    public function single($id)
    {   
        $mitra = new MitraModel();
        $mitra->select('*');
        $mitra->where('id', $id);
        $data['mitra'] = $mitra->find();

        $catatan = new Catatan();
        $catatan->select('*');
        $catatan->where('id_mitra', $id);
        $data['catatan'] = $catatan->find();

        $db = db_connect();
        $query = $db->query("SELECT *
                            FROM foto
                            JOIN banner on banner.id = foto.id_banner
                            JOIN mitra on mitra.id = banner.id_mitra
                            WHERE foto.id IN (SELECT MAX(foto.id) FROM foto GROUP BY id_banner) 
                            AND id_mitra = ". $id ." AND status = 'show';"
                            );

        $data['dataProduk'] = $query->getResultArray();

        return view('mitra', $data);

    }

    public function index()
    {
        $mitra = new MitraModel();
        $mitra->select('*');
        $mitras = $mitra->findAll();

        $catatan = new Catatan();
        $catatan->select('*');
        $catatans = $catatan->findAll();
    
        $data['mitras'] = $mitras;
        $data['catatans'] = $catatans;


        return view('mitraList', $data);
    }


}