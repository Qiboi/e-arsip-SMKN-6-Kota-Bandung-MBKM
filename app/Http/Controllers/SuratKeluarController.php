<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index() {
        return view('/suratkeluar',[
            'title' => 'Surat Keluar'
        ]);
    }
}
