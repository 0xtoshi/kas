<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekening;
use App\Pengguna;
use App\Notane;
use App\Kas;

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
        $data_rekening = Rekening::all();

        
        $meta = [
            'title' => 'Simba Rekening',
            'diskripsi' => 'Rekening - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];
        return view('/heena/rekening',[ 
            'data_rek' => $data_rekening,
            'meta' => $meta
        ]);
    }

    public function KasMasuk()
    {
        $now = new \DateTime('now');
        $month = $now->format('m');
        $year = $now->format('Y');

        
        $data_rekening = Rekening::all();

        $data_kas = Kas::whereYear('tanggal','=', $year)
                    ->whereMonth('tanggal', '=', $month)
                    ->where('tipe','=','kas_masuk')
                    ->join('notanes', 'kas.id_nota', '=', 'notanes.id_nota')
                    ->get();

        $meta = [
            'title' => 'Simba Kas Masuk',
            'diskripsi' => 'Kas Masuk - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];
        return view('/heena/KasMasuk',[ 
            'meta' => $meta,
            'data_kas' => $data_kas,
            'data_rek' => $data_rekening
        ]);
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
