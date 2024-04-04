@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('penjualan/create') }}">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter</label>
                        <div class="col-3">
                            <select type="text" class="form-control" id="penjualan_kode" name="penjualan_kode" required>
                                <option value="">- Semua -</option>
                                @foreach ($penjualan as $item)
                                    <option value="{{ $item->penjualan_kode }}">{{ $item->penjualan_kode }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Stok pengguna</small>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table-bordered table-striped table-hover table-sm table" id="table_penjualan">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Pembeli</th>
                        <th>Penjualan Kode</th>
                        <th>Tanggal Penjualan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
    <script>
        $(document).ready(function() {
            var dataStok = $('#table_penjualan').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ url('penjualan/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d) {
                        d.penjualan_kode = $("#penjualan_kode").val();
                    }
                },
                columns: [{
                        data: 'penjualan_id',
                        name: 'penjualan_id'
                    },
                    {
                        data: 'user_id',
                        name: 'user_id'
                    },
                    {
                        data: 'pembeli',
                        name: 'pembeli'
                    },
                    {
                        data: 'penjualan_kode',
                        name: 'penjualan_kode'
                    },
                    {
                        data: 'penjualan_tanggal',
                        name: 'penjualan_tanggal'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
            $('#penjualan_kode').change(function() {
                dataStok.ajax.reload();
            });
        });
    </script>
@endpush
