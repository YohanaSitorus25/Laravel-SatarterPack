<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class KategoriController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view ('backend.content.kategori.list', compact('kategori'));
    }


    public function tambah(){

    }

    public function prosesTambah(Request $request){

    }

    public function ubah(){

    }

    public function prosesUbah(Request $request){

    }

    public function hapus(){

    }
}
