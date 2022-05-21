<main class="container mt-5">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createKaryawan">Tambah Data</button>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Departemen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($karyawans) > 0)
                    @foreach ($karyawans as $karyawan)
                        <tr>
                            <td>{{ $karyawan->NIP }}</td>
                            <td>{{ $karyawan->Nama }}</td>
                            <td>{{ $karyawan->TglLahir }}</td>
                            <td>{{ $karyawan->Departemen }}</td>
                            <td>
                                <span class="btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editKaryawan" wire:click="edit({{ $karyawan->id }})">Edit</span>
                                <span class="btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteKaryawan" wire:click="delete({{ $karyawan->id }})">Delete</span>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center mt-3">
            {{ $karyawans->links() }}
        </div>
    </div>
    @include('create')
    @include('edit')
    @include('delete')
</main>