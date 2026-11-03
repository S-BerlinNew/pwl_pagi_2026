<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Tambah Produk Baru</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="h3 fw-bold text-dark mb-0">Tambah Produk Baru</h1>
                        </div>

                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Barcode</label>
                                <input type="text" name="barcode_number" class="form-control @error('barcode_number') is-invalid @enderror" value="{{ old('barcode_number') }}" placeholder="Masukkan nomor barcode...">
                                @error('barcode_number') 
                                    <div class="invalid-feedback">{{ $message }}</div> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Produk</label>
                                <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" value="{{ old('product_name') }}" placeholder="Masukkan nama produk...">
                                @error('product_name') 
                                    <div class="invalid-feedback">{{ $message }}</div> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Harga Beli</label>
                                <input type="number" name="buy_price" class="form-control @error('buy_price') is-invalid @enderror" value="{{ old('buy_price') }}" placeholder="Contoh: 50000">
                                @error('buy_price') 
                                    <div class="invalid-feedback">{{ $message }}</div> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Harga Jual</label>
                                <input type="number" name="sell_price" class="form-control @error('sell_price') is-invalid @enderror" value="{{ old('sell_price') }}" placeholder="Contoh: 65000">
                                @error('sell_price') 
                                    <div class="invalid-feedback">{{ $message }}</div> 
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Supplier</label>
                                <select name="supplier_id" class="form-select @error('supplier_id') is-invalid @enderror">
                                    <option value="">--- Pilih Supplier ---</option>
                                    @foreach ($suppliers as $sup)
                                        <option value="{{ $sup->id }}" {{ (string) old('supplier_id') === (string) $sup->id ? 'selected' : '' }}>
                                            {{ $sup->supplier_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('supplier_id') 
                                    <div class="invalid-feedback">{{ $message }}</div> 
                                @enderror
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('product.index') }}" class="btn btn-light px-4">Batal</a>
                                <button type="submit" class="btn btn-primary px-4">Simpan Produk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
