<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
     //Function yang memiliki return tampilan halaman data supplier
     public function index(){
        return view("admin.supplier.supplier");
    }
 
     //Function yang memiliki return tampilan halaman tambah data supplier
     public function create(){
         return view("admin.supplier.supplier-entry");
     }
}
