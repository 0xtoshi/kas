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

        if(is_null($request->input('id_nota')))
        {
            $id_nota = 1;

        }else{
            $id_nota = $request->input('id_nota');
        }

        $tanggal = date("Y-m-d",strtotime($request->input('tanggal')));

        Kas::create([
            'nominal' => $request->input('nominal'),
            'keterangan' => $request->input('keterangan'),
            'tanggal' => $tanggal,
            'id_nota' => $id_nota,
            'id_rekening' => $request->input('id_rekening'),
            'id_pengguna' => $request->input('id_pengguna'),
            'tipe' => $request->input('tipe')
        ]);

        return ['error' => false, 'messages' => ['Sukses Menambahkan Kas Masuk! ']];


    }


    public function DeleteKas(Request $request) {

        $validator = Validator::make($request->all(), [
            'id_kas' => 'required|exists:kas',
        ]);
        
        // API Validator Yeyy Ndoro 

    	if ($validator->fails()) {
           return response()->json([
					'error' => true, 'messages' => $validator->messages() 
				], 400);
           exit;
        }

        Kas::where('id_kas', $request->input('id_kas'))->delete();

        return ['error' => false, 'messages' => ['Sukses Menghapus Kas! ']];

    }

    public function getDataKas($id) {

        return Kas::where('id_kas', $id)->first();

    }

    public function UpdateKas(Request $request) { 
        
        $validator = Validator::make($request->all(), [
            'id_kas' => 'required|exists:kas',
            'nominal' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'id_rekening' => 'required'
        ]);
        
        // API Validator Yeyy Ndoro 

    	if ($validator->fails()) {
           return response()->json([
					'error' => true, 'messages' => $validator->messages() 
				], 400);
           exit;
        }

        Kas::where('id_kas', $request->input('id_kas'))
                ->update([
                    'nominal' => $request->input('nominal'),
                    'tanggal' => $request->input('tanggal'),
                    'keterangan' => $request->input('keterangan'),
                    'id_rekening' => $request->input('id_rekening'),
                    
                ]);
        
        return ['error' => false, 'messages' => ['Sukses Update Rekening! ']];
    }
}
