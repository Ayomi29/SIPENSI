@extends('layouts.main')
@section('main-container')
<div class="main-container">
        <form action="/dosenpembimbing.store" method="POST" enctype="multipart/form-data">
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
                @can('isAdmin')
                <a href="dosenpembimbing.create" class="btn-plus">Tambah Dosen</a>
                @endcan
            </div>
            <div class="form-data">
                <input type="file" name="file">
                <input type="submit" value="Submit">
            </div>
            {{-- @can('isAdmin')
                            <table class="mb-0 table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>nip/niph</th>
                            <th>Jurusan</th>
                            <th>Prodi<th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $result => $hasil)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $hasil->name}}</td>
                            <td>{{ $hasil->nip_niph}}</td>
                            <td>{{ $hasil->jurusan}}</td>
                            <td>{{ $hasil->prodi}}</td>
                            <td>
                                <form action="/dosenpembimbing.destroy, $hasil->id" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="/dosenpembimbing.edit, $hasil->id" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endcan --}}
		</form>
    </div>
</div>
		
@endsection