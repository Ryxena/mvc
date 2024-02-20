<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="../public/design/" class="btn btn-primary">Back</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src=<?= "../../public/img/product/" . $data['data'][0]['gambar'] ?> alt="" style="width: 500px">
                            <?php if ($data['data'][0]['stok'] == 0) : ?>
                                <h3 class="text-danger">Barang tidak tersedia!!</h3>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <h1><?= $data['data'][0]['nama_barang'] ?></h1>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp.<?= number_format($data['data'][0]['harga']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td><?= $data['data'][0]['stok']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td><?= $data['data'][0]['keterangan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ukuran</td>
                                        <td>:</td>
                                        <td>
                                            <button onclick="ukuran('S')">S</button>
                                            <button onclick="ukuran('L')">L</button>
                                            <button onclick="ukuran('M')">M</button>
                                        </td>
                                    </tr>
                                    <?php if ($data['data'][0]['stok'] !== 0) : ?>
                                        <tr>
                                            <td>Jumlah Pesan</td>
                                            <td>:</td>
                                            <td>
                                                <button onclick="kurangValue()" name="minus">-</button>
                                                <input type="number" id="myNumber" class="">
                                                <button onclick="tambahValue()" name="plus">+</button>
                                            </td>
                                        </tr>
                                        <form action="toCart" method="post">
                                            <!-- @csrf -->
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <input type="hidden" name="ukuran" id="ukuran" required>
                                                    <input type="hidden" name="id_product" value="<?= $data['data'][0]['id']; ?>">
                                                    <input type="hidden" name="jumlah_pesan" id="input2">
                                                    <button type="submit" class="btn" style="background-color: #3d3d3d; color: white;"><i class='bx bx-shopping-bag'></i> Masukkan Keranjang</button>
                                                </td>
                                            </tr>
                                        </form>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Dapatkan elemen input
    let inputElement = document.getElementById("myNumber");
    // Dapatkan nilai saat ini
    var nilaiSaatIni = parseInt(inputElement.value = 1);
    let input2 = document.getElementById('input2');
    input2.value = nilaiSaatIni;
    // nilai stok dari php
    let stok = <?= $data['data'][0]['stok']; ?>;

    function tambahValue() {
        // Perbarui nilai saat ini dengan nilai dari input
        nilaiSaatIni = parseInt(inputElement.value); // Tambahkan baris ini
        if (nilaiSaatIni < 1) {
            inputElement.value = 1;
        } else {
            var nilaiBaru = nilaiSaatIni + 1;
            // Periksa jika nilai baru lebih kecil dari stok sebelum menambahkannya
            if (nilaiBaru <= stok) { // Tambahkan kondisi ini
                inputElement.value = nilaiBaru;
                input2.value = inputElement.value;
                document.querySelector('button[name="minus"]').disabled = false;
            }
        }
    }


    function kurangValue() {
        // Perbarui nilai saat ini dengan nilai dari input
        nilaiSaatIni = parseInt(inputElement.value); // Tambahkan baris ini
        if (nilaiSaatIni <= 1) {
            inputElement.value = 1;
            document.querySelector('button[name="minus"]').disabled = true;
        } else {
            var nilaiBaru = nilaiSaatIni - 1;
            // Periksa jika nilai baru lebih besar dari 0 sebelum menguranginya
            if (nilaiBaru > 0) { // Tambahkan kondisi ini
                inputElement.value = nilaiBaru;
                input2.value = inputElement.value;
                // Aktifkan kembali tombol plus
                document.querySelector('button[name="plus"]').disabled = false;
            }
        }
    }

    function ukuran(pilihan) {
        let pilih = document.getElementById('ukuran');
        if (pilihan == 'S') {
            pilih.value = 'S';
        } else if (pilihan == 'L') {
            pilih.value = 'L';
        } else if (pilihan == 'M') {
            pilih.value = 'M';
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>