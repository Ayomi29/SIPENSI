<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', [
            "title" => "Dashboard"
        ]);
    }

    public function home()
    {
        return view('home', [
            "title" => "SIPENSI ITK"
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "About"
        ]);
    }

    public function login()
    {
        return view('login', [
            "title" => "SIPENSI ITK"
        ]);
    }

    public function sempro()
    {
        return view('sempro', [
            "title" => "Seminar Proposal"
        ]);
    }

    public function sidangakhir()
    {
        return view('sidangakhir', [
            "title" => "Sidang Akhir"
        ]);
    }

    public function dosenpembimbing()
    {
        return view('dosping', [
            "title" => "Dosen Pembimbing"
        ]);
    }

    public function pendaftaran_seminar()
    {
        return view('pendaftaran-seminar', [
            "title" => "Pendaftaran Seminar Proposal"
        ]);
    }

    public function seminar()
    {
        return view('seminar', [
            "title" => "Seminar Proposal"
        ]);
    }

    public function dosenpenguji()
    {
        return view('dosenpenguji', [
            "title" => "Dosen Penguji"
        ]);
    }

    public function pendaftaran_sidang()
    {
        return view('pendaftaran-sidang', [
            "title" => "Pendaftaran Sidang Akhir"
        ]);
    }

    public function sidang()
    {
        return view('sidang', [
            "title" => "Sidang Akhir"
        ]);
    }
}
