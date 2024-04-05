@extends('layouts.template')
{{-- Customize layout sections --}}
@section('subtitle', 'Detail')
@section('content_header_title', 'Detail')
@section('content_header_subtitle', 'Create')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Detail Barang Baru</h3>
            </div>

            <form method="post" action="{{ url('detail') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="penjualan_id">Penjualan ID</label>
                        <input type="text" class="form-control" id="penjualan_id" name="penjualan_id"
                            placeholder="Masukkan User ID">
                    </div>
                    <div class="form-group">
                        <label for="barang_id">Barang ID</label>
                        <input type="text" class="form-control" id="barang_id" name="barang_id"
                            placeholder="Masukkan Barang ID">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga"
                            placeholder="Masukkan Harga">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah"
                            placeholder="Masukkan Jumlah">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
@endsection