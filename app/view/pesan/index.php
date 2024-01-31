<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/home') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1><box-icon name='cart-alt'></box-icon> Checkout</h1>
                        if (!empty($_SESSION["pesanan"]))
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Ukuran</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($pesanan_details as $pesanan_detail)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                    <td>{{ $pesanan_detail->ukuran }}</td>
                                    <td>{{ $pesanan_detail->jumlah }}</td>
                                    <td>Rp.{{ number_format($pesanan_detail->barang->harga) }}</td>
                                    <td>Rp.{{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                    <td>
                                        <form action="{{ url('checkout/' . $pesanan_detail->id) }}" method="post" >
                                            <button type="submit" class="btn btn-danger btn-sm"><box-icon type="solid" name='trash'></box-icon></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="5" align="right"><strong>Total Harga : </strong></td>
                                    <td><strong>Rp.{{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                    <td>
                                        <a href="{{ url('/confirm-checkout') }}" class="btn btn-success" onclick="confirm('Anda yakin mau checkout?')"><box-icon name='cart-alt'></box-icon> Checkout</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>