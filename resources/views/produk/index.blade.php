@extends('apps')

@section('konten')
    <a href="{{ url('add') }}">
        <button class="btn btn-primary mt-4" type="button">+ Tambah Produk</button>
    </a>
    @foreach ($produks as $item)
        <div class="card mt-3">
            <div class="card-body">
                <div class="card-title">
                    {{ $item->nama_produk }}  {{ $item->harga }} 
                </div>
                <h6 class="card-subtitle mb-2 text-muted">{{ $item->kategori }}</h6>
                <div class="card-text">{{ $item->deskripsi }}</div>
                <a href="/produk/{{ $item->id }}/edit">
                    <button class="btn btn-warning mt-2" type="button">Ubah</button>
                </a>
                <a href="{{ $item->id_produk }}/delete">
                    <button class="btn btn-danger mt-2" type="button">Hapus</button>
                </a>
            </div>
        </div>
    @endforeach
@endsection