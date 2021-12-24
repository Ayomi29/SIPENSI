<?php

namespace App\Http\Controllers;


use App\Models\PendaftaranSidang;
use Illuminate\Http\Request;

class PendaftaranSidangController extends Controller
{
    public function pendaftaran_sidang()
    {
        return view('pendaftaran-sidang', [
            "title" => "Pendaftaran Sidang Akhir",
            "prodis" => ['-- Program Studi --', 'Fisika', 'Matematika', 'Teknik Mesin', ' Teknik Elektro', 'Teknik Kimia', 'Teknik Material dan Metalurgi', 'Teknik Sipil', 'Perencanaan Wilayah dan Kota', 'Teknik Perkapalan', 'Sistem Informasi', 'Informatika', 'Teknik Industri', 'Teknik Lingkungan', 'Teknik Kelautan', 'Arsitektur', 'Statistika', 'Ilmu Aktuaria', 'Rekayasa Keselamatan', 'Teknik Pangan', 'Bisnis Digital']
        ]);
    }
    public function store(Request $request)
    {
        $valid = $request->validate([
            'jurusan' => 'required|max:255',
            'prodi' => 'required|max:255',
            'judul_proposal' => 'required|max:255',
            'dosen_pembimbing' => 'required|max:255',
            'file' => 'required|doc,pdf|max:8192',
        ]);
        $name = $request->file('file')->getClientOriginalName();

        $path = $request->file('file')->store('public/pendaftaran-sidang');


        $save = new PendaftaranSidang;

        $save->name = $name;
        $save->path = $path;

        PendaftaranSidang::create($valid);


        return redirect('pendaftaran-sidang')->with('status', 'File Has been uploaded successfully');
    }
}
