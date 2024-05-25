<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokController extends Controller
{
    //Function yang memiliki return tampilan halaman data stok
    public function index(){
        return view("admin.stok.stok");
    }
 
     //Function yang memiliki return tampilan halaman tambah data stok
     public function create(){
         return view("admin.stok.stok-entry");
     }

}
