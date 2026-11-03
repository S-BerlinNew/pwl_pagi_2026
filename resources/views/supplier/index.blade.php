<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        {{-- Header Judul & Tombol Tambah Supplier --}}
        <div class="align-items-center mb-4">
            <div>
                <a href="{{ route('home.pwl') }}" class="btn btn-primary shadow-sm">
                    <i class="bi bi-plus-lg"></i>Kembali
                </a>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="h3 fw-bold text-dark mb-0">Daftar Supplier</h1>
                    <p class="text-muted mb-0">Menampilkan semua daftar supplier</p>
                </div>
                <div>
                    <a href="{{ route('supplier.create') }}" class="btn btn-primary shadow-sm">+ Tambah Supplier</a>
                </div>
            </div>
        </div> 

        <div>
            <!-- @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif -->

            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-items-center mb-0">
                        <thead class="table-light text-uppercase fs-7">
                            <tr>
                                <th class="py-3 px-4">No</th>
                                <th class="py-3">Nama Supplier</th>
                                <th class="py-3">No. Telp</th>
                                <th class="py-3">Email</th>
                                <th class="py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($suppliers as $item)
                                <tr>
                                    <td class="px-4 fw-semibold text-secondary">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <span class="fw-bold text-dark">{{ $item->supplier_name }}</span>
                                    </td>
                                    <td>
                                        <span class="fw-medium">{{ $item->phone }}</span>
                                    </td>
                                    <td>
                                        <span class="fw-medium">{{ $item->email }}</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('supplier.edit', $item->id) }}" class="btn btn-sm btn-warning text-white px-3" title="EditSupplier">
                                                Edit
                                            </a>
                                            <form action="{{ route('supplier.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger px-3" onclick="return confirm('Apakah Anda yakin ingin menghapus supplier ini?');">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        <div class="empty-state">
                                            <p>Belum ada supplier yang terdaftar dalam sistem.</p>
                                            <a href="{{ route('supplier.create') }}" class="btn btn-primary">
                                                + Tambah Supplier Pertama
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>

<!-- <div>
    <div>
        <h1>Daftar Supplier</h1>
        <p>Menampilkan semua daftar supplier</p>
    </div>
    <div>
        <a href="{{ route('supplier.create') }}"><button>Tambah Supplier</button></a>
    </div>
</div>

{{-- Pesan sukses dari controller --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Card Data Table --}}
<div class="card">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($suppliers as $item)
                    <tr>
                        <td style="width: 50px; text-align: center;">
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            <span>{{ $item->supplier_name }}</span>
                        </td>
                        <td>
                            <span>{{ $item->phone }}</span>
                        </td>
                        <td>
                            <span>{{ $item->email }}</span>
                        </td>
                        <td>
                            <a href="{{ route('supplier.edit', $item->id) }}">
                                <button>Edit</button>
                            </a>
                            <form action="{{ route('supplier.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <div class="empty-state">
                                <p>Belum ada supplier yang terdaftar dalam sistem.</p>
                                <a href="{{ route('supplier.create') }}" class="btn btn-primary">
                                    + Tambah Supplier Pertama
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div> -->