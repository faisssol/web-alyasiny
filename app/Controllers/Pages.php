<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'PPP Alyasiny'
        ];
        return view('pages/beranda', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('pages/profil', $data);
    }

    public function kegiatan()
    {
        $data = [
            'title' => 'Kegiatan'
        ];
        return view('pages/kegiatan', $data);
    }

    public function fasilitas()
    {
        $data = [
            'title' => 'Fasilitas'
        ];
        return view('pages/fasilitas', $data);
    }

    public function pendaftaran()
    {
        $data = [
            'title' => 'Pendaftaran'
        ];
        return view('pages/pendaftaran', $data);
    }

    public function pengumuman()
    {
        return view('pages/pengumuman');
    }

    public function kontak()
    {
        return view('pages/kontak');
    }
}
