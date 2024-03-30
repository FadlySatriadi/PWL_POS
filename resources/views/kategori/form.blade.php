@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
  <div class="container">
    <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">General Elements</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form>
            <!-- input states -->
            <div class="form-group">
              <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Kode Kategori </label>
              <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Nama Kategori </label>
              <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with
                error</label>
              <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
  </div>
  </div>
@endsection

@push('scripts')
@endpush