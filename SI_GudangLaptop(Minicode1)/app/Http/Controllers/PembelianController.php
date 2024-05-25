<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
     //Function yang memiliki return tampilan halaman data pembelian
     public function index(){
        return view("admin.pembelian.pembelian");
    }

    //Function yang memiliki return tampilan halaman tambah data pembelian
    public function create(){
        return view("admin.pembelian.pembelian-entry");
    }
}
