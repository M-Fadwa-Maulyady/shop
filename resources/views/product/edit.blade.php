<x-layoutAdmin>
    <section class="content-header">
        <div class="container-fluid">
            <h4>Edit Product</h4>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('updateProduct', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Kode Product</label>
                    <input type="text" name="kode_p" class="form-control" value="{{ old('kode_p', $product->kode_p) }}">
                </div>

                <div class="form-group">
                    <label>Nama Product</label>
                    <input type="text" name="nama_p" class="form-control" value="{{ old('nama_p', $product->nama_p) }}">
                </div>

                <div class="form-group">
                    <label>Kategori Product</label>
                    <input type="text" name="kategori_p" class="form-control" value="{{ old('kategori_p', $product->kategori_p) }}">
                </div>

                <div class="form-group">
                    <label>harga_p</label>
                    <input type="number" name="harga_p" class="form-control" value="{{ old('harga_p', $product->harga_p) }}">
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok_p" class="form-control" value="{{ old('stok_p', $product->stok_p) }}">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('dataProduct') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </section>
</x-layoutAdmin>