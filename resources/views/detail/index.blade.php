@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('detail/create') }}">Tambah</a>
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
                            <select type="text" class="form-control" id="harga" name="harga" required>
                                <option value="">- Semua -</option>
                                @foreach ($detail as $item)
                                    <option value="{{ $item->harga }}">{{ $item->harga }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table-bordered table-striped table-hover table-sm table" id="table_detail">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Penjualan ID</th>
                        <th>Barang ID</th>
                        <th>Harga</th>
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
            var dataDetail = $('#table_detail').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ url('detail/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d) {
                        d.harga = $("#harga").val();
                    }
                },
                columns: [{
                        data: 'detail_id',
                        name: 'detail_id'
                    },
                    {
                        data: 'penjualan_id',
                        name: 'penjualan_id'
                    },
                    {
                        data: 'barang_id',
                        name: 'barang_id'
                    },
                    {
                        data: 'harga',
                        name: 'harga'
                    },
                    {
                        data: 'jumlah',
                        name: 'jumlah'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
            $('#harga').change(function() {
                dataDetail.ajax.reload();
            });
        });
    </script>
@endpush
