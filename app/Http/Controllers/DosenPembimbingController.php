<?php

namespace App\Http\Controllers;

use App\Models\DosenPembimbing;
use App\Models\DataDosenPembimbing;
use Illuminate\Http\Request;

class DosenPembimbingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
    public function store_data(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'nip_niph' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'prodi' => 'required|max:255',
        ]);

        DataDosenPembimbing::create($data);

        return redirect('dosping')->with('status', 'File Has been uploaded successfully');
    }


    public function create()
    {
        return view('dosenpembimbing.create', [
            "title" => "Create Dosen Pembimbing",
        ]);
    }
    public function edit($id)
    {
        $data = DosenPembimbing::findOrFail($id);
        return view('dosenpembimbing.edit', compact('data'), [
            "title" => "Edit Dosen Pembimbing",
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'nip_niph' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'prodi' => 'required|max:255',

        ]);

        $data = DataDosenPembimbing::findOrFail($id);

        $updateData = [
            'nama' => $request->nama,
            'nip_niph' => $request->nip_niph,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
        ];

        $data->update($updateData);
        return redirect()->route('dosping')->with('success', 'Data telah diupdate');
    }

    public function destroy($id)
    {
        $data = DosenPembimbing::findOrFail($id);
        $data->delete();
        return redirect()->route('dosping')->with('success', 'Data telah dihapus');
    }
}
