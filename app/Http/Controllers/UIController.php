<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekening;
use App\Pengguna;
use App\Notane;
use App\Kas;
use PDF;

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

    public function Beranda(Request $request)
    {
        
        if ($request->session()->has('pengguna')) {
            $oceng_session = session('pengguna');
        }else{
            $oceng_session = [];
        }

        $now = new \DateTime('now');
        $month = $now->format('m');
        $year = $now->format('Y');


        $data_pengguna = Pengguna::all();
        $kas_terakhir = Kas::orderBy('tanggal','DESC')->limit(10)->get();

        $total_penguna = Pengguna::count();
        $total_kasMasuk = Kas::where('tipe','kas_masuk')->sum('nominal');
        $total_kasKeluar = Kas::where('tipe','kas_keluar')->sum('nominal');
        $saldo_tersisa = ($total_kasMasuk - $total_kasKeluar);

        $kasMasuk_BulanIni = Kas::whereYear('tanggal','=', $year)
                             ->whereMonth('tanggal', '=', $month)
                             ->where('tipe','kas_masuk')->sum('nominal');
                             
        $kasKeluar_BulanIni = Kas::whereYear('tanggal','=', $year)
                              ->whereMonth('tanggal', '=', $month)
                              ->where('tipe','kas_keluar')->sum('nominal');

        $total_io = ($total_kasMasuk + $total_kasKeluar);
        

        $presentasi_kasKeluar = ($total_kasMasuk == null) ? 0 : round($total_kasKeluar/$total_kasMasuk*100);
        $presentasi_kasMasuk = (100 - $presentasi_kasKeluar);

        $meta = [
            'title' => 'Simba Dashboard',
            'diskripsi' => 'Dashboard - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba',
            'total_pengguna' => $total_penguna,
            'total_kasMasuk' => $total_kasMasuk,
            'total_kasKeluar' => $total_kasKeluar,
            'saldo_tersisa' => $saldo_tersisa,
            'data_pengguna' => $data_pengguna,
            'kas_terakhir' => $kas_terakhir,
            'presentasi_kasMasuk' => $presentasi_kasMasuk,
            'presentasi_kasKeluar' => $presentasi_kasKeluar,
            'kasMasuk_BulanIni' => $kasMasuk_BulanIni,
            'kasKeluar_BulanIni' => $kasKeluar_BulanIni

        ];
        return view('/heena/beranda', [ 
            'meta' => $meta,
            'session' => $oceng_session,
            
        ]);
    }

    public function Rekening(Request $request)
    {
        $data_rekening = Rekening::all();
        if ($request->session()->has('pengguna')) {
            $oceng_session = session('pengguna');
        }else{
            $oceng_session = [];
        }

        
        $meta = [
            'title' => 'Simba Rekening',
            'diskripsi' => 'Rekening - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];
        return view('/heena/rekening',[ 
            'data_rek' => $data_rekening,
            'meta' => $meta,
            'session' => $oceng_session
        ]);
    }

    public function KasMasuk(Request $request)
    {
        
        if ($request->session()->has('pengguna')) {
            $oceng_session = session('pengguna');
        }else{
            $oceng_session = [];
        }

        
        $data_rekening = Rekening::all();

        $data_kas = Kas::OrderBy('kas.tanggal','DESC')
                    ->where('kas.tipe','=','kas_masuk')
                    ->join('notanes', 'kas.id_nota', '=', 'notanes.id_nota')
                    ->join('rekenings','kas.id_rekening', '=', 'rekenings.id_rekening')
                    ->get();

        //print_r($data_kas);

        $meta = [
            'title' => 'Simba Kas Masuk',
            'diskripsi' => 'Kas Masuk - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];
        return view('/heena/KasMasuk',[ 
            'meta' => $meta,
            'data_kas' => $data_kas,
            'data_rek' => $data_rekening,
            'session' => $oceng_session
        ]);
    }

    public function KasKeluar(Request $request)
    {

        if ($request->session()->has('pengguna')) {
            $oceng_session = session('pengguna');
        }else{
            $oceng_session = [];
        }

        
        $data_rekening = Rekening::all();

        $data_kas = Kas::OrderBy('kas.tanggal','DESC')
                    ->where('kas.tipe','=','kas_keluar')
                    ->join('notanes', 'kas.id_nota', '=', 'notanes.id_nota')
                    ->join('rekenings','kas.id_rekening', '=', 'rekenings.id_rekening')
                    ->get();

        $meta = [
            'title' => 'Simba Kas Masuk',
            'diskripsi' => 'Kas Masuk - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];
        return view('/heena/KasKeluar',[ 
            'meta' => $meta,
            'data_kas' => $data_kas,
            'data_rek' => $data_rekening,
            'session' => $oceng_session
        ]);
    }

    public function RekapKas(Request $request)
    {

        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        $meta = [
            'title' => 'Simba Kas Masuk',
            'diskripsi' => 'Rekapan - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba'
        ];



        if(!empty($request->input('bulan')) AND !empty($request->input('tahun'))) {

        $data_kas = Kas::whereYear('tanggal','=', $tahun)
                    ->whereMonth('tanggal', '=', $bulan)
                    ->get();

        $total_kredit = Kas::whereYear('tanggal','=', $tahun)
                             ->whereMonth('tanggal', '=', $bulan)
                             ->where('tipe','kas_masuk')->sum('nominal');

        $total_debit = Kas::whereYear('tanggal','=', $tahun)
                             ->whereMonth('tanggal', '=', $bulan)
                             ->where('tipe','kas_keluar')->sum('nominal');

        return view('/heena/Rekap', [ 
            'meta' => $meta,
            'kas' => $data_kas,
            'total_kredit' => $total_kredit,
            'total_debit' => $total_debit,
            'bulan' => $bulan,
            'tahun' => $tahun
        ]);

        }else if(!empty($request->input('tahun'))) {
            
            $data_kas = Kas::whereYear('tanggal','=', $tahun)
            ->get();

            $total_kredit = Kas::whereYear('tanggal','=', $tahun)
                                ->where('tipe','kas_masuk')->sum('nominal');
            $total_debit = Kas::whereYear('tanggal','=', $tahun)
                                ->where('tipe','kas_keluar')->sum('nominal');
            return view('/heena/Rekap', [ 
                'meta' => $meta,
                'kas' => $data_kas,
                'total_kredit' => $total_kredit,
                'total_debit' => $total_debit,
                'tahun' => $tahun
            ]);

        }else{


        $data_kas = Kas::OrderBy('kas.tanggal','ASC')
                    ->get();
        $total_kredit = Kas::where('tipe','kas_masuk')->sum('nominal');
        $total_debit = Kas::where('tipe','kas_keluar')->sum('nominal');
        return view('/heena/Rekap', [ 
            'meta' => $meta,
            'kas' => $data_kas,
            'total_kredit' => $total_kredit,
            'total_debit' => $total_debit,
        ]);

        }
    }


    public function Profile(Request $request)
    {

        $data_pengguna = Pengguna::all();
        
        $meta = [
            'title' => 'Simba Kas Masuk',
            'diskripsi' => 'Kas Masuk - Sistem Informasi Pengelolaan Kas',
            'app_name' => 'Simba',
            'data_pengguna' => $data_pengguna
        ];

        
        
        if ($request->session()->has('pengguna')) {
            $oceng_session = session('pengguna');
        }else{
            $oceng_session = [];
        }

        return view('/heena/Profil', [ 
            'meta' => $meta,
            'session' => $oceng_session,
            
        ]);
    }

    public function RekapPDF(Request $request)
    {
        
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');


        if(!empty($request->input('bulan')) AND !empty($request->input('tahun'))) {

        $data_kas = Kas::whereYear('tanggal','=', $tahun)
                    ->whereMonth('tanggal', '=', $bulan)
                    ->get();

        $total_kredit = Kas::whereYear('tanggal','=', $tahun)
                             ->whereMonth('tanggal', '=', $bulan)
                             ->where('tipe','kas_masuk')->sum('nominal');

        $total_debit = Kas::whereYear('tanggal','=', $tahun)
                             ->whereMonth('tanggal', '=', $bulan)
                             ->where('tipe','kas_keluar')->sum('nominal');

            $pdf = PDF::loadview('/heena/Rekapan', [ 
                'kas' => $data_kas,
                'total_kredit' => $total_kredit,
                'total_debit' => $total_debit,
                ]);
                return $pdf->download('rekap_kas.pdf');

        }else if(!empty($request->input('tahun'))) {
            
            $data_kas = Kas::whereYear('tanggal','=', $tahun)
            ->get();

            $total_kredit = Kas::whereYear('tanggal','=', $tahun)
                                ->where('tipe','kas_masuk')->sum('nominal');
            $total_debit = Kas::whereYear('tanggal','=', $tahun)
                                ->where('tipe','kas_keluar')->sum('nominal');

            $pdf = PDF::loadview('/heena/Rekapan', [ 
            'kas' => $data_kas,
            'total_kredit' => $total_kredit,
            'total_debit' => $total_debit,
            ]);
            return $pdf->download('rekap_kas.pdf');

        }else{


        $data_kas = Kas::OrderBy('kas.tanggal','ASC')
                    ->get();
        $total_kredit = Kas::where('tipe','kas_masuk')->sum('nominal');
        $total_debit = Kas::where('tipe','kas_keluar')->sum('nominal');
        


        $pdf = PDF::loadview('/heena/Rekapan', [ 
            'kas' => $data_kas,
            'total_kredit' => $total_kredit,
            'total_debit' => $total_debit,
        ]);
	    return $pdf->download('rekap_kas.pdf');

        }

    }

}
