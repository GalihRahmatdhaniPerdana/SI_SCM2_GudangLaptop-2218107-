@extends('layouts.index')

@section('title', 'Form Data Penjualan')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Data Penjualan</h1>
        </div>


        <div class="form-add p-4 bg-white rounded-5 shadow mb-5">
            <form action="#" method="post">
                @csrf
                <div class="mb-4">
                    <label for="laptop_id" class="form-label">Merk Laptop <span>*</span></label>
                    <select class="form-control input" id="laptop_id" name="laptop_id">
                        <option value="" disabled selected id="defautlSelect">Pilih Merk Laptop
                        </option>
                        <option value="1">Lenovo</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="tanggal_penjualan" class="form-label">Tanggal Penjualan <span>*</span></label>
                    <input type="date" class="form-control input " id="tanggal_penjualan" name="tanggal_penjualan"
                        placeholder="Masukkan Tanggal Penjualan" required value="">
                </div>
                <div class="mb-4">
                    <label for="jumlah_jual" class="form-label">Jumlah Jual <span>*</span></label>
                    <input type="number" class="form-control input " id="jumlah_jual" name="jumlah_jual"
                        placeholder="Masukkan Jumlah Jual" required value="">
                </div>
                <div class="mb-4">
                    <label for="harga_jual" class="form-label">Harga Jual <span>*</span></label>
                    <input type="number" class="form-control input " id="harga_jual" name="harga_jual"
                        placeholder="Masukkan Harga Jual" required value="">
                </div>
                <button type="submit" class="btn btn-success py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>

    </div>
@endsection
