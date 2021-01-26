<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    public function Login()
    {
        $meta = [
            'title' => 'Simba Login',
            'diskripsi' => 'Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];
        return view('/heena/login', [ 'meta' => $meta ]);
    }

    public function Beranda()
    {
        $meta = [
            'title' => 'Simba Dashboard',
            'diskripsi' => 'Dashboard - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];
        return view('/heena/beranda', [ 'meta' => $meta ]);
    }

    public function Rekening()
    {
        $meta = [
            'title' => 'Simba Rekening',
            'diskripsi' => 'Rekening - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];
        return view('/heena/rekening', [ 'meta' => $meta ]);
    }

    public function KasMasuk()
    {
        $meta = [
            'title' => 'Simba Kas Masuk',
            'diskripsi' => 'Kas Masuk - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];
        return view('/heena/KasMasuk', [ 'meta' => $meta ]);
    }

    public function KasKeluar()
    {
        $meta = [
            'title' => 'Simba Kas Masuk',
            'diskripsi' => 'Kas Masuk - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];
        return view('/heena/KasKeluar', [ 'meta' => $meta ]);
    }

    public function RekapKas()
    {
        $meta = [
            'title' => 'Simba Kas Masuk',
            'diskripsi' => 'Kas Masuk - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];
        return view('/heena/Rekap', [ 'meta' => $meta ]);
    }

    public function RekapKasMasuk()
    {

    }

    public function RekapKasKeluar()
    {

    }

    public function RekapSemuaKas()
    {

    }

    public function User()
    {

    }

    public function Profile()
    {

    }

    public function RekapRekeing()
    {

    }
}
