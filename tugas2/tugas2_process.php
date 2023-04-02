<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Memproses Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>

    <?php
    $nama = $_POST['nama'];
    $matpel = $_POST['matpel'];
    $nilai = $_POST['nilai'];
    $tombol = $_POST['proses'];
    $kelulusan = ($nilai > 60) ? "Lulus" : "Tidak lulus";
    if ($nilai >= 86) {
        $grade = "A";
    } elseif ($nilai >= 76 && $nilai < 86) {
        $grade = "B";
    } elseif ($nilai >= 60 && $nilai < 76) {
        $grade = "C";
    } elseif ($nilai >= 31 && $nilai < 60) {
        $grade = "D";
    } else {
        $grade = "E";
    }
    //cetak data jika form sudah dieksekusi
    if (isset($tombol)) {
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th><?= $nama ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Matpel</td>
                    <td><?= $matpel ?></td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td><?= $nilai ?></td>
                </tr>
                <tr>
                    <td>Kelulusan</td>
                    <td><?= $kelulusan ?></td>
                </tr>
                <tr>
                    <td>Grade</td>
                    <td><?= $grade ?></td>
                </tr>
            </tbody>
        </table>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>