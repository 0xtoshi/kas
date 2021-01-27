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
            'tipe' => 'required|max:255|min:5',
            'nama' => 'required|max:255|min:5',
            'no_rek' => 'required|max:255|min:5',
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
            'tipe' => $request->input('bank'),
            'nama' => $request->input('nama'),
            'no_rek' => $request->input('no_rek')
        ]);

        return ['error' => false, 'messages' => ['Sukses Menambahkan Rekening! ']];
    }


}
