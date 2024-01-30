<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Data Siswa Dimari</h1>
    <table class="table table-striped">
        <thead>
            <th>Nama</th>
            <th>NIS</th>
            <!-- <th>Icon</th> -->
        </thead>
        <tbody>
            <?php   $iteration = 1;    ?>
            <?php foreach ($data['siswa'] as $s) : ?>
                <tr>

                    <td><?=$iteration++ ?></td>
                    <td><?= $s['nama'] ?></td>
                    <td><?= $s['nis'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>