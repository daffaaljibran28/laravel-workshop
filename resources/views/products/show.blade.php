<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Produk</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container-fluid mt-4">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <h1 class="h3 mb-0 text-gray-800">
                Detail Produk
            </h1>

            <a href="{{ route('products.index') }}"
               class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>

        </div>

        <!-- Product Detail -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Informasi Produk
                </h6>
            </div>

            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">
                        Nama Produk
                    </div>

                    <div class="col-md-9">
                        {{ $product->name }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">
                        SKU
                    </div>

                    <div class="col-md-9">
                        {{ $product->sku }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">
                        Harga
                    </div>

                    <div class="col-md-9">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">
                        Stok
                    </div>

                    <div class="col-md-9">
                        {{ $product->stock }}
                    </div>
                </div>

                <div class="mt-4">

                    <a href="{{ route('products.edit', $product) }}"
                       class="btn btn-warning">
                        <i class="fas fa-edit"></i>
                        Edit Produk
                    </a>

                    <a href="{{ route('products.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>