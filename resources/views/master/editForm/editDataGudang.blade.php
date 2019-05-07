@extends('home')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Gudang</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <br>

    <form action="/datagudang/update" method="post">
    @csrf
    @foreach($lokasi as $lok)
        <div class="form-group">
            <label>Kode Gudang: </label>
            <input disabled type="text" name="KodeLokasi" value="{{ $lok->KodeLokasi }}" placeholder="Kode Gudang" class="form-control">
        </div>
        <div class="form-group">
            <label>Nama Gudang: </label>
            <input type="text" required="required" name="NamaLokasi" value="{{ $lok->NamaLokasi }}" placeholder="Nama Gudang" class="form-control">
        </div>
        <div class="form-group">
            <label>Tipe: </label>
            <input type="text" required="required" name="Tipe" value="{{ $lok->Tipe }}" placeholder="Tipe" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    @endforeach
    </form>

</div><!-- /.container-fluid -->
 
@endsection