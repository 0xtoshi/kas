<?php

namespace App\Http\Controllers;

use App\Pengguna; // Load Model Pengguna Ndoro
use Illuminate\Support\Facades\Hash; // Load Package Hashing
use Illuminate\Support\Facades\Validator; // Load Package Validator

use Illuminate\Http\Request; // Load Request POST GET PUT Library

use Illuminate\Support\Arr; //Load Library array
use Carbon\Carbon;

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

    public function LoginUser(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255|min:5|exists:penggunas',
            'password' => 'required|max:255|min:5',
            'role' => 'required',
            
        ]);
        
        // API Validator Yeyy Ndoro 

    	if ($validator->fails()) {
           return response()->json([
					'error' => true, 'messages' => $validator->messages() 
				], 400);
           exit;
        }

        $data_inputan = [
            'oceng_username' => $request->input('username'),
            'oceng_password' => $request->input('password'),
            'oceng_role' => $request->input('role')
        ];


        // Get Table WHere username
        $oceng_verif = Pengguna::where('username', $data_inputan['oceng_username'])->first();

        // Verifikasi Password Dengan Enskripsi Bcrypt 

        if($data_inputan['oceng_role'] !== $oceng_verif->role){

            return response()->json([
                'error' => true, 'messages' => [ 'akun' => 'Role tidak sesuai dengan yang anda pilih!' ]
            ], 200);

            exit;
        }

        if ( Hash::check($data_inputan['oceng_password'], $oceng_verif->password) ) { 

            // Buat Callback 

            $oceng_callback = response()->json([
                'error' => false, 'messages' => [ 'akun' => ['Login Sukses Unch 🐈🐈!'] ]
            ], 200);

            // Buat Session 
            
            $session_data['pengguna'] = Arr::except(json_decode($oceng_verif, true), ['password']);
            /**
             * 
                [pengguna] => Array
                (
                    [id_pengguna] => 1
                    [username] => heena
                    [role] => Ketua
                    [created_at] => 2021-01-21T19:37:13.000000Z
                    [updated_at] => 2021-01-21T19:37:13.000000Z
                )
             */
            session($session_data);

            //print_r($session_data);

        }else{
            
            $oceng_callback = response()->json([
                'error' => false, 'messages' => [ 'akun' => ['Pastikan anda memasukan password dengan benar 😿!'] ]
            ], 403);

        }
        
        return $oceng_callback;
    }
}
