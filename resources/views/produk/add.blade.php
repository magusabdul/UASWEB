@extends('layouts.top-nav')
 
@section('content-wrapper')

    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> GC <small>Good Clothes</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ url('produk/add') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                      
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Barang</label>
                      <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="masukan Nama Pakaian">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Harga</label>
                      <input type="number" class="form-control" name="harga" id="exampleInputPassword1" placeholder="masukan Harga">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Stok</label>
                        <input type="number" class="form-control" name="stok" id="exampleInputPassword1" placeholder="masukan Stok">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="exampleInputPassword1" placeholder="masukan Keterangan">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Input Gambar</label>
                      <div class="input-group">
                        <div class="custom-file">
                          
                          <label class="custom-file-label" for="exampleInputFile"><input type="file" class="custom-file-input" name="gambar"></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambahkan</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
    </section>
    
@endsection