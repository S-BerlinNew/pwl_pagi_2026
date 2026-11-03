<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Edit Supplier</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body p-4">
                        {{--Header Judul}}
                        <div class="d-flex align-items-center justify-content-between">
                            <h1 class="h3 fw-bold text-dark mb-0">Edit Supplier</h1>
                            <a href="{{ route('supplier.index') }}" class="btn btn-outline-secondary btn-sm">Kembali</a>
                        </div>

                        {{--Form Input Data Supplier--}}
                        <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="supplier_name">Nama Supplier</label>
                                <input 
                                    type="text" 
                                    id="supplier_name"
                                    name="supplier_name" 
                                    class="form-control @error('supplier_name') is-invalid @enderror" 
                                    value="{{ old('supplier_name', $supplier->supplier_name) }}" 
                                    placeholder="Contoh: Supplier Kopi Sejahtera" 
                                    required
                                >
                                @error('supplier_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="phone">Nomor Telepon</label>
                                <input 
                                    type="text" 
                                    id="phone"
                                    name="phone" 
                                    class="form-control @error('phone') is-invalid @enderror" 
                                    value="{{ old('phone', $supplier->phone) }}" 
                                    placeholder="Contoh: 08123456789" 
                                    required
                                >
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="email">Email</label>
                                <input 
                                    type="email" 
                                    id="email"
                                    name="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    value="{{ old('email', $supplier->email) }}" 
                                    placeholder="Contoh: [EMAIL_ADDRESS]" 
                                    required
                                >
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Tombol Aksi --}}
                            <div class="d-flex gap-2">
                                <a href="{{ route('supplier.index') }}" class="btn btn-outline-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Perbarui Supplier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>


<!-- <div>
    <div>
        <h1>Edit Supplier</h1>
    </div>

    <div>
        <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="supplier_name">Nama Supplier</label>
                <input 
                    type="text" 
                    id="supplier_name"
                    name="supplier_name" 
                    class="form-control @error('supplier_name') input-error @enderror" 
                    value="{{ old('supplier_name', $supplier->supplier_name) }}" 
                    placeholder="Contoh: Supplier Kopi Sejahtera" 
                    required
                >
                @error('supplier_name')
                    <span class="text-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="phone">Nomor Telepon</label>
                <input 
                    type="text" 
                    id="phone"
                    name="phone" 
                    class="form-control @error('phone') input-error @enderror" 
                    value="{{ old('phone', $supplier->phone) }}" 
                    placeholder="Contoh: 08123456789" 
                    required
                >
                @error('phone')
                    <span class="text-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input 
                    type="email" 
                    id="email"
                    name="email" 
                    class="form-control @error('email') input-error @enderror" 
                    value="{{ old('email', $supplier->email) }}" 
                    placeholder="[EMAIL_ADDRESS]" 
                    required
                >
                @error('email')
                    <span class="text-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="btn-group">
                <a href="{{ route('supplier.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    Perbarui Supplier
                </button>
            </div>
        </form>
    </div>
</div> -->