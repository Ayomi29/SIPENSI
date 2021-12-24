@extends('layouts.main')
@section('main-container')
<div class="main-container">
    <form action="/pendaftaran-sidang" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-data">
            <select name="Jurusan" required>
                <option>-- Jurusan --</option>
                <option>Jurusan Matematika dan Teknologi Informasi (JMTI)</option>
                <option>Jurusan Sains, Teknologi Pangan, dan Kemaritiman (JSTPK)</option>
                <option>Jurusan Teknologi Industri dan Proses (JTIP)</option>
                <option>Jurusan Teknik Sipil dan Perencanaan (JTSP)</option>
                <option>Jurusan Ilmu Kebumian dan Lingkungan (JIKL)</option>
            </select>
        </div>
        <div class="form-data">
            <select required>
                @foreach ($prodis as $prodi) 
                <option>{{ $prodi }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-data">
            <input type="text" name="judul" class="text" placeholder="Judul Tugas Akhir" required value="{{ old('judul') }}">
        </div>
        <div class="form-data">
            <label>File</label>
            <input name="file" type="file" class="form-control-file">
            <small>Format file berupa .pdf atau .docx, max size file: 8mb.</small>
            <button class="button" type="submit">Submit</button>
        </div>
    </form>			
</div>
		
@endsection