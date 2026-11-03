<div><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Edit Produk</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body p-4">
                        {{-- Header Judul --}}
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="h3 fw-bold text-dark mb-0">Edit Produk</h1>
                            <a href="{{ route('product.index') }}" class="btn btn-outline-secondary btn-sm">Kembali</a>
                        </div>

                        <form action="{{ route('product.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        
                            {{-- Barcode Number --}}
                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="barcode_number">Nomor Barcode</label>
                                <input 
                                    type="text" 
                                    id="barcode_number"
                                    name="barcode_number" 
                                    class="form-control @error('barcode_number') is-invalid @enderror" 
                                    value="{{ old('barcode_number', $product->barcode_number ?? $product->barcode) }}" 
                                    placeholder="Contoh: PRD-00123" 
                                    required
                                >
                                @error('barcode_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            {{-- Product Name --}}
                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="product_name">Nama Produk</label>
                                <input 
                                    type="text" 
                                    id="product_name"
                                    name="product_name" 
                                    class="form-control @error('product_name') is-invalid @enderror" 
                                    value="{{ old('product_name', $product->product_name) }}" 
                                    placeholder="Contoh: Kopi Robusta 250gr" 
                                    required
                                >
                                @error('product_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            {{-- Buy Price & Sell Price (Grid 2 Kolom) --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold" for="buy_price">Harga Beli (Rp)</label>
                                    <input 
                                        type="number" 
                                        id="buy_price"
                                        name="buy_price" 
                                        class="form-control @error('buy_price') is-invalid @enderror" 
                                        value="{{ old('buy_price', $product->buy_price ?? $product->purchase_price) }}" 
                                        placeholder="0" 
                                        min="0"
                                        required
                                    >
                                    @error('buy_price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold" for="sell_price">Harga Jual (Rp)</label>
                                    <input 
                                        type="number" 
                                        id="sell_price"
                                        name="sell_price" 
                                        class="form-control @error('sell_price') is-invalid @enderror" 
                                        value="{{ old('sell_price', $product->sell_price ?? $product->selling_price) }}" 
                                        placeholder="0" 
                                        min="0"
                                        required
                                    >
                                    @error('sell_price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        
                            {{-- Supplier Selection --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold" for="supplier_id">Supplier</label>
                                <select 
                                    id="supplier_id"
                                    name="supplier_id" 
                                    class="form-select @error('supplier_id') is-invalid @enderror"
                                >
                                    <option value="">-- Pilih Supplier (Opsional) --</option>
                                    @foreach (($suppliers ?? []) as $sup)
                                        <option value="{{ $sup->id }}" {{ (string)old('supplier_id', $product->supplier_id) === (string)$sup->id ? 'selected' : '' }}>
                                            {{ $sup->supplier_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('supplier_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            {{-- Action Buttons --}}
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('product.index') }}" class="btn btn-light px-4">
                                    Batal
                                </a>
                                <button type="submit" class="btn btn-warning text-white px-4">
                                    Perbarui Produk
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    