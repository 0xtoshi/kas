<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Load Package Validator
use App\Nota; // Load Model Rekening Ndoro
use Illuminate\Http\File; // Load File Library Go Upload File
use Illuminate\Support\Facades\Storage; // Load Strorage Library

class NotaController extends Controller
{
    public function UploadNota(Request $request) {

        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
          ]);
  
        
  
          if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = md5(time()).'.jpg';
            $pathe = '/uploads/'.$imageName;
            $path = $request->file->move(public_path('uploads'), $imageName);

          }


  
          $get_id = Nota::insertGetId([
                'nama_gambar' => $imageName,
                'diskripsi' => $imageName,
                'lokasi_gambar' =>  $pathe,
            ]);

          return $get_id;

    }
}
