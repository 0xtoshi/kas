<?php

namespace App\Http\Controllers;

use App\Pengguna; // Load Model Pengguna Ndoro
use Illuminate\Support\Facades\Hash; // Load Package Hashing
use Illuminate\Support\Facades\Validator; // Load Package Validator

use Illuminate\Http\Request; // Load Request POST GET PUT Library

use Illuminate\Support\Arr; //Load Library array

/**
 * Bebek Unch 22/01/2021
 * @aheena
 * Controller Pengguna Bekk
 */

class PenggunaController extends Controller
{
    public function BuatUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255|min:5|unique:penggunas',
            'password' => 'required|max:255|min:5',
            'role' => 'required',
            'nama' => 'required|max:30|min:4'
        ]);
        
        // API Validator Yeyy Ndoro 

    	if ($validator->fails()) {
           return response()->json([
					'error' => true, 'messages' => $validator->messages() 
				], 400);
           exit;
        }

        Pengguna::create([
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
            'nama' => $request->input('nama')
        ]);

        return ['error' => false, 'messages' => 'Sukses Menambahkan Pengguna! '];
    }
}
