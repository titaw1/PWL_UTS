@extends('barangs.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Barang
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>id_barang: </b>{{ $Barang->id_barang }}</li>
                        <li class="list-group-item"><b>kode_barang: </b>{{ $Barang->kode_barang }}</li>
                        <li class="list-group-item"><b>nama_barang: </b>{{ $Barang->nama_barang }}</li>
                        <li class="list-group-item"><b>kategori_barang: </b>{{ $Barang->kategori_barang }}</li>
                        <li class="list-group-item"><b>harga: </b>{{ $Barang->harga }}</li>
                        <li class="list-group-item"><b>qty: </b>{{ $Barang->qty }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('barang.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
