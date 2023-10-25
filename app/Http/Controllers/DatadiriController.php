<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatadiriController extends Controller
{
    public function index(){
        $nama = "Titto Nugraha Auladhana";
        $bio = "Saya mahasiswa Informatika UNSIKA";
        $hobby = ["Hangout","Main Game","Nonton Film"];
        return view ('biodata',['nama'=>$nama,'biodata'=>$bio,'hobby'=>$hobby]);
    }
}
