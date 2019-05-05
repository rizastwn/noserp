@extends('home')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Supplier</h1>
        </div><!-- /.col -->
        <div class="form-group">
                <label>Kode Supplier: </label>
                <input disabled  type="text" name="KodeSupplier" placeholder="Kode Supplier" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Supplier: </label>
                <input  type="text" name="NamaSupplier" placeholder="Nama Supplier" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat: </label>
                <input name="Alamat" placeholder="Alamat" class="form-control">
            </div>
            <div class="form-group">
                <label>Telepon: </label>
                <input name="Telepon" placeholder="Telepon" class="form-control">
            </div>
            <div class="form-group">
                <label>Handphone: </label>
                <input name="Handphone" placeholder="Handphone" class="form-control">
            </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
 
@endsection