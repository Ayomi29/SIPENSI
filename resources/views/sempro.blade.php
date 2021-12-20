@extends('layouts.main')
@section('main-container')
<div class="cards">
    <div class="card-single">
        <a href="/dosenpembimbing">
            <i class="fas fa-user-circle fa-2x"></i>
            <h5 class="card-title">Dosen Pembimbing & BMP</h5>
        </a>
    </div>
    <div class="card-single">
        <a href="/pendaftaran-seminar">
            <i class="fas fa-address-card fa-2x"></i>
            <h5 class="card-title">Pendaftaran Seminar Proposal</h5>
        </a>
    </div>
    <div class="card-single">
        <a href="/seminar">
            <i class="fas fa-users fa-2x"></i>
            <h5 class="card-title">Seminar Proposal</h5>
        </a>
    </div>

</div>
@endsection