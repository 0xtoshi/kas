<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Load Package Validator
use App\Kas; // Load Model Rekening Ndoro
use App\Notane;
use Illuminate\Support\Arr; //Load Library array

class KasController extends Controller
{
    public function TambahKas(Request $request) {

        $validator = Validator::make($request->all(), [
            'nominal' => 'required',
            'keterangan' => 'required',
            'id_rekening' => 'required',
            'id_pengguna' => 'required',
            'tanggal' => 'required',
            'tipe' => 'required'
        ]);
        
        // API Validator Yeyy Ndoro 

    	if ($validator->fails()) {
           return response()->json([
					'error' => true, 'messages' => $validator->messages() 
				], 400);
           exit;
        }

        $id_notane = Notane::select('id_nota')->orderBy('id_nota','DESC')->first();
        $tanggal = date("Y-m-d",strtotime($request->input('tanggal')));

        Kas::create([
            'nominal' => $request->input('nominal'),
            'keterangan' => $request->input('keterangan'),
            'tanggal' => $tanggal,
            'id_nota' => $id_notane->id_nota,
            'id_rekening' => $request->input('id_rekening'),
            'id_pengguna' => $request->input('id_pengguna'),
            'tipe' => $request->input('tipe')
        ]);

        return ['error' => false, 'messages' => ['Sukses Menambahkan Rekening! ']];


    }
}
