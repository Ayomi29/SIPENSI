@extends('layouts.main')
@section('main-container')
<div class="cards">
    <div class="card-single">
        <a href="/dosenpenguji">
            <i class="fas fa-user-circle fa-2x"></i>
            <h5 class="card-title">Dosen Penguji</h5>
        </a>
    </div>
    <div class="card-single">
        <a href="/pendaftaran-sidang">
            <i class="fas fa-address-card fa-2x"></i>
            <h5 class="card-title">Pendaftaran Sidang Akhir</h5>
        </a>
    </div>
    <div class="card-single">
        <a href="/sidang">
            <i class="fas fa-chalkboard-teacher fa-2x"></i>
            <h5 class="card-title">Sidang Akhir</h5>
        </a>
    </div>
</div>
@endsection