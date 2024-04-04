@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('stok/create') }}">Tambah</a>
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
                            <select type="text" class="form-control" id="stok_jumlah" name="stok_jumlah" required>
                                <option value="">- Semua -</option>
                                @foreach ($stok as $item)
                                    <option value="{{ $item->stok_jumlah }}">{{ $item->stok_jumlah }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Stok pengguna</small>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table-bordered table-striped table-hover table-sm table" id="table_stok">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Barang ID</th>
                        <th>User ID</th>
                        <th>Tanggal Stok</th>
                        <th>Jumlah</th>
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
            var dataStok = $('#table_stok').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ url('stok/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d) {
                        d.stok_jumlah = $("#stok_jumlah").val();
                    }
                },
                columns: [{
                        data: 'stok_id',
                        name: 'stok_id'
                    },
                    {
                        data: 'barang_id',
                        name: 'barang_id'
                    },
                    {
                        data: 'user_id',
                        name: 'user_id'
                    },
                    {
                        data: 'stok_tanggal',
                        name: 'stok_tanggal'
                    },
                    {
                        data: 'stok_jumlah',
                        name: 'stok_jumlah'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
            $('#stok_jumlah').change(function() {
                dataStok.ajax.reload();
            });
        });
    </script>
@endpush
