<x-layoutAdmin>
    <section class="content-header">
        <div class="container-fluid">
            <h4>Tambah Product</h4>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('storeProduct') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Kode Product</label>
                    <input type="text" name="kode_p" class="form-control" value="{{ old('kode_p') }}">
                </div>

                <div class="form-group">
                    <label>Nama Product</label>
                    <input type="text" name="nama_p" class="form-control" value="{{ old('nama_p') }}">
                </div>

                <div class="form-group">
                    <label>Kategori Product</label>
                    <input type="text" name="kategori_p" class="form-control" value="{{ old('kategori_p') }}">
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga_p" class="form-control" value="{{ old('harga_p') }}">
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok_p" class="form-control" value="{{ old('stok_p') }}">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('dataProduct') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </section>
</x-layoutAdmin>