<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Auth;
use Alert;
use Carbon\Carbon;

class ProdukController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(){
        $title = 'Tambah Produk';
        return view('produk.add', compact('title'));
    }

    public function store(Request $request){

        $img = $request->file('gambar');
        $tujuan = 'uploads';
        $img->move($tujuan, $img->getClientOriginalName());
    		$barang = new Barang;
            $barang->nama_barang = $request->nama;
            $barang->gambar = $request->gambar;
	    	$barang->harga = $request->harga;
	    	$barang->stok = $request->stok;
	    	$barang->keterangan = $request->keterangan;
	    	$barang->save();
    
            Alert::success('Barang Telah ditambah', 'Success');
    	return redirect('home');

    }
}
