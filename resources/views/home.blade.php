@extends('layouts.top-nav')

@section('content-wrapper')
<!-- Content Wrapper. Contains page content -->

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
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-yellow">
          <div class="card-header">
            
            @if(auth()->user()->is_admin == 1)
            <a href="{{url('produk/add')}}" class="btn btn-light"><i class="fa fa-database"></i> Tambah Barang</a>
            @else
            Silahkan Pesan seusai ketersediaan... 
            @endif
          </div>

          <div class="card-body">
            <div class="row">
          @foreach($barangs as $barang)
            <div class="col-sm-4">
              <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="card-img-top" alt="..." height="400">

              <div class="card-body">
              <h5 class="card-title">{{ $barang->nama_barang }}</h5>
              <p class="card-text">
                <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                <strong>Stok :</strong> {{ $barang->stok }} <br>
                <hr>
                <strong>Keterangan :</strong> <br>
                {{ $barang->keterangan }} 
                </p>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
                @if(auth()->user()->is_admin == 1)
                <a href="{{url('produk/update')}}" class="btn btn-primary"><i class="fa fa-upload"></i> Update Barang</a>
                <a href="{{url('produk/hapus')}}" class="btn btn-danger"><i class="fa fa-upload"></i> Hapus Barang</a>
                @endif
              </div>
            </div> 
            @endforeach
          </div>
        </div>
        
      </div>
    </div>
  </div>

</div>
@endsection


