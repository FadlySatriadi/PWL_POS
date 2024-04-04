@extends('layouts.template')
{{-- Customize layout sections --}}
@section('subtitle', 'Penjualan')
@section('content_header_title', 'Penjualan')
@section('content_header_subtitle', 'Create')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Penjualan Barang Baru</h3>
            </div>

            <form method="post" action="{{ url('penjualan') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="user_id">User ID</label>
                        <input type="text" class="form-control" id="user_id" name="user_id"
                            placeholder="Masukkan User ID">
                    </div>
                    <div class="form-group">
                        <label for="pembeli">Pembeli</label>
                        <input type="text" class="form-control" id="pembeli" name="pembeli"
                            placeholder="Masukkan Pembeli">
                    </div>
                    <div class="form-group">
                        <label for="penjualan_kode">Kode Penjualan</label>
                        <input type="text" class="form-control" id="penjualan_kode" name="penjualan_kode"
                            placeholder="Masukkan Jumlah Penjualan">
                    </div>
                    <div class="form-group">
                        <label for="penjualan_tanggal">Tanggal</label>
                        <input type="datetime-local" class="form-control" id="penjualan_tanggal" name="penjualan_tanggal"
                            placeholder="Masukkan Tanggal">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
@endsection