@extends('layouts.main')

@section('main-container')

@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

<h1>Edit Dpsen</h1><br>
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <form class="" action="/dosenpembimbing.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH ')
                            <div class="position-relative form-group"><label>Nama</label><input name="nama" type="text" class="form-control"></div>
                            <div class="position-relative form-group"><label>NIP/NIPH</label><input name="nip_niph" type="text" class="form-control"></div>
                            <div class="position-relative form-group"><label>Jurusan</label><input name="jurusan" type="text" class="form-control"></div>
                            <div class="position-relative form-group"><label>Program Studi</label><input name="prodi" type="text" class="form-control"></div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <button class="mt-1 btn btn-primary" style="float:right">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection