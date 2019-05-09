@extends('home')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Satuan</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <br>

    <form action="/datasatuan/update/{{ $satuan->KodeSatuan }}" method="post">
    @csrf
        <div class="form-group">
            <label>Kode Satuan: </label>
            <input disabled type="text" name="KodeSatuan" value="{{ $satuan->KodeSatuan }}" placeholder="Kode Satuan" class="form-control">
        </div>
        <div class="form-group">
            <label>Nama Satuan: </label>
            <input type="text" required="required" name="NamaSatuan" value="{{ $satuan->NamaSatuan }}" placeholder="Nama Satuan" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>

</div><!-- /.container-fluid -->
 
@endsection

