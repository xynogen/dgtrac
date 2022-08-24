<?php

namespace App\Controllers;

use App\Models\User;

class Tentang extends BaseController
{
    public function index()
    {
        $user = new User();
        $user->select('*');
        $user->where('id', '1');
        $data['tentang'] = $user->find();

        return view('tentang', $data);
    }
}