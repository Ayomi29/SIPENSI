@extends('layouts.main')
@section('main-container')
<div class="main-container">
        <form action="/dosenpembimbing" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-data">
                <h2>List dosen pembimbing</h2>
            </div>
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
                <select name="dosenpembimbing">
                    @foreach ($dosen as $list)
                    <option>{{ $list }}</option>
                    @endforeach
                </select>
            </div>
                @can('isAdmin')
                <div class="form-data">
                    <input type="text" class="text"name="name" placeholder="Nama Dosen" id="name" required value="{{ old('name') }}">
                    <input type="submit" value="button">
                </div>
                @endcan
            <div class="form-data">
                <input type="file" name="file">
                <input type="submit" value="Upload">
            </div>
		</form>
    </div>
</div>
		
@endsection