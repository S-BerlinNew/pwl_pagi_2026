<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
    {{-- Header Judul & Tombol Tambah --}}
        <div class="align-items-center mb-4">
            <div>
                <a href="{{ route('home.pwl') }}" class="btn btn-primary shadow-sm">
                    <i class="bi bi-plus-lg"></i>Kembali
                </a>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="h3 fw-bold text-dark">Daftar Produk</h1>
                    <p class="text-muted mb-0">Menampilkan semua daftar produk dan supplier terkait</p>
                </div>
                <div>
                    <a href="{{ route('product.create') }}" class="btn btn-primary shadow-sm">+ Tambah Produk</a>
                </div>
            </div>
        </div>

    <!-- {{-- Pesan Sukses (Alert) --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif -->

    {{-- Card & Data Table --}}
    <div class="card border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-uppercase fs-7">
                        <tr>
                            <th class="py-3 px-4">No</th>
                            <th class="py-3">Barcode</th>
                            <th class="py-3">Nama Produk</th>
                            <th class="py-3">Harga Beli</th>
                            <th class="py-3">Harga Jual</th>
                            <th class="py-3">Supplier</th>
                            <th class="py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $item)
                            <tr>
                                <td class="px-4 fw-semibold text-secondary">
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border">{{ $item->barcode_number }}</span>
                                </td>
                                <td>
                                    <span class="fw-bold text-dark">{{ $item->product_name }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">
                                        Rp {{ number_format($item->buy_price ?? 0, 0, ',', '.') }}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-success fw-medium">
                                        Rp {{ number_format($item->sell_price ?? 0, 0, ',', '.') }}
                                    </span>
                                </td>
                                <td>
                                    @if ($item->supplier)
                                        <span>{{ $item->supplier->supplier_name }}</span>
                                    @else
                                        <span>Tidak ada supplier</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('product.edit', $item->id) }}" class="btn btn-sm btn-warning text-white px-3" title="Edit Produk">
                                            Edit
                                        </a>
                                        
                                        {{-- Form Hapus dengan Konfirmasi --}}
                                        <form action="{{ route('product.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger px-3" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <div class="text-muted py-4">
                                        <p class="mb-2">Belum ada produk yang didaftarkan dalam sistem.</p>
                                        <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary">
                                            + Tambah Produk Pertama
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
</body>
</html>
