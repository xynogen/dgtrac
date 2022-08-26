<?php

namespace App\Controllers;

use App\Models\Banner;
use App\Models\Counter;

class Home extends BaseController
{
    public function index()
    {   

        $db = db_connect();
        $banner = $db->query("SELECT *
                            FROM banner
                            JOIN foto ON banner.id = foto.id_banner
                            WHERE foto.id IN (SELECT MAX(foto.id) FROM foto GROUP BY id_banner) 
                            AND status = 'show' 
                            AND type = 'carousel';"
                            );
        $data['banners'] = $banner->getResultArray();



        $counter = new Counter();
        $counter->select('counter');
        $counter->where('id', '1');
        $count = $counter->find();

        $number = intval($count[0]['counter']) + 1;
       

        $counter->set('counter', $number);
        $counter->where('id', '1');
        $counter->update();

        $data['counter'] = $number;

        
        $front_pages = $db->query("SELECT *
                            FROM banner
                            JOIN foto ON banner.id = foto.id_banner
                            WHERE foto.id IN (SELECT MAX(foto.id) FROM foto GROUP BY id_banner) 
                            AND status = 'show' 
                            AND type = 'front_page';"
                            );
        $data['frontpages'] = $front_pages->getResultArray();
        

        $bottom_banner = $db->query("SELECT *
                            FROM banner
                            JOIN mitra ON mitra.id = banner.id_mitra
                            JOIN foto ON foto.id_banner = banner.id 
                            WHERE foto.id IN (SELECT MAX(foto.id) FROM foto GROUP BY id_banner) 
                            AND status = 'show' 
                            AND type = 'normal';"
                            );

        $data['bottomBanners'] = $bottom_banner->getResultArray();
        
        return view('home', $data);

    }
}
