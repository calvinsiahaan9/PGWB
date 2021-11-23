@extends('master')
@section('content')
<button type="button" class="btn btn-success table-sm">tambah</button>
    <table class="table table-dark table-borderless">
        <tr>
            <td>ID</td>
            <td>PRODUK</td>
            <td>DESKRIPSI</td>
            <td>STOCK</td>
            <td>HARGA</td>
            <td>KATEGORI_ID</td>
            <td>AKSI</td>
        </tr>
        @foreach ($getProduk as $produk)
            <tr>
                <td>{{ $produk->id }}</td>
                <td>{{ $produk->produk }}</td>
                <td>{{ $produk->deskripsi }}</td>
                <td>{{ $produk->stock }}</td>
                <td>{{ $produk->harga }}</td>
                <td>{{ $produk->kategori_id }}</td>
                
                <td><button type="button" class="btn btn-warning">edit</button>
                    <form action="{{ route('product.destroy', $produk->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
