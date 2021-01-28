<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Load Package Validator
use App\Rekening; // Load Model Rekening Ndoro
use Illuminate\Support\Arr; //Load Library array

class RekeningController extends Controller
{
    

    public function TambahRekening(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tipe' => 'required',
            'nama' => 'required',
            'no_rek' => 'required',
        ]);
        
        // API Validator Yeyy Ndoro 

    	if ($validator->fails()) {
           return response()->json([
					'error' => true, 'messages' => $validator->messages() 
				], 400);
           exit;
        }

        // Membuat Rekening Cuy
 
        Rekening::create([
            'tipe' => $request->input('tipe'),
            'nama' => $request->input('nama'),
            'no_rek' => $request->input('no_rek')
        ]);

        return ['error' => false, 'messages' => ['Sukses Menambahkan Rekening! ']];
    }

    public function DeleteRekening(Request $request) {

        $validator = Validator::make($request->all(), [
            'id_rekening' => 'required|exists:rekenings',
        ]);
        
        // API Validator Yeyy Ndoro 

    	if ($validator->fails()) {
           return response()->json([
					'error' => true, 'messages' => $validator->messages() 
				], 400);
           exit;
        }

        Rekening::where('id_rekening', $request->input('id_rekening'))->delete();

        return ['error' => false, 'messages' => ['Sukses Menghapus Rekening! ']];

    }

    public function getDataRekening($id) {

        return Rekening::where('id_rekening', $id)->first();

    }

    public function UpdateRekening(Request $request) { 
        
        $validator = Validator::make($request->all(), [
            'id_rekening' => 'required|exists:rekenings',
            'no_rek' => 'required',
            'tipe' => 'required',
            'nama' => 'required'
        ]);
        
        // API Validator Yeyy Ndoro 

    	if ($validator->fails()) {
           return response()->json([
					'error' => true, 'messages' => $validator->messages() 
				], 400);
           exit;
        }

        Rekening::where('id_rekening', $request->input('id_rekening'))
                ->update([
                    'no_rek' => $request->input('no_rek'),
                    'nama' => $request->input('nama'),
                    'tipe' => $request->input('tipe')
                ]);
        
        return ['error' => false, 'messages' => ['Sukses Update Rekening! ']];
    }


}
