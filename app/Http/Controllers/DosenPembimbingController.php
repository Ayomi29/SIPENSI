<?php

namespace App\Http\Controllers;

use App\Models\DosenPembimbing;
use Illuminate\Http\Request;

class DosenPembimbingController extends Controller
{
    public function dosenpembimbing()
    {
        return view('dosping', [
            "title" => "Dosen Pembimbing",
            "prodis" => ['-- Program Studi --', 'Fisika', 'Matematika', 'Teknik Mesin', ' Teknik Elektro', 'Teknik Kimia', 'Teknik Material dan Metalurgi', 'Teknik Sipil', 'Perencanaan Wilayah dan Kota', 'Teknik Perkapalan', 'Sistem Informasi', 'Informatika', 'Teknik Industri', 'Teknik Lingkungan', 'Teknik Kelautan', 'Arsitektur', 'Statistika', 'Ilmu Aktuaria', 'Rekayasa Keselamatan', 'Teknik Pangan', 'Bisnis Digital'],
            "dosen" => ['dosen1', 'dosen2', 'dosen3']
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

        $path = $request->file('file')->store('public/dosenpembimbing');


        $save = new DosenPembimbing;

        $save->name = $name;
        $save->path = $path;

        DosenPembimbing::create($valid);

        return redirect('dosping')->with('status', 'File Has been uploaded successfully');
    }
}
