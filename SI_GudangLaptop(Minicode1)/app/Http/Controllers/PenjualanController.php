<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    //Function yang memiliki return tampilan halaman data penjualan
    public function index(){
       return view("admin.penjualan.penjualan");
   }

    //Function yang memiliki return tampilan halaman tambah data penjualan
    public function create(){
        return view("admin.penjualan.penjualan-entry");
    }
}
