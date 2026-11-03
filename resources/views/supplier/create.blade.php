<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h1 class="h3 fw-bold text-dark mb-0">Tambah Supplier</h1>
                        </div>

                        {{--Form Input Data Supplier--}}
                        <form action="{{ route('supplier.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="supplier_name">Nama Supplier</label>
                                <input 
                                    type="text" 
                                    id="supplier_name"
                                    name="supplier_name" 
                                    class="form-control @error('supplier_name') is-invalid @enderror" 
                                    value="{{ old('supplier_name') }}" 
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
                                    value="{{ old('phone') }}" 
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
                                    value="{{ old('email') }}" 
                                    placeholder="Contoh: [EMAIL_ADDRESS]" 
                                    required
                                >
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{--Tombol Aksi--}}
                            <div class="d-flex gap-2">
                                <a href="{{ route('supplier.index') }}" class="btn btn-outline-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan Supplier</button>
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
    <form action="{{ route('supplier.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>
                    <h1>Buat Supplier</h1>
                </td>
            </tr>
            <tr>
                <td>Nama Supplier</td>
                <td>
                    <input type="text" name="supplier_name" value="{{ old('supplier_name') }}">
                    @error('supplier_name') <small style="color:red">{{ $message }}</small> @enderror
                </td>
            </tr>
            <tr>
                <td>No. Telp</td>
                <td>
                    <input type="number" name="phone" value="{{ old('phone') }}">
                    @error('phone') <small style="color:red">{{ $message }}</small> @enderror
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" value="{{ old('email') }}">
                    @error('email') <small style="color:red">{{ $message }}</small> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('supplier.index') }}"><button type="button">Batal</button></a>
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</div> -->