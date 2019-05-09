@extends('home')
@section('content')
<div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Data Klasifikasi</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <br>

        <form action="/dataklasifikasi/update/{{ $kategori->KodeKategori }}" method="post">
        @csrf
            <div class="form-group">
                <label>Kode Klasifikasi: </label>
                <input disabled type="text" name="KodeKategori" value="{{ $kategori->KodeKategori }}" placeholder="Kode Klasifikasi" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Klasifikasi : </label>
                <input type="text" name="NamaKategori" value="{{ $kategori->NamaKategori }}" required="required" placeholder="Nama Klasifikasi" class="form-control">
            </div>
            <div class="form-group">
                <label>Kode Item: </label>
                <input type="text" name="KodeItemAwal" value="{{ $kategori->KodeItemAwal }}" required="required" placeholder="Kode Item" class="form-control">
            </div>
            <button class="btn btn-success">Simpan</button>
        </form>

    </div><!-- /.container-fluid -->


@endsection