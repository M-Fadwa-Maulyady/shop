<x-layoutAdmin>
    <section class="content-header">
        <div class="container-fluid">
            <h4>Data User</h4>
            <a href="{{ route('createUser') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah User
            </a>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar User</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach($user as $a)
                                <tr>
                                    <td>{{ $a->name }}</td>
                                    <td>{{ $a->email }}</td>
                                    <td>{{ $a->alamat }}</td>
                                    <td>{{ $a->no_telp }}</td>
                                    <td>
                                        <a href="{{ route('editUser', $a->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('deleteUser', $a->id) }}" method="POST" style="display:inline;">
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