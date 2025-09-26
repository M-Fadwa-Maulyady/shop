<x-layoutAdmin>
    <section class="content-header">
        <div class="container-fluid">
            <h4>Data Product</h4>
            <a href="{{ route('createProduct') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Product
            </a>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Product</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode Product</th>
                                <th>Nama Product</th>
                                <th>Kategori Product</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $b)
                            <tr>
                                <td>{{ $b->kode_p }}</td>
                                <td>{{ $b->nama_p }}</td>
                                <td>{{ $b->kategori_p }}</td>
                                <td>{{ $b->harga_p }}</td>
                                <td>{{ $b->stok_p }}</td>
                                <td>
                                    <a href="{{ route('editProduct', $b->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('deleteProduct', $b->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-layoutAdmin>
