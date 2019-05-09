@extends('home')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Mata Uang</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <br>

    <form action="/datamatauang/update/{{ $matauang->KodeMataUang }}" method="post">
    @csrf
        <div class="form-group">
            <label>Kode Mata Uang: </label>
            <input disabled type="text" name="KodeMataUang" value="{{ $matauang->KodeMataUang }}" placeholder="Kode Mata Uang" class="form-control">
        </div>
        <div class="form-group">
            <label>Nama Mata Uang: </label>
            <input type="text" required="required" name="NamaMataUang" value="{{ $matauang->NamaMataUang }}" placeholder="Nama Mata Uang" class="form-control">
        </div>
        <div class="form-group">
            <label>Nilai: </label>
            <input type="text" required="required" name="Tipe" value="{{ $matauang->Nilai }}" placeholder="Nilai" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>

</div><!-- /.container-fluid -->
 
@endsection