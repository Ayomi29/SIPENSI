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

    public function sidang()
    {
        return view('sidang', [
            "title" => "Sidang Akhir"
        ]);
    }
}
