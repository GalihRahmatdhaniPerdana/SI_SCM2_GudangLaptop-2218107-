<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopController extends Controller
{
    //Function yang memiliki return tampilan halaman data laptop
    public function index(){
        return view("admin.laptop.laptop");
    }

    //Function yang memiliki return tampilan halaman tambah data laptop
    public function create(){
        return view("admin.laptop.laptop-entry");
    }
}
